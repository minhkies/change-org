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
            <img src="./img/logo.png" alt="Logo"/>
        </div>
        <div class="nav-container">
            <?php
            session_start();
            if (isset($_SESSION['username'])){
                echo "<p>Welcome " . $_SESSION['first_name'] . " " . $_SESSION['last_name'] . "</p>";
            } else {
                echo "<p id='login-btn' class='btn-login'>Login</p>";
            }?>

        </div>
    </div>

    <!-- The Modal -->
    <div id="open-signin" class="modal">
        <!-- Modal content -->
        <div class="modal-content">


            <div class="signin-container">
                <div class="signin-content-left">
                    <img src="./img/login.svg" alt="sign in illustration" style="width:80%"/>
                </div>
                <div class="signin-content-right" method="POST">
                    <h2 style="text-align:center">Login to your account</h2>
                    <div class="signin">
                        <p class="input_title">Username</p>
                        <input type="text" name="username" placeholder="Username" required class="username">
                        <p class="input_title">Password</p>
                        <input type="password" name="password" placeholder="*************" required class="password">
                        <button class="login-button" onclick="login()" >Login</button>
                    </div>
                    <p style="text-align:center">Don't have an account? <span style="color:red;">Sign Up</span>
                    </p>
                </div>
            </div>
            <span class="close">&times;</span>
        </div>

    </div>



    <!-- HERO IMAGE -->
    <div class="hero">
        <div class="hero-content-container">

            <div class="left-hero">
                <p class="txt-hero large-text">The World's Platform for Change</p>
                <div class="txt-desc-container">
                    <div class="redline"></div>
                    <p class="txt-desc">Starting campaigns, mobilizing supporters, and &#8232;working with decision makers to drive solutions.</p>
                </div>
                <?php
                     if (isset($_SESSION['username'])){
                         echo "<div class='btn-hero' onclick='redirectCreate()'><p>Start a Fundraiser</p></div>";
                     } else {
                         echo "<div class='btn-hero' onclick='openSignin()'><p>Start a Fundraiser</p></div>";
                     }
                ?>
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
                        src="https://assets2.lottiefiles.com/datafiles/dDPvFVVCJF6DUtn/data.json" background="transparent" speed="1.5" style="width: 500px; height: 350px;" loop autoplay >
                </lottie-player>
            </div>
        </div>
    </div>


    <!-- STATS SECTION -->
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
            <div class="about-card">
                <div class="about-icon">
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                    <lottie-player
                            src="https://assets5.lottiefiles.com/datafiles/NvSZw4XogL6CADr/data.json" background="transparent" speed="1" style="width: 8vw; text-align:center;" loop autoplay >
                    </lottie-player>
                </div>
                <p class="mid-text">We demand excellence</p>
                <p>To build an organisation capable of achieving great things, we aspire to be extraordinary at everything we do. We relentlessly pursue excellence in both the big and small things we do every day.</p>
            </div>

            <div class="about-card">
                <div class="about-icon">
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                    <lottie-player
                            src="https://assets1.lottiefiles.com/packages/lf20_asj6zn.json" background="transparent" speed="1" style="width: 6vw; padding:0em; text-align:center;" loop autoplay >
                    </lottie-player>
                </div>
                <p class="mid-text">We think big</p>
                <p>We believe that together with our users, we have the opportunity to change the course of history. To realise this potential we are ambitious in everything we do and audaciously optimistic about what is possible.</p>
            </div>


            <div class="about-card">
                <div class="about-icon">
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                    <lottie-player
                            src="https://assets8.lottiefiles.com/packages/lf20_dVgSRz.json" background="transparent" speed="1" style="width: 6vw; padding:0em; text-align:center;" loop autoplay >
                    </lottie-player>
                </div>
                <p class="mid-text">We love and understand</p>
                <p>Loving and authentic relationships are the foundation for our work together. We care deeply for our teammates and our users, seeking to understand them and treating them with warmth and respect.</p>

            </div>
        </div>
    </div>



    <!-- POSTS -->

    <div class="posts-container">
        <p class="post-container-header mid-text">Latest Fundraisers</p>
    </div>
</div>
<script src="./js/getPosts.js" type="application/javascript"></script>
<script src="./js/post.js" type="application/javascript"></script>

<!-- SIGN IN POPUP JS -->
<script src="./js/login-popup.js"></script>


<footer>
<div class="footer-content-container">
    <div class="footer-content">
        <div class="footer-content-items">
        <p class="footer-title">About Us</p>
        <p class="f-items">History</p>
        <p class="f-items">Values</p>
        <p class="f-items">Success Stories</p>
        </div>
        <div class="footer-content-items">
        <p class="footer-title">Careers</p>
        <p class="f-items">Who We Are</p>
        <p class="f-items">Opportunities</p>
        <p class="f-items">Job postings</p>
        </div>
        <div class="footer-content-items">
        <p class="footer-title">Social</p>
        <p class="f-items">Facebook</p>
        <p class="f-items">Instagram</p>
        <p class="f-items">Twitter</p>
        </div>
        <div class="footer-content-items">
        <p class="footer-title">Contact</p>
        <p class="f-items">1443 65B Ave</p>
        <p class="f-items">changecommunity.ca</p>
        <p class="f-items">604.553.3859</p>
        </div>
    </div>

</footer>

<script src="./js/getPosts.js" type="text/javascript"></script>
<script src="./js/post.js" type="text/javascript"></script>
<script src="./js/login.js" type="text/javascript"></script>
</body>
</html>
<?php
require_once "./php/init.php";