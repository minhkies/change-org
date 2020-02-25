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

function checkInp(i) {
    if (document.querySelectorAll(".name")[i].value===""||document.querySelectorAll(".cc-number")[i].value===""||document.querySelectorAll(".email")[i].value===""||document.querySelectorAll(".exp")[i].value===""||document.querySelectorAll(".address")[i].value===""||document.querySelectorAll(".cvv")[i].value===""||document.querySelectorAll(".amount")[i].value===""){
        document.querySelectorAll(".card-error")[i].innerHTML="Please fulfill the requirements."
        document.querySelectorAll(".cc-container")[i].addEventListener("submit", function (event) {
            event.preventDefault();
        });
    } else {
        console.log("hihih")
        let data = new FormData();

        data.append("amount",  document.querySelectorAll(".amount")[i].value.replace(/[^0-9.]/g, ''));
        data.append("pid", i+1);


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

