<?php


require "./login.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['username'])&&isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $loginInfo = new Login($username, $password);
        $loginInfo->login();
    }
}