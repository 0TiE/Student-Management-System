<?php
session_start();
require "../connection.php";
include("./config.php");


$payment = $_GET["payment"];

$d = new DateTime();
$tz = new  DateTimeZone("ASIA/Colombo");
$d->setTimezone($tz);
$date = $d->format("Y-m-d H:i:s");

Database::iud("INSERT INTO `payment`(`amount`,`student_id`,`grade`,`date`,`discription`) VALUES('$payment','" . $_SESSION["student"]["id"] . "','" . $_SESSION["student"]["grade_id"] . "','$date','Portal Accesss Payment')");
