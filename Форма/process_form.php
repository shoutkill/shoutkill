<?php
$to = "wanzzzy@yandex";
$subject = "Новое сообщение от посетителя сайта";
$fio = $_POST['fio'];
$message = $_POST['message'];
if (mail($to, $subject, $fio, $message)){
    echo "Сообщение успешно отправлено!";
} else {
    echo "Ошибка при отправке сообщения!";
}
?>

