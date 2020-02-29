<?php

require "./connection.php";

global $connection;

$sql = "SELECT posts.pid, uid, title, goal, problem, img, base, posts.created_at, recipient, deleted, SUM(donation.amount) AS current_amount FROM posts LEFT JOIN donation ON posts.pid = donation.pid WHERE posts.deleted = 0 GROUP BY posts.pid ORDER BY pid DESC;";


$data = $connection->query($sql);
$posts = array();
while ($row = $data->fetch_object()) {
    array_push($posts, $row);
};

echo json_encode($posts);
exit();