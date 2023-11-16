<?php
include "modal_window.php";

$to = "dark666god@yandex.ru";
$from = trim($_POST['email']);
$user = trim($_POST['user']);
$phone = $_POST['phone'];


$message = htmlspecialchars($_POST['message']);
$message = urldecode($message);
$message = trim($message);
if ($user < 2) {
    $_SESSION['error_name'] =  "Введите полное имя";
} elseif ($phone < 6) {
    $_SESSION['error_phone'] =  "Не корректный номер телефона";
}



$headers = "From: $from" . "\r\n" . "Reply-To: $from" . "\r\n" . "X-Mailer: PHP/" . phpversion();

if (mail($to, $user, $message, $headers)) {
    echo "Письмо отправлено";
} else {
    echo "Письмо не отправлено";
}
