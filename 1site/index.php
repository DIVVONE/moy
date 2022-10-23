<?php
session_start();
include("BD/BD.php");
?>
<!DOCTYPE html>
<html>
<head>
    
    <title >Сласти</title>
	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <link rel="shortcut icon" href="../css/9.png"
<script language = javascript>

<link rel="stylesheet" href="css/test.css?v33">
<link rel="stylesheet" href="pages/animate.css?v1">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	
<script src="wow.min.js"></script>
<script>

              new WOW().init();

</script>

<form action="css/index.php" method="POST">
<style>



</style>
</head>

<body>

 <div class="containerq">

<header>

<div class="logo" ></div>
 <div class="container2">
<div class="menu">
				<ul>
					<li><a href="index.php">Главная</a></li>
					<li><a href="pages/tort.php">Торты</a></li>
				</ul>
			</div>

<div class="menu2">
				<ul>
				<li><a href="pages/kap.php">Капкейки</a></li>
				<li><a href="pages/raw.php">Raw-десерты</a></li>
				</ul>
			</div>
</div>
	<div class="hamburger-menu">
    <input id="menu__toggle" type="checkbox" />
    <label class="menu__btn" for="menu__toggle">
      <span></span>
    </label>

    <ul class="menu__box">
      <li><a class="menu__item" href="index.php">Главная</a></li>
			<li><a class="menu__item" href="pages/tort.php">Торты</a></li>
			<li><a class="menu__item" href="pages/kap.php">Капкейки</a></li>
			<li><a class="menu__item" href="pages/raw.php">Raw-десерты</a></li>
    </ul>
  </div>
</header>

<div class="gimg">
    <h1>Сласти-душевная домашняя кондитерская,
где мы вместе с вами создаем торты по Вашему дизайну и вкусовым пожеланиям .Это натуральные и полезные десерты без химикатов.</h1>
</div>

	<div class="container">
 
<div class="img wow fadeInLeft">

<img src="pages/14.jpg" width="700" height="600">

	</div>

<div class="bukvi wow fadeInRight" onClick="location.href='pages/kap.php'">
    <br>
    <br>
    <br>
<h1 align="center" style="color:#000000">Капкейки</h1>
	<h2  align="center" style="color:#000000">Капкейки – вкусная, ароматная и удобная выпечка. Капкейки выпекают в бумажных формочках.</h2>
<div class="btn-block">
					<a href="pages/kap.php">Просмотр</a>
				</div>
	</div>
	</div>
	<div class="container3">
  
<div class="bukvi1 wow fadeInLeft" onClick="location.href='pages/raw.php'">
    <br>
    <br>
    <br>
<h1 align="center" style="color:#000000">Raw-десерты</h1>
		<h2  align="center" style="color:#000000">RAW -это натуральные десерты из:сухофруктов,ягод и фруктов,орехов и семян
какао.</h2>
<div class="btn-block1">
					<a href="pages/raw.php">Просмотр</a>
				</div>
	</div>

<div class="img1 wow fadeInRight" >
<img src="pages/15.jpg" width="700" height="600">
	</div>
	</div>
		<div class="container4">
 
<div class="img wow fadeInLeft">

<img src="pages/12.jpg" width="700" height="600">

	</div>

<div class="bukvi wow fadeInRight" onClick="location.href='pages/tort.php'">
    <br>
    <br>
    <br>
<h1 align="center" style="color:#000000">Торты</h1>
	<h2  align="center" style="color:#000000">Состоит из одного или нескольких коржей, пропитанных кремом или джемом</h2>
<div class="btn-block">
					<a href="pages/tort.php">Просмотр</a>
				</div>
	</div>
	</div>
 <footer class="footer">
<div id="zxc">
		<a  href="https://www.instagram.com/mila_mhitaryan/"><img src="qq/0.png" ></a>
<a  href="https://vk.com/public116917893"><img src="qq/01.png" ></a>
</div>
	</footer>
</div>
</body>
</html>