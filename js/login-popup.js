var modal = document.getElementById("open-signin");
var btn = document.getElementById("login-btn");
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the signin 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on x, close the popup
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the popup, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

function openSignin() {
  modal.style.display = "block";
}

function redirectCreate() {
  location.href="./create.php"
}