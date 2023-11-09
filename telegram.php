<?php

/* https://api.telegram.org/bot6383862530:AAE_R-SfOAWLcI1txBDkQ0Tg3sH5YBLHfAE/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['name'];
$phone = $_POST['tel'];
$email = $_POST['coment'];
$token = "6383862530:AAE_R-SfOAWLcI1txBDkQ0Tg3sH5YBLHfAE";
$chat_id = "-4046812368";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Коментарий' => $email
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>