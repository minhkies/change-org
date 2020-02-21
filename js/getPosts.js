function getAllPost() {

    let ajax = new XMLHttpRequest();
    ajax.open("POST", "./php/getPost.php", true);
    ajax.send();
    ajax.onreadystatechange = function() {
        let data = JSON.parse(this.responseText);
        console.log(data);
        let post = "";
        data.map((o,i)=>{
            post += "<div class='post'>";
                post += "<div class='cover-img' style='background-image: url("+o.img+")'>";
                    post += "<div class='base-container'>";
                        post+="<img src='./img/"+o.base+".svg' alt='Base'/>";
                    post+="<div/>";
                    post += "<div class='del-container'>";
                        post+="<p class='txt-del'>x</p>";
                    post+="<div/>";
                post+="<div/>";
                post+="<div class='post-info'>";
            post+="";
            post+="";
            post+="";
            post+="";
            post+="";
        })

        }
};