let btnBase = document.querySelectorAll(".btn-container");

console.log(btnBase);

function selectBase(n) {
    for (let i=0; i<=4; i++){
        btnBase[i].className = "btn-container"
    }

    btnBase[n].className += " btn-selected"
}