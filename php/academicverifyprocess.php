<?PHP
session_start();
require "../connection.php";
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $rs = Database::search("SELECT * FROM `academic` WHERE `verification_code`='" . $id . "'");
    $num = $rs->num_rows;
    if ($num == 1) {
        Database::iud("UPDATE  `academic` SET `verification_code`='',`status_id`='1'");
       
        $d = $rs->fetch_assoc();
        $_SESSION["academic"] = $d;
        echo "success";
    }
} else {
    echo "Please Enter your verification code.";
}
