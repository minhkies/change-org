function changeSize(i, state){
    if (state===true){
        document.querySelectorAll(".post-info")[i-1].style.height = "auto";
        document.querySelectorAll(".collapsible-container")[i-1].style.height = "auto";
        document.querySelectorAll(".txt-btn-collapse")[i-1].innerHTML = "Read Less"
    } else {
        document.querySelectorAll(".post-info")[i-1].style.height = "25vw";
        document.querySelectorAll(".collapsible-container")[i-1].style.height = "calc(25vw - 120px)";
        document.querySelectorAll(".txt-btn-collapse")[i-1].innerHTML = "Read More"
    }
    document.querySelectorAll(".txt-btn-collapse")[i-1].setAttribute("onclick", "changeSize(" + i + ", " + !state + ")");
}