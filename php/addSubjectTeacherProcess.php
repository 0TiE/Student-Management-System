<?php
require "../connection.php";

$t = $_POST["teacher"];
$s = $_POST["subject"];

$rs = Database::search("SELECT * FROM `teacher_has_subject` WHERE `teacher_id`='" . $t . "' AND `subject_id`='" . $s . "'");
$n = $rs->num_rows;
if ($n == 1) {
    echo "Teacher already has this subject";
} else {

    Database::iud("INSERT INTO `teacher_has_subject`(`teacher_id`,`subject_id`) VALUES  ('" . $t . "','" . $s . "')");
    echo "Success";
}
