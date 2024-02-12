<?php
require "../connection.php";

$acadamicgrade = $_POST["acadamicgrade"];
$acadamic = $_POST["acadamic"];

$rs = Database::search("SELECT * FROM `academic_has_grade` WHERE  `academic_id`='" . $acadamic . "'");
$n = $rs->num_rows;
if ($n == 1) {
    echo "Acadamic already has  Grade ";
} else {

    Database::iud("INSERT INTO `academic_has_grade`(`grade_id`,`academic_id`) VALUES  ('" . $acadamicgrade . "','" . $acadamic . "')");
    echo "Success";
}
