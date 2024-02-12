<?php
session_start();
require "../connection.php";

$name = $_POST["name"];
$email = $_POST["email"];
$passowrd = $_POST["password"];


if (isset($_SESSION["admin"])) {
    Database::iud("UPDATE `admin` SET `full_name`='" . $name . "',`password`='" . $passowrd . "' WHERE `email`='" . $email . "'");
    $_SESSION["admin"] = null;
    session_destroy();
    echo "success";
}
