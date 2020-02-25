<?php

require "./donation.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $amount  = floatval($_POST['amount']);
        $pid = $_POST['pid'];
        $donation = new Donation($amount, $pid);
        $donation -> setDonation();
}