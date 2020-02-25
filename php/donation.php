<?php

require "./connection.php";

class Donation
{
    private $amount;
    private $pid;

    public function __construct($amount, $pid)
    {
        $this->amount = $amount;
        $this->pid = $pid;
    }

    function setDonation(){
        global $connection;
//        update addingValueToExisting set GameScore = GameScore+10 where Id = 4;
        $sql =  "UPDATE posts SET current_amount = current_amount + '$this->amount' WHERE pid = '$this->pid'";
        if ($connection->query($sql) === TRUE) {
            echo "Thanks for donating $this->amount $this->pid .";
        } else {
            echo "Error table: " . $connection->error;
        }
    }
}
