<?php

session_start();
require "../connection.php";


$subject = $_POST["subject"];
$lessonname = $_POST["lessonname"];
$grade = $_POST["grade"];
$date = $_POST["date"];
$file = $_FILES["lesson"];


if (empty($date)) {
    echo "Please Select Date";
} else {
   
    $rs = Database::search("SELECT `id` FROM `subject` WHERE `name`='".$subject."'");
    $subject_id = $rs->fetch_assoc();
    $sid = $subject_id["id"];

    $rs2 = Database::search("SELECT `id` FROM `lesson` WHERE `name`='" . $lessonname . "'");
    $lesson_id = $rs2->fetch_assoc();
    $lid = $lesson_id["id"];

    if (empty($sid)) {
        echo "error";
    } else {

        $lesson = $_FILES["lesson"];


        $file_extension = $lesson["type"];
    
        $fileName = "lessons/" . uniqid() . $date . $subject . $lessonname . ".pdf";
        move_uploaded_file($lesson["tmp_name"], $fileName);

        Database::iud("INSERT INTO `notes` (`grade_id`,`subject_id`,`lesson_id`,`date`,`path`)VALUES('" . $grade . "','" . $sid . "','" . $lid . "','" . $date . "','" . $fileName . "')");

        echo "Success";
    }
}
