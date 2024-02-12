<?php

session_start();
require "../connection.php";


$subject = $_POST["subject"];
$assigmentname = $_POST["assigmentname"];
$assigmentid = $_POST["assigmentid"];
$start = $_POST["start"];
$end = $_POST["end"];
$file = $_FILES["assigment"];


if (empty($assigmentname)) {
    echo "Please Enter assigment name";
} else if (empty($assigmentid)) {
    echo "Please Enter assigment id";
    echo "Please Select start Date";
} else if (empty($start)) {
    echo "Please Select start Date";
} else  if (empty($end)) {
    echo "Please Select end Date";
} else {


    $assigment = $_FILES["assigment"];


    $file_extension = $assigment["type"];

    $fileName = "Assigment/" . uniqid()  . $start . $assigmentname . ".pdf";
    move_uploaded_file($assigment["tmp_name"], $fileName);


    $rs = Database::search("SELECT * FROM `class`WHERE `teacher_id`='" . $_SESSION["teacher"]["id"] . "'");
    $grade = $rs->fetch_assoc();


    Database::iud("INSERT INTO `assigment` (`assigment_name`,`assigment_id`,`path`,`subject_id`,`teacher_id`,`grade_id`,`start`,`end`)VALUES('" . $assigmentname . "','" . $assigmentid . "','" . $fileName . "','" . $subject . "','" . $_SESSION["teacher"]["id"] . "','" . $grade["grade_id"] . "','" . $start . "','" . $end . "')");
    $last_id = Database::$connection->insert_id;
}
