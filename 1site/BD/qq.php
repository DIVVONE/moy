<?php
$link = mysqli_connect(
'localhost',
'u1207516_default',
'O97e1An_',
'u1207516_default');

if (!$link) {
printf("Невозможно подключиться к базе данных. Код ошибки: %s\n", mysqli_connect_error());
exit;

}

$name = $_POST["uname"];
$mail = $_POST["umail"];
$text = $_POST["utext"];

if ($result = mysqli_query($link, "INSERT INTO prod(id,name,mail,text) values(NULL,'$name','$mail','$text')")) {
session_start();
$_SESSION['login'] = $name;
header("Location: ../index.php");
exit;
}else{
echo "\n\n0";
}
?>