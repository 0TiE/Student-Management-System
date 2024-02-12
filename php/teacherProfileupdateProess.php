<?php
session_start();
require "../connection.php";

$name = $_POST["name"];
$email = $_POST["email"];
$passowrd = $_POST["password"];
$phone = $_POST["phone"];
$address = $_POST["address"];

Database::iud("UPDATE `teacher` SET `phone`='" . $phone . "',`address`='" . $address . "' WHERE `email`='" . $email . "'");



if (isset($_SESSION["teacher"])) {
    $_SESSION["teacher"] = null;
    session_destroy();
    echo "success";
}
