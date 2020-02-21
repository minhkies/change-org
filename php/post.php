<?php

require "./connection.php";

class post{
    private $uid;
   private $base;
   private $title;
   private $recipient;
   private $goal;
   private $problem;
   private $img;

    public function __construct($uid, $base, $title, $recipient, $goal, $problem, $img)
    {
        $this->uid = $uid;
        $this->base = $base;
        $this->title = $title;
        $this->recipient = $recipient;
        $this->goal = $goal;
        $this->problem = $problem;
        $this->img = $img;
    }

    function savePost(){
        global $connection;
        $sql =  "INSERT IGNORE INTO posts (uid, base, title, recipient, goal, problem, img) VALUES ('$this->uid','$this->base', '$this->title', '$this->recipient', '$this->goal', '$this->problem', '$this->img')";

        if ($connection->query($sql) === TRUE) {
            echo "Successfully added into the record.";
        } else {
            echo "Error table: " . $connection->error;
        }
    }
}

