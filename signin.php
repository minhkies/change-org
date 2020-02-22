<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>sign in popup</title>
    <link href="styles/signin.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="popup_container">
    <div class="popup">
        <div class="left">
        <!-- <img src="./img/white_logo.png" alt="Logo 2" class="small_logo"/> -->
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player
            src="https://assets6.lottiefiles.com/datafiles/wW9k6ALg5Mn9cIj/data.json"  background="transparent"  speed="1"  style="width: 100%; height:100%;"  loop autoplay >
        </lottie-player>
        <p class="white">Changing the world</p>
        </div>

        <div class="right">
            <form class="signin" action="" method="post">
                <p class="input_title">Email</p>
                <input type="text" name="email" placeholder="email@host.com">
                <p class="input_title">Password</p>
                <input type="password" name="password">
            </form>
           <button class="login">Login</button>
        </div>

    </div>
 </div>

    
</body>
</html>