<?php
require "../connection.php";

$t = $_POST["teacher"];
$g = $_POST["grade"];

$rs = Database::search("SELECT * FROM `teacher_has_grade` WHERE `teacher_id`='" . $t . "' AND `grade_id`='" . $g . "'");
$n = $rs->num_rows;
if ($n == 1) {
    echo "Teacher already has this grade";
} else {

    Database::iud("INSERT INTO `teacher_has_grade`(`teacher_id`,`grade_id`) VALUES  ('" . $t . "','" . $g . "')");
echo"Success";
}
