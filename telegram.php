<?php

/* https://api.telegram.org/bot6933799627:AAG640uuk97lHd_nk0syQv8J9paLg_jBzg8/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$token = "6933799627:AAG640uuk97lHd_nk0syQv8J9paLg_jBzg8";
$chat_id = "-4070740531";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Email' => $email
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location:thank-you.html');
} else {
  echo "Error";
}
?>