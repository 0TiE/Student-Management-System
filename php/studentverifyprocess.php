<?PHP
session_start();
require "../connection.php";
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $rs = Database::search("SELECT * FROM `student` WHERE `verification_code`='" . $id . "'");
    $num = $rs->num_rows;
    if ($num == 1) {
    $da = new DateTime();
    $tz = new  DateTimeZone("ASIA/Colombo");
    $da->setTimezone($tz);
    $date = $da->format("Y-m-d H:i:s");
    
    $d = $rs->fetch_assoc();
    $_SESSION["student"] = $d;
    Database::iud("UPDATE  `student` SET `verification_code`='',`status_id`='1'  WHERE `id`='" . $_SESSION["student"]["id"] . "'");

    echo "success";
        }
    } else {
        echo "Please Enter your verification code.";
}
