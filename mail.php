<?php
$to  = "<smoljaninov.se@yandex.ru>";

$subject = "Новая заявка";

$message = 'Имя: ' . $_POST['name'] . "\r\n";
$message .= 'Телефон: ' . $_POST['phone'] . "\r\n";
$message .= 'Email: ' . $_POST['email'] . "\r\n";
$message .= 'Выбранный наставник: ' . $_POST['mentors'];

$headers  = "Content-type: text/html; charset=utf-8 \r\n";
$headers .= "From: От кого письмо <qiwi@yandex.ru>\r\n";
$headers .= "Reply-To: qiwi@yandex.ru\r\n";

$send = mail($to, $subject, $message, $headers);

if($send == true) {
    $response = "Отправлено";
}else {
    $response = "Ошибка";
}
header('Content-type: application/json');
echo json_encode($response);
?>