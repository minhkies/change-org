<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>change.org News</title>
    <link href="styles/styles.css" rel="stylesheet" type="text/css">
    <link href="styles/post.css" rel="stylesheet" type="text/css">
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


<!--   HERO IMAGE -->
        <div class="hero">
            <div class="hero-content-container">

                <div class="left-hero">
                    <p class="txt-hero large-text">The World’s Platform for Change</p>
                    <div class="txt-desc-container">
                        <div class="redline"></div>
                        <p class="txt-desc">Starting campaigns, mobilizing supporters, and  working with decision makers to drive solutions.</p>
                    </div>

                    <div class="btn-hero">
                        <p>Start a Fundraiser</p>
                    </div>
                </div>

                <div class="right-hero">
                    <!-- My illustration in background -->
               </div>

            </div>
        </div>

<!-- VICTORIES SECTION -->
<div class="victories-container">
    <div class="victories-content">
        <div class="victory">
            <p class="large-title"> 39,834 victories in 196 countries </p>
            <p class="txt-desc" style="color:white;">People on Change.org work with decision makers to find new solutions to the big and small issues that impact their lives.</p>
        </div>
        <div class="victory">
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player
                src="https://assets2.lottiefiles.com/datafiles/dDPvFVVCJF6DUtn/data.json"  background="transparent"  speed="1.5"  style="width: 450px; height: 350px;"  loop autoplay >
            </lottie-player>
        </div>
    </div>
 </div>


<!-- ABOUT THE COMPANY SECTION -->
    <div class="stats-container">
        <div class="stats-left">
        </div>
        <div class="stats-right">
            <p class="mid-text">338,334,218 people taking action</p>
            <p class="txt-desc">On Change.org, people connect across geographic and cultural borders to support causes they care about. Every campaign you see on the platform is started by our users. People and organisations around the world use Change.org to start campaigns, mobilize supporters, and work with decision makers to drive solutions.</p>
        </div>
    </div>

<!-- ABOUT COMPANY SECTION -->
<div class="about-container">
    <p class="mid-text"> Our Values </p>

    <div class="about-container-content">
        <div class="about-card">We demand excellence.</div>
        <div class="about-card">We think big.</div>
        <div class="about-card">We offer solutions.</div>
    </div>


</div>



<!-- POSTS -->

        <div class="posts-container">
            <p class="post-container-header mid-text">Latest Fundraisers</p>
        </div>
    </div>
<script src="./js/getPosts.js" type="application/javascript"></script>
    <script src="./js/post.js" type="application/javascript"></script>



<footer>
    hi
</footer>
</body>
</html>
<?php
require_once "./php/init.php";