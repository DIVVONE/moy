<?php
session_start();
include("../BD/BD.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title >Сласти</title>
	 <meta charset="utf-8">
 <link rel="shortcut icon" href="css/9.png"
<script language = javascript>
</script>
<link rel="stylesheet" href="../css/zz5.css?v7">
<form action="css/sender.php" method="POST">
<style>
@import url('https://fonts.googleapis.com/css?family=Caveat&display=swap');


</style>
</head>
<body background="">

<div class="b-topbar">

<header>

		<div class="lasuniken"></div>
  <input type="checkbox" class="nectionupacipate" id="nectionupacipate">
  <label for="nectionupacipate" class="sidebarIconToggle">
  <div class="nackingasecu gerasilopdsnev geras-1"></div>
  <div class="nackingasecu deryndsakols"></div>
  <div class="nackingasecu gerasilopdsnev geras-2"></div>
  </label>
  
  <div id="nasugaculad">
  
  <ul class="kingisakeading">
<li><a href="index.php" target="_blank">Главная</a></li>
  <li><a href="pages/tort.php" target="_blank">Торты</a></li>
  <li><a href="pages/kap.php" target="_blank">Капкейки</a></li>
  <li><a href="pages/raw.php" target="_blank">Раф</a></li>
 
  
  </ul>
  
  </div>

 <a href="index.php">
<div class="logo" ></div>
</a>

</header>
</div>

<div id="bukvi">
	<div class="text">
				<h2 style="color:#FFFFFF"  >admin</h2>
			</div>		
</div>

	 <div class='block2'>
   <?php

$link = mysqli_connect('localhost', 'id11970493_divv', 'Qazwsxedc22', 'id11970493_bd');


$query1 = mysqli_query($link, "SELECT * FROM test");

$myrow = mysqli_fetch_array($query1);

while($row=mysqli_fetch_array($query1))
{

 echo  "<table >";
 echo  "<hr>";
 echo $row['name'] ;
echo  "<tr>";
echo  "<td>";
echo $row['mail'] ;
echo "</td>";
echo "</tr>";
echo "<br>";
echo "</table>";
echo $row['text'] ;
echo  "<hr>";

}

?>
</div>


	
 <footer class="footer">
<div id="zxc">
		<a  href="https://www.instagram.com/mila_mhitaryan/"><img src="qq/0.png" ></a>
<a  href="https://vk.com/public116917893"><img src="qq/01.png" ></a>
</div>
	</footer>
</body>
</html>
