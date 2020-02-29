

function getAllPost() {

    let ajax = new XMLHttpRequest();
    ajax.open("POST", "./php/getPost.php", true);
    ajax.send();
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4 && ajax.status == 200) {
            document.querySelector(".posts-container").innerHTML = "";
            let data = JSON.parse(this.responseText);
            let donateCount = 0;
            data.map((o, i) => {
                let post = "";
                post += "<div class='post'>";
                post += "<div class='cover-img'>";
                post += "<div class='base-container'>";
                post += "<img src='./img/" + o.base + ".svg' alt='Base'/>";
                post += "</div>";
                post += "<div class='del-container' onclick='deletePost("+decodeURIComponent(o.pid)+","+ decodeURIComponent(o.uid)+")'>";
                post += "<img src='./img/close.svg' alt='x'/>";
                post += "</div>";
                post += "</div>";
                post += "<div class='post-info'>";
                post += "<div class='collapsible-container'>";
                post += "<p class='post-title mid-text'>"+decodeURIComponent(o.title)+"</p>";
                post += "<p class='recipient'>Fundraiser to <span class='recipient-name'>"+decodeURIComponent(o.recipient)+"</span></p>";
                post += "<div class='contribution-container'>";
                post += "<p class='txt-contribution'>Contributions</p>";
                post += "<div class='progress-container'>";
                post += "<div class='bar-container'>";
                post += "<div class='current-bar'></div>";
                post += "</div>";
                post += "<div class='number-container'>";
                post += "<div>";
                post += "<p class='txt-zero'>$0.00</p>";
                post += "</div>";
                if (o.current_amount !== null){
                    post += "<div>";
                    post += "<p class='txt-current'>$"+decodeURIComponent(o.current_amount).replace(/\B(?=(\d{3})+(?!\d))/g, ",")+"</p>";
                    post += "</div>"
                } else {
                    donateCount++;
                }
                post += "<div>";
                post += "<p class='txt-total'>$"+decodeURIComponent(o.goal).replace(/\B(?=(\d{3})+(?!\d))/g, ",")+"</p>";
                post += "</div>";
                post += "</div>";
                post += "</div>";
                post += "</div>";
                post += "<div class='problem-container'>";
                post += "<p class='problem'>"+decodeURIComponent(o.problem)+"</p>";
                post += "</div>";
                post += "<div class='donation-container'>";
                post += "<p class='mid-text'>Support this fundraiser</p>";
                post += "<div class='cc-container'>";
                post += "<input type='text' class='name' name='name' placeholder='Name on Card'>";
                post += "<input type='text' class='cc-number' name='cCNumber' maxlength='19' placeholder='Credit Card Number' oninput='cardNumber("+i+")'>";
                post += "<input type='text' class='email' name='email' placeholder='Email'>";
                post += "<input type='text' class='exp' name='exp' maxlength='5' placeholder='Expiry Date (MM/YY)' oninput='expDate("+i+")'>";
                post += "<input type='text' class='address' name='address' placeholder='Address'>";
                post += "<input type='text' maxlength='4' class='cvv' name='cvv' placeholder='CVV'>";
                post += "<input type='text' class='amount' name='amount' placeholder='Amount' oninput='donateAmount("+i+")' onblur='checkGoal("+i+")' onfocus='addDollar("+i+")'>";
                post += "<input type='submit' value='Submit' name='add-donation' class='cc-submit-btn' onclick='checkInp("+i+","+o.pid+")'>";
                post += "</div>";
                post += "<p class='card-error'></p>";
                post += "</div>";
                post += "</div>";
                post += "<div class='btn-collapse'><p class='txt-btn-collapse' onclick='changeSize("+i+",true)'>Read More</p></div>";
                post += "</div>"
                post += "</div>";
                document.querySelector(".posts-container").innerHTML += post;
                (decodeURIComponent(o.img)!=="")?document.querySelectorAll(".cover-img")[i].style.backgroundImage = "url('"+decodeURIComponent(o.img)+"')":document.querySelectorAll(".cover-img")[i].style.backgroundImage = "url('./img/"+decodeURIComponent(o.base)+"-bg.svg')";
                document.querySelectorAll(".current-bar")[i].style.width = (o.current_amount!==null)?parseFloat(decodeURIComponent(o.current_amount))/parseFloat(decodeURIComponent(o.goal))*35 + "vw":0;
                if (o.current_amount!==null){
                    document.querySelectorAll(".number-container")[i].style.gridTemplateColumns = "calc("+parseFloat(decodeURIComponent(o.current_amount))/parseFloat(decodeURIComponent(o.goal))*35+"vw - "  + (document.querySelectorAll(".txt-current")[i-donateCount].clientWidth)/2 + "px) auto 1fr";
                } else {
                    document.querySelectorAll(".number-container")[i].style.gridTemplateColumns = "repeat(2, 1fr)"
                }
            })
        }
    }
}