<?php
SESSION_start();
require "../connection.php";

$email = $_POST["email"];
$password = $_POST["password"];


$result = Database::search("SELECT * FROM `teacher` WHERE `email`='" . $email . "' AND `password` ='" . $password . "' ");
$n = $result->num_rows;

if (empty($email)) {
    echo "Please Enter Your email address";
} elseif (empty($password)) {
    echo "Please Enter Your Password";
} else {
    if ($n == 1) {
        $result2 = Database::search("SELECT * FROM `teacher` WHERE `email`='" . $email . "' AND `password` ='" . $password . "' AND `status_id`='2'");
        $x = $result2->num_rows;

        if ($x == 1) {
            echo "unverified";
        } else {
            echo "verified";
            $d = $result->fetch_assoc();
            $_SESSION["teacher"] = $d;
        }
    }
}
