<?php

require "./connection.php";

global $connection;

$sql = "SELECT * FROM posts ORDER BY pid DESC";

$data = $connection->query($sql);
$posts = array();
while ($row = $data->fetch_object()) {
    array_push($posts, $row);
};

echo json_encode($posts);
exit();