<?php
require "../connection.php";
require "Exception.php";
require "PHPMailer.php";
require "SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;

if (isset($_GET["id"])) {
    $id = $_GET["id"];


    $adminrs = Database::search("SELECT * FROM `academic` where `id`='" . $id . "'");
    $an = $adminrs->num_rows;
    $email = $adminrs->fetch_assoc();

    if ($an == 1) {
        $code = uniqid();
        $code2 = uniqid();

        Database::iud("UPDATE `academic` SET `verification_code`='" . $code . "' WHERE `email`='" . $email["email"] . "'");

        $mail = new PHPMailer;
        $mail->IsSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'ravidunalawaththa@gmail.com';
        $mail->Password = 'vqatfnyqbtlexnxw';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom('ravidunalawaththa@gmail.com', 'SMS');
        $mail->addReplyTo('ravidunalawaththa@gmail.com', 'SMS');
        $mail->addAddress('ravidunalawaththa@gmail.com');
        $mail->isHTML(true);
        $mail->Subject = 'invitations to academic  for registration in the system';
        $bodyContent = '<h1 > Your Username  is :' . $email["email"] . '<h1/> </br>
                            <h1 > Your password  is :' . $code2 . '<h1/> </br>
                            <h1 > Your verification Code is :' . $code . '<h1/> </br>
                            ';
        $mail->Body    = $bodyContent;

        if (!$mail->send()) {
            echo 'verification code sending failed';
        } else {
            echo 'Success';
        }
    } else {

        echo "error1";
    }
} else {
    echo "error2";
}
// vqatfnyqbtlexnxw