<html>
<head>
<title>Форма заявки с сайта</title>
</head>
<body>
<?php
if(!isset($_POST['fio']) and !isset($_POST['email'])){
} 
else {
 $fio = $_POST['user_name'];
 $email = $_POST['from'];
 $email_title = $_POST['email_title'];
 $fio = htmlspecialchars($fio);
 $email = htmlspecialchars($email);
 $email_title = htmlspecialchars($email_title);
 $fio = urldecode($fio);
 $email = urldecode($email);
 $email_title = urldecode($email_title);
 $fio = trim($fio);
 $email = trim($email);
 if (mail("moseyko.eng@gmail.com", "ФИО:".$fio.". E-mail: ".$email ,"From: " $email_title "\r\n")){
 echo "Сообщение успешно отправлено";
 } else {
 echo "При отправке сообщения возникли ошибки";
 }
}
?>
</body>
</html>