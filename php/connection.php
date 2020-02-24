<?php
$connection = new mysqli('localhost', 'root', 'root', 'change_org');
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}