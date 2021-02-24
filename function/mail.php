<?php
$to  = "<maxoutmax@mail.ru>";

$subject = "Новая заявка в школу дропшиппинга!";

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$mentor = $_POST['mentors'];
$today = date("F j, Y, g:i a");



if(trim(!empty($name))) {
    $message = 'Имя: ' . htmlspecialchars($name) . "\r\n";
}

if(trim(!empty($_POST['phone']))) {
    $message .= 'Телефон: ' . htmlspecialchars($phone) . "\r\n";
}

if(trim(!empty($email))) {
    $message .= 'Email: ' . htmlspecialchars($email) . "\r\n";
}


if(trim(!empty($mentor))) {
    $message .= 'Выбранный наставник: ' . htmlspecialchars($mentor);
}

$headers  = "Content-type: text/html; charset=utf-8 \r\n";
$headers .= "From: От кого письмо <drop@outmax-school.ru>\r\n";
$headers .= "Reply-To: drop@outmax-school.ru\r\n";

$send = mail($to, $subject, $message, $headers);

$file = '../file/request.csv';
$tofile = "'$name';'$email';'$phone';'$mentor';'$today'\n";
$bom = "\xEF\xBB\xBF";
@file_put_contents($file, $bom . $tofile . file_get_contents($file));


if($send == true) {
    $response = "Отправлено";
}else {
    $response = "Ошибка";
}
header('Content-type: application/json');
echo json_encode($response);
