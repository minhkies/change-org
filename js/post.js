function changeSize(i, state){
    if (state===true){
        document.querySelectorAll(".post-info")[i].style.height = "auto";
        document.querySelectorAll(".collapsible-container")[i].style.height = "auto";
        document.querySelectorAll(".txt-btn-collapse")[i].innerHTML = "Read Less"
    } else {
        document.querySelectorAll(".post-info")[i].style.height = "25vw";
        document.querySelectorAll(".collapsible-container")[i].style.height = "calc(25vw - 120px)";
        document.querySelectorAll(".txt-btn-collapse")[i].innerHTML = "Read More"
    }
    document.querySelectorAll(".txt-btn-collapse")[i].setAttribute("onclick", "changeSize(" + i + ", " + !state + ")");
}

function cardNumber(i) {
    let val = document.querySelectorAll(".cc-number")[i].value.replace(/\D/g,'');
    let result =val.match(/.{1,4}/g);
    if (result==null){
        document.querySelectorAll(".cc-number")[i].value = val
    } else {
        document.querySelectorAll(".cc-number")[i].value = result.join(" ");
    }
}

function expDate(i) {
    let val = document.querySelectorAll(".exp")[i].value.replace(/\D/g,'');
    let result =val.match(/.{1,2}/g);
    if (parseInt(result[0])>12){
        result.shift()
    }
    if (result==null){
        document.querySelectorAll(".exp")[i].value = val
    } else {
        document.querySelectorAll(".exp")[i].value = result.join("/");
    }

}

function donateAmount(i) {
    let goal = document.querySelectorAll(".amount")[i].value.replace(/[^0-9.]/g, '');
    document.querySelectorAll(".amount")[i].value = "$"+goal;
}

function addDollar(i) {
    document.querySelectorAll(".amount")[i].value = "$";
}
function checkGoal(i) {
    document.querySelectorAll(".amount")[i].value = document.querySelectorAll(".amount")[i].value.replace(/\B(?=(\d{3})+(?!\d))/g, ",")
}

function checkInp(i, pid) {
    if (document.querySelectorAll(".name")[i].value===""||document.querySelectorAll(".cc-number")[i].value===""||document.querySelectorAll(".email")[i].value===""||document.querySelectorAll(".exp")[i].value===""||document.querySelectorAll(".address")[i].value===""||document.querySelectorAll(".cvv")[i].value===""||document.querySelectorAll(".amount")[i].value===""){
        document.querySelectorAll(".card-error")[i].innerHTML="Please fulfill the requirements."
        document.querySelectorAll(".cc-container")[i].addEventListener("submit", function (event) {
            event.preventDefault();
        });
    } else {
        let data = new FormData();

        data.append("amount",  document.querySelectorAll(".amount")[i].value.replace(/[^0-9.]/g, ''));
        data.append("name",  document.querySelectorAll(".name")[i].value);
        data.append("billing",  document.querySelectorAll(".address")[i].value);
        data.append("pid", pid);


        const httpc = new XMLHttpRequest()
        httpc.open("POST", "./php/getDonation.php", true);

        httpc.onreadystatechange = function () { //Call a function when the state changes.
            if (httpc.readyState == 4 && httpc.status == 200) { // complete and no errors
                alert(httpc.responseText); // some processing here, or whatever you want to do with the response
            }
        };
        httpc.send(data);
    }
}

function deletePost(i, uid) {
    console.log("click me")
    let data = new FormData();

    data.append("id", i);
    data.append("uid", uid);

    const httpc = new XMLHttpRequest()
    httpc.open("POST", "./php/deletePost.php", true);

    httpc.onreadystatechange = function () { //Call a function when the state changes.
        if (httpc.readyState == 4 && httpc.status == 200) { // complete and no errors
            alert(httpc.responseText); // some processing here, or whatever you want to do with the response
        }
    };
    httpc.send(data);
}

