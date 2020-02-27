<?php

require "./delete.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $pid  = floatval($_POST['id']);
        $uid  = floatval($_POST['uid']);

    $delete = new Delete($pid, $uid);
    $delete -> deletePost();

}