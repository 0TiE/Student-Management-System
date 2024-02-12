<?php
SESSION_start();
require "../connection.php";

$email = $_POST["email"];
$password = $_POST["password"];


$result = Database::search("SELECT * FROM `admin` WHERE `email`='" . $email . "' AND `password` ='" . $password . "' ");
$n = $result->num_rows;

if (empty($email)) {
    echo "Please Enter Your email address";
} elseif (empty($password)) {
    echo "Please Enter Your Password";
} else {
    if ($n == 1) {
        $d = $result->fetch_assoc();
        $_SESSION["admin"] = $d;
        echo "done";
    }
}
