<?php

session_start();
require "../connection.php";



$assigmentid = $_POST["assigmentid"];
$file = $_FILES["assigment"];


$d = new DateTime();
$tz = new DateTimeZone("Asia/Colombo");

$d->setTimezone($tz);
$date = $d->format("Y-m-d H:i:s");

$assigment = $_FILES["assigment"];


$file_extension = $assigment["type"];

$fileName = "Assigment/" . uniqid()  . ".pdf";
move_uploaded_file($assigment["tmp_name"], $fileName);




Database::iud("INSERT INTO `assigment_submit` (`student_id`,`assigment_id`,`path`,`date`,`status`)VALUES('" . $_SESSION["student"]["id"] . "','" . $assigmentid . "','" . $fileName . "','" . $date . "','2')");
$last_id = Database::$connection->insert_id;
echo $$last_id;
