<?php

require "./donation.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $amount  = floatval($_POST['amount']);
        $pid = $_POST['pid'];
        $name = $_POST['name'];
        $billing = $_POST['billing'];
        $donation = new Donation($amount, $pid, $name, $billing);
        $donation -> setDonation();
}