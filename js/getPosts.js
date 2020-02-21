function getAllPost() {

    let ajax = new XMLHttpRequest();
    ajax.open("POST", "./php/getPost.php", true);
    ajax.send();
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4 && ajax.status == 200) {
            let data = JSON.parse(this.responseText);
            console.log(data);

            data.map((o, i) => {
                let post = "";
                post += "<div class='post'>";
                    post += "<div class='cover-img'>";
                        post += "<div class='base-container'>";
                            post += "<img src='./img/" + o.base + ".svg' alt='Base'/>";
                        post += "</div>";
                        post += "<div class='del-container'>";
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

                                        if (parseFloat(decodeURIComponent(o.current_amount))!== 0){
                                            post += "<div>";
                                            post += "<p class='txt-current'>$"+decodeURIComponent(o.current_amount).replace(/\B(?=(\d{3})+(?!\d))/g, ",")+"</p>";
                                            post += "</div>"
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
                        post += "</div>";
                    post += "<div class='btn-collapse'><p class='txt-btn-collapse' onclick='changeSize("+decodeURIComponent(o.pid)+", true)'>Read More</p></div>";
                    post += "</div>";
                post += "</div>";

                document.querySelector(".posts-container").innerHTML += post;
                document.querySelectorAll(".cover-img")[i].style.backgroundImage = "url('"+decodeURIComponent(o.img)+"')";
                document.querySelectorAll(".current-bar")[i].style.width = parseFloat(decodeURIComponent(o.current_amount))/parseFloat(decodeURIComponent(o.goal))*35 + "vw";
                if (parseFloat(decodeURIComponent(o.current_amount)) !== 0){
                    document.querySelectorAll(".number-container")[i].style.gridTemplateColumns = "calc("+parseFloat(decodeURIComponent(o.current_amount))/parseFloat(decodeURIComponent(o.goal))*35+"vw - "  + (document.querySelectorAll(".txt-current")[i].clientWidth)/2 + "px) auto 1fr";
                } else {
                    document.querySelectorAll(".number-container")[i].style.gridTemplateColumns = "repeat(2, 1fr)"
                }
            })

        }
    }
};