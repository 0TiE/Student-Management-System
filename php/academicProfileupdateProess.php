<?php
session_start();
require "../connection.php";

$name = $_POST["name"];
$email = $_POST["email"];
$passowrd = $_POST["password"];
$phone = $_POST["phone"];
$address = $_POST["address"];

Database::iud("UPDATE `academic` SET `phone`='" . $phone . "',`address`='" . $address . "' WHERE `email`='" . $email . "'");



if (isset($_SESSION["academic"])) {
    $_SESSION["academic"] = null;
    session_destroy();
    echo "success";
}
