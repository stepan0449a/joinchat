<?php

if(isset($_POST['submit'])){
    $to = "amemorypro@gmail.com";
    $from = $_POST['form-email'] ? : "Неизвестный email";
    $first_name = $_POST['form-name'] ? : "Неизвестное имя";
    $subject = $_POST['form-phone'] ? : "Неизвестная тема";
    $text = $_POST['form-message'] ? : "Неизвестное сообщение";
    $message = $first_name . " оставил сообщение:" . "\n\n" . $text;

    $headers = "From: $from\r\n" . "Content-type: text/html; charset=utf-8";

    // echo "to: " . $to . "<br/>";
    // echo "subject: " . $subject . "<br/>";
    // echo "message: " . $message . "<br/>";
    // echo "headers: " . $headers . "<br/>";

    mail($to,$subject,$message,$headers);
}

header('Location: https://app.joinchat.us/sendContact');

?>