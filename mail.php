<?php
$to  = "<smoljaninov.se@yandex.ru>";

$subject = "Новая заявка";

$message = 'Имя' . $_POST['name'] . '<br>';
$message .= 'Телефон' . $_POST['phone'] . '<br>';
$message .= 'Email' . $_POST['email'] . '<br>';
$message .= 'Выбранный наставник:' . $_POST['mentor'];

$headers  = "Content-type: text/html; charset=windows-1251 \r\n";
$headers .= "From: От кого письмо <qiwi@yandex.ru>\r\n";
$headers .= "Reply-To: qiwi@yandex.ru\r\n";

mail($to, $subject, $message, $headers);
?>