<?php
session_start();
include("../BD/BD.php");
?>
<!DOCTYPE html>
<html>
<head>
    
    <title >Сласти</title>
	 <meta charset="utf-8">
 <link rel="shortcut icon" href="../css/9.png"
<script language = javascript>

<link rel="stylesheet" href="../css/test.css?v30">
<link rel="stylesheet" href="animate.css?v1">
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
					<li><a href="pages/courses.php">Торты</a></li>
				</ul>
			</div>

<div class="menu2">
				<ul>
				<li><a href="">Капкейки</a></li>
				<li><a href="pages/sign.php">Raw-десерты</a></li>
				</ul>
			</div>
</div>
	<div class="hamburger-menu">
    <input id="menu__toggle" type="checkbox" />
    <label class="menu__btn" for="menu__toggle">
      <span></span>
    </label>

    <ul class="menu__box">
      <li><a class="menu__item" href="#">Главная</a></li>
			<li><a class="menu__item" href="#">Торты</a></li>
			<li><a class="menu__item" href="#">Капкейки</a></li>
			<li><a class="menu__item" href="#">Raw-десерты</a></li>
    </ul>
  </div>
</header>

<div class="gimg">
    <button class="buttonn" onclick="openForm()">Купить</button>
<div class="form-popup" id="myForm">
<form action="send.php" method="post" class="form-container">
<h1 align = "center">Оформить заказ</h1>

<label for="name"><b>Ваше Имя</b></label>
<input type="text" placeholder="Ваше имя" name="name" required>

<label for="email"><b>Ваш E-mail</b></label>
<input type="text" placeholder="Ваш E-mail" name="email" required>

<label for="nomer"><b>Телефон</b></label>
<input type="text" placeholder="Телефон" name="nomer" required>



<button type="submit" class="btn">Оформить</button>
<button type="button" class="btn cancel" onclick="closeForm()">Закрыть</button>
</form>
</div>
</div>
</div>
</div>

	<div class="container">
 
<div class="img wow fadeInLeft">

<img src="14.jpg" width="700" height="600">

	</div>

<div class="bukvi wow fadeInRight" onClick="location.href='kap.php'">
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
  
<div class="bukvi1 wow fadeInLeft" onClick="location.href='../pages/kap.php'">
    <br>
    <br>
    <br>
<h1 align="center" style="color:#000000">Raw-десерты</h1>
		<h2  align="center" style="color:#000000">RAW -это натуральные десерты из:сухофруктов,ягод и фруктов,орехов и семян
какао.</h2>
<div class="btn-block1">
					<a href="pages/kap.php">Просмотр</a>
				</div>
	</div>

<div class="img1 wow fadeInRight" >
<img src="15.jpg" width="700" height="600">
	</div>
	</div>
		<div class="container4">
 
<div class="img wow fadeInLeft">

<img src="12.jpg" width="700" height="600">

	</div>

<div class="bukvi wow fadeInRight" onClick="location.href='pages/kap.php'">
    <br>
    <br>
    <br>
<h1 align="center" style="color:#000000">Круглый хлеб</h1>
	<h2  align="center" style="color:#000000">Ну такой 12/10, я хз че тут писать торт как торт , в три часа ночи все торты - торты</h2>
<div class="btn-block">
					<a href="pages/kap.php">Просмотр</a>
				</div>
	</div>
	</div>
 <footer class="footer">
<div id="zxc">
		<a  href="https://www.instagram.com/mila_mhitaryan/"><img src="../qq/0.png" ></a>
<a  href="https://vk.com/public116917893"><img src="../qq/01.png" ></a>
</div>
	</footer>
</div>
</body>
</html>
