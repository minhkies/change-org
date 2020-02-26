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


<!-- ////// END OF HERO IMAGE //////// -->
https://assets4.lottiefiles.com/packages/lf20_gxxiWD.json

<!-- VICTORIES SECTION -->

<div class="victories-container">
    <div class="victories-content">
        <p class="large-title"> 39,834 victories in 196 countries </p>
    </div>
    </div>

<!-- ////// END OF VICTORY SECTION ///// -->


<!-- ABOUT THE COMPANY SECTION -->

    <div class="about-container">
        <p class="mid-text">Who uses Change.org?</p>

        <div class="about-icon-container">
            <div class="about-icon">
            <img src="./img/organization.svg" alt="organizations" class="red-icons"/>
                hi
            </div>

            <div class="about-icon">
            <img src="./img/people.svg" alt="people" class="red-icons"/>
                hi
            </div>

            <div class="about-icon">
            <img src="./img/media.svg" alt="media" class="red-icons"/>
                hi
            </div>
        </div>

    </div>

<!-- ////// END OF COMPANY SECTION //////// -->


<!-- POSTS -->

        <div class="posts-container">
            <p class="post-container-header mid-text">Latest Posts</p>
        </div>
    </div>
<script src="./js/getPosts.js" type="application/javascript"></script>
    <script src="./js/post.js" type="application/javascript"></script>

</body>
</html>
<?php
require_once "./php/init.php";