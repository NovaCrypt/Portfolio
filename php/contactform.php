<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $from = $_POST['email'];
    $message = $_POST['message'];
    $businessType = $_POST['business'];

$to = "hunter.oliver0512@protonmail.com";
$headers = "From: ".$from." on portfolio contact form";
$messageSent = "Contact form message from ".$name." - ".$businessType."\n\n".$message;

mail($to,$headers,$messageSent);
}