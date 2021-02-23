<?php
$to  = "<maxoutmax@mail.ru>";

$subject = "Новая заявка в школу дропшиппинга!";

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$mentor = $_POST['mentors'];

$token = '1515036922:AAHv_Onjj9NiBfG3YHrm394MTvjEdQR1ubw';
$chat_id = '-554802612';

$data = array (
    "Имя: " => $name,
    "Телефон: " => $phone, 
    "Email: " => $email,
    "Выбранный наставник: " => $mentor
);

foreach ($data as $key => $value) {
    $txt .= "<b>" . $key . "</b>" . $value . "%0A";
}

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");

if(trim(!empty($name))) {
    $message = 'Имя: ' . htmlspecialchars($phone) . "\r\n";
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