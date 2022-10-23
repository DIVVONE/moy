<?php
$link = mysqli_connect(
'mysql-181466.srv.hoster.ru',
'srv181466_prod',
'DivvOne',
'srv181466_prod');
mysqli_set_charset($link,"utf8");

if (!$link) {
printf("Невозможно подключиться к базе данных. Код ошибки: %s\n", mysqli_connect_error());
exit;

}
$name = $_POST["uname"];
$mail = $_POST["umail"];
$nome = $_POST["unome"];
if ($result = mysqli_query($link, "INSERT INTO prod (id,name,mail,nome) values(NULL,'$name','$mail','$nome')")) {
session_start();
$_SESSION['login'] = $name;
header("Location: ../pages/tort.php");
exit;
}else{
}
?>