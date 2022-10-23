<?php
 

$name = $_POST["uname"];
$mail = $_POST["umail"];
$text = $_POST["utext"];
$nazv = $_POST["unaz"];


$token = "1183652348:AAGuae7_15kDEIbFGtqsaWPaaDQUtr26Lyo";
 

$chat_id = "349687180";
 

$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $text,
  'Email' => $mail,
  'Название' => $nazv,

);
 

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};
 

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
if (isset($name) && isset($mail) && isset($name)  && isset($text)){

$address = "$mail";
$mes = "Уважаемый(ая) $name \n ,Спасибо за заказ. ";

$send = mail ($address,$mes," Ожидайте звонка от администратора в течении одного рабочего дня.\nС уважением кондитерская Сласти. \n$email");
if ($send == 'true')
header("Location: ../index.php");
}
?>