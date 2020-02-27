<?php

require "./connection.php";

class Donation
{
    private $amount;
    private $pid;
    private $name;
    private $billing;

    public function __construct($amount, $pid, $name, $billing)
    {
        $this->amount = $amount;
        $this->pid = $pid;
        $this->name = $name;
        $this->billing = $billing;
    }

    function setDonation(){
        global $connection;
//        update addingValueToExisting set GameScore = GameScore+10 where Id = 4;
        $sql =  "INSERT IGNORE INTO donation (amount, pid, name, billing) VALUES ('$this->amount','$this->pid', '$this->name', '$this->billing')";
        if ($connection->query($sql) === TRUE) {
            echo "Thanks for donating $this->amount $this->pid .";
        } else {
            echo "Error table: " . $connection->error;
        }
    }
}
