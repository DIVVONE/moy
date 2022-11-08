<?php
session_start();
include("BD/qq.php");
?>
<!DOCTYPE html>
<head>
	<title>Test</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Test.css?v23">
<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'> 
<link rel="stylesheet" href="css/gallery.theme.css">
<link rel="stylesheet" href="zz.js">
	<script type="text/javascript" src="scripts/scripts.js"></script>
</head>
<body>
	<header class="header">
	
		<div class="menu-container">
			<div class="logo">
				<img src="logo.png">
			</div>
			<div class="menu">
				<ul>
					<li><a href="">Услуги</a></li>
					<li><a href="">Портфолио</a></li>
					<li><a href="">Отзывы</a></li>
					<li><a href="">Вакансии</a></li>
					<li><a href="">Контакты</a></li>
				</ul>
			</div>
			<div class="cont">
			    <b>8(863)243-15-10</b>
			    <p>Ростов-на-Дону</p>
			    	</div>
		</div>
		<div class="container-1">
			<div class="overlay"></div>
			<div class="main-header">
			
				<h2>Рекламно-информационное 
				агентство</h2>
				<p>Будем рады, если Вы обратитесь в наше Агентство. Мы готовы предложить Вам передовые решения для продвижения Вашего бизнеса.</p>
				<div class="btn-block">
				    <input type='text' placeholder='Номер телефона' name='uname' >
					<a href="">Присоединиться</a>
				</div>
			</div>
		</div>
	</header>
		<div class="container-2">
		    <b>Новости</b>
		    </div>

		   
<div class="slider">
  	<div class="item">
      		    <div class="container-3">
 <div class="kvadrat">
<div class="bukvi3">
<p1>
<?php
$query = ("SELECT * FROM test where Id=1");

$result = mysqli_query (getConnection(),$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['data'];
?>
</p1>
<b2>
<?php
$query = ("SELECT * FROM test where Id=1");

$result = mysqli_query (getConnection(),$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['text'];
?>
</b2>
<div class="btn-block1">
					<a href="">Просмотр</a>
				</div>
	</div>
	</div>
<div class="bukvi4">
	<p1>
<?php
$query = ("SELECT * FROM test where Id=2");

$result = mysqli_query (getConnection(),$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['data'];
?>
</p1>
	<b2>
<?php
$query = ("SELECT * FROM test where Id=2");

$result = mysqli_query (getConnection(),$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['text'];
?>
</b2>
<div class="btn-block1">
					<a href="">Подробнее</a>
				</div>
	</div>
	<div class="kvadrat2">
<div class="bukvi5">
		<p1>
<?php
$query = ("SELECT * FROM test where Id=3");

$result = mysqli_query (getConnection(),$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['data'];
?>
</p1>
	<b2>
<?php
$query = ("SELECT * FROM test where Id=3");

$result = mysqli_query (getConnection(),$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['text'];
?>
</b2>
<div class="btn-block1">
					<a href="">Подробнее</a>
				</div>
	</div>
	</div>
	</div>
    </div>

    <div class="item">
           <div class="container-3">
 <div class="kvadrat">
<div class="bukvi3">
<p1>
<?php
$query = ("SELECT * FROM test where Id=4");

$result = mysqli_query (getConnection(),$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['data'];
?>
</p1>
<b2>
<?php
$query = ("SELECT * FROM test where Id=4");

$result = mysqli_query (getConnection(),$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['text'];
?>
</b2>
<div class="btn-block1">
					<a href="">Просмотр</a>
				</div>
	</div>
	</div>
<div class="bukvi4">
	<p1>
<?php
$query = ("SELECT * FROM test where Id=5");

$result = mysqli_query (getConnection(),$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['data'];
?>
</p1>
	<b2>
<?php
$query = ("SELECT * FROM test where Id=5");

$result = mysqli_query (getConnection(),$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['text'];
?>
</b2>
<div class="btn-block1">
					<a href="">Подробнее</a>
				</div>
	</div>
	<div class="kvadrat2">
<div class="bukvi5">
		<p1>
<?php
$query = ("SELECT * FROM test where Id=1");

$result = mysqli_query (getConnection(),$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['data'];
?>
</p1>
	<b2>
<?php
$query = ("SELECT * FROM test where Id=1");

$result = mysqli_query (getConnection(),$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['text'];
?>
</b2>
<div class="btn-block1">
					<a href="">Подробнее</a>
				</div>
	</div>
	</div>
	</div>
    </div>
    <div class="item">
         <div class="container-3">
 <div class="kvadrat">
<div class="bukvi3">
<p1>
<?php
$query = ("SELECT * FROM test where Id=1");

$result = mysqli_query (getConnection(),$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['data'];
?>
</p1>
<b2>
<?php
$query = ("SELECT * FROM test where Id=1");

$result = mysqli_query (getConnection(),$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['text'];
?>
</b2>
<div class="btn-block1">
					<a href="">Просмотр</a>
				</div>
	</div>
	</div>
<div class="bukvi4">
	<p1>
<?php
$query = ("SELECT * FROM test where Id=1");

$result = mysqli_query (getConnection(),$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['data'];
?>
</p1>
	<b2>
<?php
$query = ("SELECT * FROM test where Id=1");

$result = mysqli_query (getConnection(),$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['text'];
?>
</b2>
<div class="btn-block1">
					<a href="">Подробнее</a>
				</div>
	</div>
	<div class="kvadrat2">
<div class="bukvi5">
		<p1>
<?php
$query = ("SELECT * FROM test where Id=1");

$result = mysqli_query (getConnection(),$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['data'];
?>
</p1>
	<b2>
<?php
$query = ("SELECT * FROM test where Id=1");

$result = mysqli_query (getConnection(),$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['text'];
?>
</b2>
<div class="btn-block1">
					<a href="">Подробнее</a>
				</div>
	</div>
	</div>
	</div>
    </div>

  	<a class="prev" onclick="minusSlide()">&#10094;</a>
  	<a class="next" onclick="plusSlide()">&#10095;</a>
</div>
<br>

<div class="slider-dots">
	<span class="slider-dots_item" onclick="currentSlide(1)"></span> 
  	<span class="slider-dots_item" onclick="currentSlide(2)"></span> 
  	<span class="slider-dots_item" onclick="currentSlide(3)"></span> 
</div>
	
<script src="zz.js"></script>	
	<footer class="footer">
	<div class="icon">
		<img src="logo.png">
	</div>
		
			<div class="menu1">
				<ul>
					<li><a href="">Услуги</a></li>
					<li><a href="">Портфолио</a></li>
					<li><a href="">Отзывы</a></li>
					<li><a href="">Вакансии</a></li>
					<li><a href="">Контакты</a></li>
				</ul>
			</div>
		
	
	</footer>
</body>
</html>