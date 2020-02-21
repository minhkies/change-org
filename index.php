<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>change.org News</title>
    <link href="styles/styles.css" rel="stylesheet" type="text/css">
</head>
<body onload="getAllPost()">
    <div class="container">
        <div class="nav">
            <div class="logo-container">
                <img src="./img/logo.png" alt=""Logo/>
            </div>
            <div class="nav-container">
                <p class="btn-login">Login</p>
            </div>
        </div>
        <div class="hero">
            <div class="hero-content-container">
                <p class="txt-hero large-text">The World’s Platform for Change</p>
                <div class="btn-hero">
                    <p>Start a Petition</p>
                </div>
            </div>
        </div>
        <div class="posts-container"></div>
    </div>
<script src="./js/getPosts.js" type="application/javascript"></script>
</body>
</html>
<?php
require_once "./php/init.php";