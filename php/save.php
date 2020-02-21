<?php

require "./post.php";


if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    if (isset($_POST['base'])&&isset($_POST['title'])&&isset($_POST['recipient'])&&isset($_POST['goal'])&&isset($_POST['problem'])){
        $base = $_POST['base'];
        $title = $_POST['title'];
        $recipient = $_POST['recipient'];
        $goal = $_POST['goal'];
        $problem = $_POST['problem'];
        $img = isset($_POST['img'])?$_POST['img']:'';

        $post = new Post('1', $base, $title, $recipient, $goal, $problem, $img);
        $post -> savePost();

    } else {
        echo 'Please fulfill the requirements';
    }



}