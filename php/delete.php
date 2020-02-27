<?php

require "./connection.php";

class Delete
{
    private $uid;
    private $pid;

    public function __construct($pid, $uid)
    {
        $this->pid = $pid;
        $this->uid = $uid;
    }

    function deletePost(){
        global $connection;
        $sql =  "DELETE FROM posts WHERE pid='$this->pid'";
        if ($connection->query($sql) === TRUE) {
            echo "Delete post $this->pid \.";
        } else {
            echo "Error table: " . $connection->error;
        }
    }
}
