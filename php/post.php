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
        $sql =  "INSERT IGNORE INTO posts (uid, base, title, recipient, goal, problem, img) VALUES (?,?,?,?,?,?,?)";


        $stmt = $connection->prepare($sql);

        $this->uid = htmlspecialchars(strip_tags($this->uid));
        $this->base = htmlspecialchars(strip_tags($this->base));
        $this->title = htmlspecialchars(strip_tags($this->title));
        $this->recipient = htmlspecialchars(strip_tags($this->recipient));
        $this->goal = htmlspecialchars(strip_tags($this->goal));
        $this->problem = htmlspecialchars(strip_tags($this->problem));
        $this->img = htmlspecialchars(strip_tags($this->img));


        $stmt->bind_param("ssssdss", $this->uid,$this->base, $this->title, $this->recipient, $this->goal,$this->problem,$this->img);


        if ($stmt->execute()) {
            echo "Success";
        } else {
            echo "Error table: " . $connection->error;
        }
    }
}

