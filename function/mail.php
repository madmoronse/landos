<?php
$to  = "<maxoutmax@mail.ru>";

$subject = "Новая заявка в школу дропшиппинга!";

if(trim(!empty($_POST['name']))) {
    $message = 'Имя: ' . htmlspecialchars($_POST['name']) . "\r\n";
}

if(trim(!empty($_POST['phone']))) {
    $message .= 'Телефон: ' . htmlspecialchars($_POST['phone']) . "\r\n";
}

if(trim(!empty($_POST['email']))) {
    $message .= 'Email: ' . htmlspecialchars($_POST['email']) . "\r\n";
}


if(trim(!empty($_POST['mentors']))) {
    $message .= 'Выбранный наставник: ' . htmlspecialchars($_POST['mentors']);
}

$headers  = "Content-type: text/html; charset=utf-8 \r\n";
$headers .= "From: От кого письмо <drop@bizoutmax.ru>\r\n";
$headers .= "Reply-To: drop@bizoutmax.ru\r\n";

$send = mail($to, $subject, $message, $headers);

if($send == true) {
    $response = "Отправлено";
}else {
    $response = "Ошибка";
}
header('Content-type: application/json');
echo json_encode($response);
?>