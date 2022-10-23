<?php
$link = mysqli_connect(
'localhost',
'id11931656_user',
'lalka',
'id11931656_users') or die ("catch!");
if (!$link) {
printf("Невозможно подключиться к базе данных. Код ошибки: %s\n", mysqli_connect_error());
mysqli_query("SET NAMES `utf-8`");
exit;
}else{
	echo "<h1>БД подключено!</h1>";
}
?>