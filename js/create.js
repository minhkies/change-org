let btnBase = document.querySelectorAll(".btn-container");
let inp = [document.querySelector(".inp-title"), document.querySelector(".inp-recipient"), document.querySelector(".inp-goal"), document.querySelector(".inp-problem"), document.querySelector(".inp-img")]
let btnSubmit = document.querySelector(".btn-submit");


function selectBase(n) {
    for (let i=0; i<btnBase.length; i++){
        btnBase[i].className = "btn-container"
    }
    btnBase[n].className += " btn-selected"
}

function check() {
    let count = 0;
    for (let i = 0; i < inp.length-1; i++) {
        if (inp[i].value !== "") {
            count++
        }
    }
    for (let i = 0; i < btnBase.length; i++) {
        if (btnBase[i].className === "btn-container btn-selected") {
            count++
        }
    }

    if (count >= 5) {
        btnSubmit.className = "btn-submit btn-active"
    } else {
        btnSubmit.className = "btn-submit"
    }
}

function checkNum(){
    let goal = inp[2].value.replace(/[^0-9.]/g, '');
    inp[2].value = "$"+goal;
}
function addDollar() {
    inp[2].value = "$";
}
function checkGoal() {
    inp[2].value = inp[2].value.replace(/\B(?=(\d{3})+(?!\d))/g, ",")
}


function submitData() {
    if (window.getComputedStyle(btnSubmit, null).getPropertyValue("background-color") === "rgb(242, 242, 242)") {
        return false;
    } else {
        let base;
        for (let i = 0; i < btnBase.length; i++) {
            if (btnBase[i].className === "btn-container btn-selected") {
                if(i===0){
                    base="animals"
                } else if(i===1){
                    base="health"
                } else if(i===2){
                    base="environment"
                } else if(i===3){
                    base="politics"
                } else {
                    base="other"}
            }
        }


        let data = new FormData();

        data.append("base",  encodeURIComponent(base));
        data.append("title", encodeURIComponent(inp[0].value));
        data.append("recipient", encodeURIComponent(inp[1].value));
        data.append("goal", encodeURIComponent(inp[2].value.replace(/[^0-9.]/g, '')));
        data.append("problem", encodeURIComponent(inp[3].value));
        data.append("img", encodeURIComponent(inp[4].value));


        const httpc = new XMLHttpRequest()
        httpc.open("POST", "./php/save.php", true);
        httpc.send(data);
        httpc.onreadystatechange = function () { //Call a function when the state changes.
            if (httpc.readyState == 4 && httpc.status == 200) { // complete and no errors
                document.querySelector(".dimmer").style.display="flex";// some processing here, or whatever you want to do with the response
            }
        };

    }
}