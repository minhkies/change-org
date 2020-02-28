function login() {
    let username = document.querySelector(".username").value;
    let password = document.querySelector(".password").value;

    let data = new FormData();

    data.append("username", username);
    data.append("password", password);

    const httpc = new XMLHttpRequest()
    httpc.open("POST", "./php/getLogin.php", true);
    httpc.send(data);
    httpc.onreadystatechange = function () {
        if (httpc.readyState === 4 && httpc.status === 200) {
            if (this.responseText==="success"){
                location.reload();
            } ;
        }
    };
}