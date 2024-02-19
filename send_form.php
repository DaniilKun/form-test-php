<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $to = "daniilkun1997@mail.ru";
    $subject = "Новая заявка";
    $message = "Имя: " . $name . "\n" . "Телефон: " . $phone;
    $headers = "From: webmaster@example.com" . "\r\n" .
    "CC: somebodyelse@example.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Ваша заявка успешно отправлена.";
    } else {
        echo "Ошибка при отправке заявки.";
    }
}
?>
