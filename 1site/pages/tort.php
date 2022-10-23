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

<link rel="stylesheet" href="../css/zz1.css?v52">
<link rel="stylesheet" href="animate.css?v1">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="wow.min.js"></script>
<script>

              new WOW().init();

</script>

<style>

</style>

</head>

<body>

 <div class="containerq">

<header>

<div class="logo" ></div>
 <div class="containerm">
<div class="menu">
				<ul>
					<li><a href="../index.php">Главная</a></li>
					<li><a href="../pages/tort.php">Торты</a></li>
				</ul>
			</div>

<div class="menu2">
				<ul>
				<li><a href="../pages/kap.php">Капкейки</a></li>
				<li><a href="../pages/raw.php">Raw-десерты</a></li>
				</ul>
			</div>
</div>
	<div class="hamburger-menu">
    <input id="menu__toggle" type="checkbox" />
    <label class="menu__btn" for="menu__toggle">
      <span></span>
    </label>

    <ul class="menu__box">
      <li><a class="menu__item" href="../index.php">Главная</a></li>
			<li><a class="menu__item" href="../pages/tort.php">Торты</a></li>
			<li><a class="menu__item" href="../pages/kap.php">Капкейки</a></li>
			<li><a class="menu__item" href="../pages/raw.php">Raw-десерты</a></li>
    </ul>
  </div>
</header>

<div class="gimg">
    <h1>Торты на заказ.</h1>
</div>

<div class="container wow fadeInLeft">
     

<div class="product-item">
    <img src="../zxc/555.jpg">
    <p>
<?php

$query = ("SELECT * FROM prod where id=1");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['name'];
?>
    </p>
    
    <p1>
<?php
$query = ("SELECT * FROM prod where id=1");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['text'];
?>
</p1>
   
      <span class="price">
          <br> 
   <?php
$query = ("SELECT * FROM prod where id=1");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo "<a>".$row['price']."</a>";
?>
р
           </span>
           <div class="popup-wrapper">
  <input type="checkbox" class="popup-checkbox" id="popupCheckboxOne0.1">
  <div class="popup">
    <div class="popup-content">
      <label for="popupCheckboxOne0.1" class="popup-closer">&#215;</label>
  <div class="block">

<div class='form-box'>
     <div>
     <br>
      <br>
       <br>
 
          
<p8>Приведены средние данные калорийности на 100 грамм продукта:</p8>
<br>
  <br>
      <br>
       <br>
 
<p8>Бел, г-3.6</p8>
<br>
<p8>Жир, г-17.2</p8>
<br>
<p8>Угл, г-53.0</p8>
<br>
<p8>Кал, ккал-376</p8>
</div>
</div>
    </div>
  </div>
</div>
<label for="popupCheckboxOne0.1" class="popup-shower">Подробнее</label>

      <br> 
      <br> 
  </div>
  
     <div class="popup-wrapper">
  <input type="checkbox" class="popup-checkbox" id="popupCheckboxOne1">
  <div class="popup">
    <div class="popup-content">
      <label for="popupCheckboxOne1" class="popup-closer">&#215;</label>
    Оформить заказ
    
  <div class="block">
      <div class="logo2" ></div>
<div class='form-box'>
     
<form action='../BD/tel.php' method='POST' >
    
<div class='form-input-container'>
    <p>Введите имя:</p>
<input type='text' placeholder='Введите Имя*' name='uname' >
</div>
 <p>Введите номер телефона:</p>
<div class='form-input-container'>
<input type='text' placeholder='Введите номер*' name='utext' >
</div>
  <p>Введите e-mail:</p>
<div class='form-input-container'>
<input type='email' placeholder='Введите e-mail*' name='umail' >
</div>
<div  class='form-input-container'>
    
   <p5><input name='unaz'  value="Оформление на выбор" type='naz'></p5>

</div>
</div>
br
<div class='form-sender-btn'>
<input type='submit' value='Отправить' name='senderqq' id='qq'>
</div></form>
  
    </div>
  </div>
</div>

<label for="popupCheckboxOne1" class="popup-shower">Оформить заказ</label>

      <br> 
      <br> 
  </div>


  
  </div>
<div class="product-item">
    
    <img src="../zxc/1.jpg">
    <p>
<?php
$query = ("SELECT * FROM prod where id=1");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['name'];
?>
    </p>
    
    <p1>
<?php
$query = ("SELECT * FROM prod where id=1");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['text'];
?>
</p1>
   
      <span class="price">
          <br> 
   <?php
$query = ("SELECT * FROM prod where id=1");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo "<a>".$row['price']."</a>";
?>
р
           </span>
           
     <div class="popup-wrapper">
  <input type="checkbox" class="popup-checkbox" id="popupCheckboxOne0.2">
  <div class="popup">
    <div class="popup-content">
      <label for="popupCheckboxOne0.2" class="popup-closer">&#215;</label>
    <div class="block">

<div class='form-box'>
     <div>
     <br>
      <br>
       <br>
 
          
<p8>Приведены средние данные калорийности на 100 грамм продукта:</p8>
<br>
  <br>
      <br>
       <br>
 
<p8>Бел, г-4.6</p8>
<br>
<p8>Жир, г-12.2</p8>
<br>
<p8>Угл, г-43.8</p8>
<br>
<p8>Кал, ккал-356</p8>
</div>
</div>
    </div>
  </div>
</div>
<label for="popupCheckboxOne0.2" class="popup-shower">Подробнее</label>

      <br> 
      <br> 
  </div>
  
     <div class="popup-wrapper">
  <input type="checkbox" class="popup-checkbox" id="popupCheckboxOne2">
  <div class="popup">
    <div class="popup-content">
      <label for="popupCheckboxOne2" class="popup-closer">&#215;</label>
    Оформить заказ
    
  <div class="block">
      <div class="logo2" ></div>
<div class='form-box'>
     
<form action='../BD/tel.php' method='POST' >
    
<div class='form-input-container'>
    <p>Введите имя:</p>
<input type='text' placeholder='Введите Имя*' name='uname' >
</div>
 <p>Введите номер телефона:</p>
<div class='form-input-container'>
<input type='text' placeholder='Введите номер*' name='utext' >
</div>
  <p>Введите e-mail:</p>
<div class='form-input-container'>
<input type='email' placeholder='Введите e-mail*' name='umail' >
</div>
<div  class='form-input-container'>
    
   <p5><input name='unaz'  value="Оформление на выбор" type='naz'></p5>

</div>
</div>
br
<div class='form-sender-btn'>
<input type='submit' value='Отправить' name='senderqq' id='qq'>
</div></form>
  
    </div>
  </div>
</div>

<label for="popupCheckboxOne2" class="popup-shower">Оформить заказ</label>

      <br> 
      <br> 
  </div>


  
  </div>
  <div class="product-item">
    
    <img src="../zxc/3.jpg">
    <p>
<?php
$query = ("SELECT * FROM prod where id=3");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['name'];
?>
    </p>
    
    <p1>
<?php
$query = ("SELECT * FROM prod where id=3");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['text'];
?>
</p1>
   
      <span class="price">
          <br> 
   <?php
$query = ("SELECT * FROM prod where id=3");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo "<a>".$row['price']."</a>";
?>
р
           </span>
   <div class="popup-wrapper">
  <input type="checkbox" class="popup-checkbox" id="popupCheckboxOne0.3">
  <div class="popup">
    <div class="popup-content">
      <label for="popupCheckboxOne0.3" class="popup-closer">&#215;</label>
   <div class="block">

<div class='form-box'>
     <div>
     <br>
      <br>
       <br>
 
          
<p8>Приведены данные калорийности на 100 грамм продукта:</p8>
<br>
  <br>
      <br>
       <br>
 
<p8>Бел, г-3.6</p8>
<br>
<p8>Жир, г-17.2</p8>
<br>
<p8>Угл, г-53.0</p8>
<br>
<p8>Кал, ккал-376</p8>
</div>
</div>
    </div>
  </div>
</div>
<label for="popupCheckboxOne0.3" class="popup-shower">Подробнее</label>

      <br> 
      <br> 
  </div>
  
     <div class="popup-wrapper">
  <input type="checkbox" class="popup-checkbox" id="popupCheckboxOne3">
  <div class="popup">
    <div class="popup-content">
      <label for="popupCheckboxOne3" class="popup-closer">&#215;</label>
    Оформить заказ
    
  <div class="block">
      <div class="logo2" ></div>
<div class='form-box'>
     
<form action='../BD/tel.php' method='POST' >
    
<div class='form-input-container'>
    <p>Введите имя:</p>
<input type='text' placeholder='Введите Имя*' name='uname' >
</div>
 <p>Введите номер телефона:</p>
<div class='form-input-container'>
<input type='text' placeholder='Введите номер*' name='utext' >
</div>
  <p>Введите e-mail:</p>
<div class='form-input-container'>
<input type='email' placeholder='Введите e-mail*' name='umail' >
</div>
<div  class='form-input-container'>
    
   <p5><input name='unaz'  value="Свадебный торт" type='naz'></p5>

</div>
</div>
br
<div class='form-sender-btn'>
<input type='submit' value='Отправить' name='senderqq' id='qq'>
</div></form>
  
    </div>
  </div>
</div>

<label for="popupCheckboxOne3" class="popup-shower">Оформить заказ</label>

      <br> 
      <br> 
  </div>


  
  </div>
  <div class="product-item">
    
    <img src="../zxc/4.jpg">
    <p>
<?php
$query = ("SELECT * FROM prod where id=4");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['name'];
?>
    </p>
    <p1>
<?php
$query = ("SELECT * FROM prod where id=4");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['text'];
?>
</p1>
   
      <span class="price">
          <br> 
   <?php
$query = ("SELECT * FROM prod where id=4");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo "<a>".$row['price']."</a>";
?>
р
           </span>
      <div class="popup-wrapper">
  <input type="checkbox" class="popup-checkbox" id="popupCheckboxOne0.4">
  <div class="popup">
    <div class="popup-content">
      <label for="popupCheckboxOne0.4" class="popup-closer">&#215;</label>
    <div class="block">

<div class='form-box'>
     <div>
     <br>
      <br>
       <br>
 
          
<p8>Приведены данные калорийности на 100 грамм продукта:</p8>
<br>
  <br>
      <br>
       <br>
 
<p8>Бел, г-3.6</p8>
<br>
<p8>Жир, г-17.2</p8>
<br>
<p8>Угл, г-53.0</p8>
<br>
<p8>Кал, ккал-376</p8>
</div>
</div>
    </div>
  </div>
</div>
<label for="popupCheckboxOne0.4" class="popup-shower">Подробнее</label>

      <br> 
      <br> 
  </div>
  
     <div class="popup-wrapper">
  <input type="checkbox" class="popup-checkbox" id="popupCheckboxOne4">
  <div class="popup">
    <div class="popup-content">
      <label for="popupCheckboxOne4" class="popup-closer">&#215;</label>
    Оформить заказ
    
  <div class="block">
      <div class="logo2" ></div>
<div class='form-box'>
     
<form action='../BD/tel.php' method='POST' >
    
<div class='form-input-container'>
    <p>Введите имя:</p>
<input type='text' placeholder='Введите Имя*' name='uname' >
</div>
 <p>Введите номер телефона:</p>
<div class='form-input-container'>
<input type='text' placeholder='Введите номер*' name='utext' >
</div>
  <p>Введите e-mail:</p>
<div class='form-input-container'>
<input type='email' placeholder='Введите e-mail*' name='umail' >
</div>
<div  class='form-input-container'>
    
   <p5><input name='unaz'  value="Оформление на выбор" type='naz'></p5>

</div>
</div>
br
<div class='form-sender-btn'>
<input type='submit' value='Отправить' name='senderqq' id='qq'>
</div></form>
  
    </div>
  </div>
</div>

<label for="popupCheckboxOne4" class="popup-shower">Оформить заказ</label>

      <br> 
      <br> 
  </div>


  
  </div>

	
	</div>
	
<div class="container2 wow fadeInRight">
<div class="product-item">
    
    <img src="../zxc/5.jpg">
    <p>
<?php
$query = ("SELECT * FROM prod where id=5");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['name'];
?>
    </p>
    
    <p1>
<?php
$query = ("SELECT * FROM prod where id=5");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['text'];
?>
</p1>
   
      <span class="price">
          <br> 
   <?php
$query = ("SELECT * FROM prod where id=5");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo "<a>".$row['price']."</a>";
?>
р
           </span>
   <div class="popup-wrapper">
  <input type="checkbox" class="popup-checkbox" id="popupCheckboxOne0.5">
  <div class="popup">
    <div class="popup-content">
      <label for="popupCheckboxOne0.5" class="popup-closer">&#215;</label>
   <div class="block">

<div class='form-box'>
     <div>
     <br>
      <br>
       <br>
 
          
<p8>Приведены данные калорийности на 100 грамм продукта:</p8>
<br>
  <br>
      <br>
       <br>
 
<p8>Бел, г-3.4</p8>
<br>
<p8>Жир, г-17.9</p8>
<br>
<p8>Угл, г-36.1</p8>
<br>
<p8>Кал, ккал-322</p8>
</div>
</div>
    </div>
  </div>
</div>
<label for="popupCheckboxOne0.5" class="popup-shower">Подробнее</label>

      <br> 
      <br> 
  </div>
  
     <div class="popup-wrapper">
  <input type="checkbox" class="popup-checkbox" id="popupCheckboxOne5">
  <div class="popup">
    <div class="popup-content">
      <label for="popupCheckboxOne5" class="popup-closer">&#215;</label>
    Оформить заказ
    
  <div class="block">
      <div class="logo2" ></div>
<div class='form-box'>
     
<form action='../BD/tel.php' method='POST' >
    
<div class='form-input-container'>
    <p>Введите имя:</p>
<input type='text' placeholder='Введите Имя*' name='uname' >
</div>
 <p>Введите номер телефона:</p>
<div class='form-input-container'>
<input type='text' placeholder='Введите номер*' name='utext' >
</div>
  <p>Введите e-mail:</p>
<div class='form-input-container'>
<input type='email' placeholder='Введите e-mail*' name='umail' >
</div>
<div  class='form-input-container'>
    
   <p5><input name='unaz'  value="Торт-цифра" type='naz'></p5>

</div>
</div>
br
<div class='form-sender-btn'>
<input type='submit' value='Отправить' name='senderqq' id='qq'>
</div></form>
  
    </div>
  </div>
</div>

<label for="popupCheckboxOne5" class="popup-shower">Оформить заказ</label>

      <br> 
      <br> 
  </div>


  
  </div>
<div class="product-item">
    
    <img src="../zxc/6.jpg">
    <p>
<?php
$query = ("SELECT * FROM prod where id=5");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['name'];
?>
    </p>
    <p1>
    
<?php
$query = ("SELECT * FROM prod where id=5");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['text'];
?>
</p1>
   
      <span class="price">
          <br> 
   <?php
$query = ("SELECT * FROM prod where id=5");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo "<a>".$row['price']."</a>";
?>
р
           </span>
       <div class="popup-wrapper">
  <input type="checkbox" class="popup-checkbox" id="popupCheckboxOne0.6">
  <div class="popup">
    <div class="popup-content">
      <label for="popupCheckboxOne0.6" class="popup-closer">&#215;</label>
    <div class="block">

<div class='form-box'>
     <div>
     <br>
      <br>
       <br>
 
          
<p8>Приведены данные калорийности на 100 грамм продукта:</p8>
<br>
  <br>
      <br>
       <br>
 
<p8>Бел, г-2.9</p8>
<br>
<p8>Жир, г-15.5</p8>
<br>
<p8>Угл, г-35.3</p8>
<br>
<p8>Кал, ккал-296</p8>
</div>
</div>
    </div>
  </div>
</div>
<label for="popupCheckboxOne0.6" class="popup-shower">Подробнее</label>

      <br> 
      <br> 
  </div>
  
     <div class="popup-wrapper">
  <input type="checkbox" class="popup-checkbox" id="popupCheckboxOne6">
  <div class="popup">
    <div class="popup-content">
      <label for="popupCheckboxOne6" class="popup-closer">&#215;</label>
    Оформить заказ
    
  <div class="block">
      <div class="logo2" ></div>
<div class='form-box'>
     
<form action='../BD/tel.php' method='POST' >
    
<div class='form-input-container'>
    <p>Введите имя:</p>
<input type='text' placeholder='Введите Имя*' name='uname' >
</div>
 <p>Введите номер телефона:</p>
<div class='form-input-container'>
<input type='text' placeholder='Введите номер*' name='utext' >
</div>
  <p>Введите e-mail:</p>
<div class='form-input-container'>
<input type='email' placeholder='Введите e-mail*' name='umail' >
</div>
<div  class='form-input-container'>
    
   <p5><input name='unaz'  value="Торт-цифра" type='naz'></p5>

</div>
</div>
br
<div class='form-sender-btn'>
<input type='submit' value='Отправить' name='senderqq' id='qq'>
</div></form>
  
    </div>
  </div>
</div>

<label for="popupCheckboxOne6" class="popup-shower">Оформить заказ</label>

      <br> 
      <br> 
  </div>


  
  </div>
  <div class="product-item">
    
    <img src="../zxc/777.jpg">
    <p>
<?php
$query = ("SELECT * FROM prod where id=6");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['name'];
?>
    </p>
    
   <p1> 
<?php
$query = ("SELECT * FROM prod where id=6");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['text'];
?>
</p1>
   
      <span class="price">
          <br> 
   <?php
$query = ("SELECT * FROM prod where id=6");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo "<a>".$row['price']."</a>";
?>
р
           </span>
     <div class="popup-wrapper">
  <input type="checkbox" class="popup-checkbox" id="popupCheckboxOne0.7">
  <div class="popup">
    <div class="popup-content">
      <label for="popupCheckboxOne0.7" class="popup-closer">&#215;</label>
   <div class="block">

<div class='form-box'>
     <div>
     <br>
      <br>
       <br>
 
          
<p8>Приведены данные калорийности на 100 грамм продукта:</p8>
<br>
  <br>
      <br>
       <br>
 
<p8>Бел, г-3.9</p8>
<br>
<p8>Жир, г-13.7</p8>
<br>
<p8>Угл, г-39.2</p8>
<br>
<p8>Кал, ккал-289</p8>
</div>
</div>
    </div>
  </div>
</div>
<label for="popupCheckboxOne0.7" class="popup-shower">Подробнее</label>

      <br> 
      <br> 
  </div>
  
     <div class="popup-wrapper">
  <input type="checkbox" class="popup-checkbox" id="popupCheckboxOne7">
  <div class="popup">
    <div class="popup-content">
      <label for="popupCheckboxOne7" class="popup-closer">&#215;</label>
    Оформить заказ
    
  <div class="block">
      <div class="logo2" ></div>
<div class='form-box'>
     
<form action='../BD/tel.php' method='POST' >
    
<div class='form-input-container'>
    <p>Введите имя:</p>
<input type='text' placeholder='Введите Имя*' name='uname' >
</div>
 <p>Введите номер телефона:</p>
<div class='form-input-container'>
<input type='text' placeholder='Введите номер*' name='utext' >
</div>
  <p>Введите e-mail:</p>
<div class='form-input-container'>
<input type='email' placeholder='Введите e-mail*' name='umail' >
</div>
<div  class='form-input-container'>
    
   <p5><input name='unaz'  value="Шоколад-вишня" type='naz'></p5>

</div>
</div>
br
<div class='form-sender-btn'>
<input type='submit' value='Отправить' name='senderqq' id='qq'>
</div></form>
  
    </div>
  </div>
</div>

<label for="popupCheckboxOne7" class="popup-shower">Оформить заказ</label>

      <br> 
      <br> 
  </div>


  
  </div>
  <div class="product-item">
    
    <img src="../zxc/20.jpg">
    <p>
<?php
$query = ("SELECT * FROM prod where id=7");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['name'];
?>
    </p>
    <p1>
    
<?php
$query = ("SELECT * FROM prod where id=7");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['text'];
?>
</p1>
   
      <span class="price">
          <br> 
   <?php
$query = ("SELECT * FROM prod where id=7");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo "<a>".$row['price']."</a>";
?>
р
           </span>
       <div class="popup-wrapper">
  <input type="checkbox" class="popup-checkbox" id="popupCheckboxOne0.8">
  <div class="popup">
    <div class="popup-content">
      <label for="popupCheckboxOne0.8" class="popup-closer">&#215;</label>
   <div class="block">

<div class='form-box'>
     <div>
     <br>
      <br>
       <br>
 
          
<p8>Приведены данные калорийности на 100 грамм продукта:</p8>
<br>
  <br>
      <br>
       <br>
 
<p8>Бел, г-6.1</p8>
<br>
<p8>Жир, г-24.2</p8>
<br>
<p8>Угл, г-37.8</p8>
<br>
<p8>Кал, ккал-411</p8>
</div>
</div>
    </div>
  </div>
</div>
<label for="popupCheckboxOne0.8" class="popup-shower">Подробнее</label>

      <br> 
      <br> 
  </div>
  
     <div class="popup-wrapper">
  <input type="checkbox" class="popup-checkbox" id="popupCheckboxOne8">
  <div class="popup">
    <div class="popup-content">
      <label for="popupCheckboxOne8" class="popup-closer">&#215;</label>
    Оформить заказ
    
  <div class="block">
      <div class="logo2" ></div>
<div class='form-box'>
     
<form action='../BD/tel.php' method='POST' >
    
<div class='form-input-container'>
    <p>Введите имя:</p>
<input type='text' placeholder='Введите Имя*' name='uname' >
</div>
 <p>Введите номер телефона:</p>
<div class='form-input-container'>
<input type='text' placeholder='Введите номер*' name='utext' >
</div>
  <p>Введите e-mail:</p>
<div class='form-input-container'>
<input type='email' placeholder='Введите e-mail*' name='umail' >
</div>
<div  class='form-input-container'>
    
   <p5><input name='unaz'  value="Детский торт" type='naz'></p5>

</div>
</div>
br
<div class='form-sender-btn'>
<input type='submit' value='Отправить' name='senderqq' id='qq'>
</div></form>
  
    </div>
  </div>
</div>

<label for="popupCheckboxOne8" class="popup-shower">Оформить заказ</label>

      <br> 
      <br> 
  </div>


  
  </div>
</div>
	<div class="container3 wow fadeInLeft">

<div class="product-item">
    
    <img src="../zxc/9.jpg">
    <p>
<?php
$query = ("SELECT * FROM prod where id=8");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['name'];
?>
    </p>
    <p1>
    
<?php
$query = ("SELECT * FROM prod where id=8");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['text'];
?>
<p1>
   
      <span class="price">
          <br> 
   <?php
$query = ("SELECT * FROM prod where id=8");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo "<a>".$row['price']."</a>";
?>
р
           </span>
 <div class="popup-wrapper">
  <input type="checkbox" class="popup-checkbox" id="popupCheckboxOne0.9">
  <div class="popup">
    <div class="popup-content">
      <label for="popupCheckboxOne0.9" class="popup-closer">&#215;</label>
    <div class="block">

<div class='form-box'>
     <div>
     <br>
      <br>
       <br>
 
          
<p8>Приведены данные калорийности на 100 грамм продукта:</p8>
<br>
  <br>
      <br>
       <br>
 
<p8>Бел, г-3.2</p8>
<br>
<p8>Жир, г-17.8</p8>
<br>
<p8>Угл, г-48.1</p8>
<br>
<p8>Кал, ккал-365</p8>
</div>
</div>
    </div>
  </div>
</div>
<label for="popupCheckboxOne0.9" class="popup-shower">Подробнее</label>

      <br> 
      <br> 
  </div>
  
     <div class="popup-wrapper">
  <input type="checkbox" class="popup-checkbox" id="popupCheckboxOne9">
  <div class="popup">
    <div class="popup-content">
      <label for="popupCheckboxOne9" class="popup-closer">&#215;</label>
    Оформить заказ
    
  <div class="block">
      <div class="logo2" ></div>
<div class='form-box'>
     
<form action='../BD/tel.php' method='POST' >
    
<div class='form-input-container'>
    <p>Введите имя:</p>
<input type='text' placeholder='Введите Имя*' name='uname' >
</div>
 <p>Введите номер телефона:</p>
<div class='form-input-container'>
<input type='text' placeholder='Введите номер*' name='utext' >
</div>
  <p>Введите e-mail:</p>
<div class='form-input-container'>
<input type='email' placeholder='Введите e-mail*' name='umail' >
</div>
<div  class='form-input-container'>
    
   <p5><input name='unaz'  value="Торт-сердце" type='naz'></p5>

</div>
</div>
br
<div class='form-sender-btn'>
<input type='submit' value='Отправить' name='senderqq' id='qq'>
</div></form>
  
    </div>
  </div>
</div>

<label for="popupCheckboxOne9" class="popup-shower">Оформить заказ</label>

      <br> 
      <br> 
  </div>


  
  </div>
<div class="product-item">
    
    <img src="../zxc/13.jpg">
    <p>
<?php
$query = ("SELECT * FROM prod where id=9");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['name'];
?>
    </p>
    <p1>
    
<?php
$query = ("SELECT * FROM prod where id=9");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['text'];
?>

   </p1>
      <span class="price">
          <br> 
   <?php
$query = ("SELECT * FROM prod where id=9");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo "<a>".$row['price']."</a>";
?>
р
           </span>
         <div class="popup-wrapper">
  <input type="checkbox" class="popup-checkbox" id="popupCheckboxOne0.10">
  <div class="popup">
    <div class="popup-content">
      <label for="popupCheckboxOne0.10" class="popup-closer">&#215;</label>
    <div class="block">

<div class='form-box'>
     <div>
     <br>
      <br>
       <br>
 
          
<p8>Приведены данные калорийности на 100 грамм продукта:</p8>
<br>
  <br>
      <br>
       <br>
 
<p8>Бел, г-6.4</p8>
<br>
<p8>Жир, г-24.8</p8>
<br>
<p8>Угл, г-54.7</p8>
<br>
<p8>Кал, ккал-467</p8>
</div>
</div>
    </div>
  </div>
</div>
<label for="popupCheckboxOne0.10" class="popup-shower">Подробнее</label>

      <br> 
      <br> 
  </div>
  
     <div class="popup-wrapper">
  <input type="checkbox" class="popup-checkbox" id="popupCheckboxOne10">
  <div class="popup">
    <div class="popup-content">
      <label for="popupCheckboxOne10" class="popup-closer">&#215;</label>
    Оформить заказ
    
  <div class="block">
      <div class="logo2" ></div>
<div class='form-box'>
     
<form action='../BD/tel.php' method='POST' >
    
<div class='form-input-container'>
    <p>Введите имя:</p>
<input type='text' placeholder='Введите Имя*' name='uname' >
</div>
 <p>Введите номер телефона:</p>
<div class='form-input-container'>
<input type='text' placeholder='Введите номер*' name='utext' >
</div>
  <p>Введите e-mail:</p>
<div class='form-input-container'>
<input type='email' placeholder='Введите e-mail*' name='umail' >
</div>
<div  class='form-input-container'>
    
   <p5><input name='unaz'  value="Детский торт" type='naz'></p5>

</div>
</div>
br
<div class='form-sender-btn'>
<input type='submit' value='Отправить' name='senderqq' id='qq'>
</div></form>
  
    </div>
  </div>
</div>

<label for="popupCheckboxOne10" class="popup-shower">Оформить заказ</label>

      <br> 
      <br> 
  </div>


  
  </div>
  <div class="product-item">
    
    <img src="../zxc/14.jpg">
    <p>
<?php
$query = ("SELECT * FROM prod where id=10");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['name'];
?>
    </p>
    <p1>
    
<?php
$query = ("SELECT * FROM prod where id=10");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['text'];
?>
</p1>
   
      <span class="price">
          <br> 
   <?php
$query = ("SELECT * FROM prod where id=10");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo "<a>".$row['price']."</a>";
?>
р
           </span>
         <div class="popup-wrapper">
  <input type="checkbox" class="popup-checkbox" id="popupCheckboxOne0.11">
  <div class="popup">
    <div class="popup-content">
      <label for="popupCheckboxOne0.11" class="popup-closer">&#215;</label>
   <div class="block">

<div class='form-box'>
     <div>
     <br>
      <br>
       <br>
 
          
<p8>Приведены данные калорийности на 100 грамм продукта:</p8>
<br>
  <br>
      <br>
       <br>
 
<p8>Бел, г-3.1</p8>
<br>
<p8>Жир, г-22.2</p8>
<br>
<p8>Угл, г-57.6</p8>
<br>
<p8>Кал, ккал-441</p8>
</div>
</div>
    </div>
  </div>
</div>
<label for="popupCheckboxOne0.11" class="popup-shower">Подробнее</label>

      <br> 
      <br> 
  </div>
  
     <div class="popup-wrapper">
  <input type="checkbox" class="popup-checkbox" id="popupCheckboxOne11">
  <div class="popup">
    <div class="popup-content">
      <label for="popupCheckboxOne11" class="popup-closer">&#215;</label>
    Оформить заказ
    
  <div class="block">
      <div class="logo2" ></div>
<div class='form-box'>
     
<form action='../BD/tel.php' method='POST' >
    
<div class='form-input-container'>
    <p>Введите имя:</p>
<input type='text' placeholder='Введите Имя*' name='uname' >
</div>
 <p>Введите номер телефона:</p>
<div class='form-input-container'>
<input type='text' placeholder='Введите номер*' name='utext' >
</div>
  <p>Введите e-mail:</p>
<div class='form-input-container'>
<input type='email' placeholder='Введите e-mail*' name='umail' >
</div>
<div  class='form-input-container'>
    
   <p5><input name='unaz'  value="Торт с ягодами" type='naz'></p5>

</div>
</div>
br
<div class='form-sender-btn'>
<input type='submit' value='Отправить' name='senderqq' id='qq'>
</div></form>
  
    </div>
  </div>
</div>

<label for="popupCheckboxOne11" class="popup-shower">Оформить заказ</label>

      <br> 
      <br> 
  </div>


  
  </div>
  <div class="product-item">
    
    <img src="../zxc/15.jpg">
    <p>
<?php
$query = ("SELECT * FROM prod where id=10");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['name'];
?>
    </p>
    <p1>
    
<?php
$query = ("SELECT * FROM prod where id=10");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['text'];
?>
</p1>
   
      <span class="price">
          <br> 
   <?php
$query = ("SELECT * FROM prod where id=10");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo "<a>".$row['price']."</a>";
?>
р
           </span>
       <div class="popup-wrapper">
  <input type="checkbox" class="popup-checkbox" id="popupCheckboxOne0.12">
  <div class="popup">
    <div class="popup-content">
      <label for="popupCheckboxOne0.12" class="popup-closer">&#215;</label>
  <div class="block">

<div class='form-box'>
     <div>
     <br>
      <br>
       <br>
 
          
<p8>Приведены данные калорийности на 100 грамм продукта:</p8>
<br>
  <br>
      <br>
       <br>
 
<p8>Бел, г-5.9</p8>
<br>
<p8>Жир, г-32.7</p8>
<br>
<p8>Угл, г-23.8</p8>
<br>
<p8>Кал, ккал-413</p8>
</div>
</div>
    </div>
  </div>
</div>
<label for="popupCheckboxOne0.12" class="popup-shower">Подробнее</label>

      <br> 
      <br> 
  </div>
  
     <div class="popup-wrapper">
  <input type="checkbox" class="popup-checkbox" id="popupCheckboxOne12">
  <div class="popup">
    <div class="popup-content">
      <label for="popupCheckboxOne12" class="popup-closer">&#215;</label>
    Оформить заказ
    
  <div class="block">
      <div class="logo2" ></div>
<div class='form-box'>
     
<form action='../BD/tel.php' method='POST' >
    
<div class='form-input-container'>
    <p>Введите имя:</p>
<input type='text' placeholder='Введите Имя*' name='uname' >
</div>
 <p>Введите номер телефона:</p>
<div class='form-input-container'>
<input type='text' placeholder='Введите номер*' name='utext' >
</div>
  <p>Введите e-mail:</p>
<div class='form-input-container'>
<input type='email' placeholder='Введите e-mail*' name='umail' >
</div>
<div  class='form-input-container'>
    
   <p5><input name='unaz'  value="Торт с ягодами" type='naz'></p5>

</div>
</div>
br
<div class='form-sender-btn'>
<input type='submit' value='Отправить' name='senderqq' id='qq'>
</div></form>
  
    </div>
  </div>
</div>

<label for="popupCheckboxOne12" class="popup-shower">Оформить заказ</label>

      <br> 
      <br> 
  </div>


  
  </div>
	
	</div>
	<div class="container4 wow fadeInRight">

<div class="product-item">
    
    <img src="../zxc/16.jpg">
    <p>
<?php
$query = ("SELECT * FROM prod where id=7");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['name'];
?>
    </p>
    <p1>
    
<?php
$query = ("SELECT * FROM prod where id=7");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['text'];
?>
</p1>
   
      <span class="price">
          <br> 
   <?php
$query = ("SELECT * FROM prod where id=7");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo "<a>".$row['price']."</a>";
?>
р
           </span>
      <div class="popup-wrapper">
  <input type="checkbox" class="popup-checkbox" id="popupCheckboxOne0.13">
  <div class="popup">
    <div class="popup-content">
      <label for="popupCheckboxOne0.13" class="popup-closer">&#215;</label>
   <div class="block">

<div class='form-box'>
     <div>
     <br>
      <br>
       <br>
 
          
<p8>Приведены данные калорийности на 100 грамм продукта:</p8>
<br>
  <br>
      <br>
       <br>
 
<p8>Бел, г-4.2</p8>
<br>
<p8>Жир, г-14.7</p8>
<br>
<p8>Угл, г-48.4</p8>
<br>
<p8>Кал, ккал-341</p8>
</div>
</div>
    </div>
  </div>
</div>
<label for="popupCheckboxOne0.13" class="popup-shower">Подробнее</label>

      <br> 
      <br> 
  </div>
  
     <div class="popup-wrapper">
  <input type="checkbox" class="popup-checkbox" id="popupCheckboxOne13">
  <div class="popup">
    <div class="popup-content">
      <label for="popupCheckboxOne13" class="popup-closer">&#215;</label>
    Оформить заказ
    
  <div class="block">
      <div class="logo2" ></div>
<div class='form-box'>
     
<form action='../BD/tel.php' method='POST' >
    
<div class='form-input-container'>
    <p>Введите имя:</p>
<input type='text' placeholder='Введите Имя*' name='uname' >
</div>
 <p>Введите номер телефона:</p>
<div class='form-input-container'>
<input type='text' placeholder='Введите номер*' name='utext' >
</div>
  <p>Введите e-mail:</p>
<div class='form-input-container'>
<input type='email' placeholder='Введите e-mail*' name='umail' >
</div>
<div  class='form-input-container'>
    
   <p5><input name='unaz'  value="Детский торт" type='naz'></p5>

</div>
</div>
br
<div class='form-sender-btn'>
<input type='submit' value='Отправить' name='senderqq' id='qq'>
</div></form>
  
    </div>
  </div>
</div>

<label for="popupCheckboxOne13" class="popup-shower">Оформить заказ</label>

      <br> 
      <br> 
  </div>


  
  </div>
<div class="product-item">
    
    <img src="../zxc/17.jpg">
    <p>
<?php
$query = ("SELECT * FROM prod where id=9");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['name'];
?>
    </p>
    
    <p1>
<?php
$query = ("SELECT * FROM prod where id=9");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['text'];
?>
</p1>
   
      <span class="price">
          <br> 
   <?php
$query = ("SELECT * FROM prod where id=9");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo "<a>".$row['price']."</a>";
?>
р
           </span>
         <div class="popup-wrapper">
  <input type="checkbox" class="popup-checkbox" id="popupCheckboxOne0.14">
  <div class="popup">
    <div class="popup-content">
      <label for="popupCheckboxOne0.14" class="popup-closer">&#215;</label>
    <div class="block">

<div class='form-box'>
     <div>
     <br>
      <br>
       <br>
 
          
<p8>Приведены данные калорийности на 100 грамм продукта:</p8>
<br>
  <br>
      <br>
       <br>
 
<p8>Бел, г-3.5</p8>
<br>
<p8>Жир, г-13.6</p8>
<br>
<p8>Угл, г-48.3</p8>
<br>
<p8>Кал, ккал-324</p8>
</div>
</div>
    </div>
  </div>
</div>
<label for="popupCheckboxOne0.14" class="popup-shower">Подробнее</label>

      <br> 
      <br> 
  </div>
  
     <div class="popup-wrapper">
  <input type="checkbox" class="popup-checkbox" id="popupCheckboxOne14">
  <div class="popup">
    <div class="popup-content">
      <label for="popupCheckboxOne14" class="popup-closer">&#215;</label>
    Оформить заказ
    
  <div class="block">
      <div class="logo2" ></div>
<div class='form-box'>
     
<form action='../BD/tel.php' method='POST' >
    
<div class='form-input-container'>
    <p>Введите имя:</p>
<input type='text' placeholder='Введите Имя*' name='uname' >
</div>
 <p>Введите номер телефона:</p>
<div class='form-input-container'>
<input type='text' placeholder='Введите номер*' name='utext' >
</div>
  <p>Введите e-mail:</p>
<div class='form-input-container'>
<input type='email' placeholder='Введите e-mail*' name='umail' >
</div>
<div  class='form-input-container'>
    
   <p5><input name='unaz'  value="Детский торт" type='naz'></p5>

</div>
</div>
br
<div class='form-sender-btn'>
<input type='submit' value='Отправить' name='senderqq' id='qq'>
</div></form>
  
    </div>
  </div>
</div>

<label for="popupCheckboxOne14" class="popup-shower">Оформить заказ</label>

      <br> 
      <br> 
  </div>


  
  </div>
  <div class="product-item">
    
    <img src="../zxc/18.jpg">
    <p>
<?php
$query = ("SELECT * FROM prod where id=11");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['name'];
?>
    </p>
    
    <p1>
<?php
$query = ("SELECT * FROM prod where id=11");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['text'];
?>
</p1>
   
      <span class="price">
          <br> 
   <?php
$query = ("SELECT * FROM prod where id=11");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo "<a>".$row['price']."</a>";
?>
р
           </span>
          <div class="popup-wrapper">
  <input type="checkbox" class="popup-checkbox" id="popupCheckboxOne0.15">
  <div class="popup">
    <div class="popup-content">
      <label for="popupCheckboxOne0.15" class="popup-closer">&#215;</label>
   <div class="block">

<div class='form-box'>
     <div>
     <br>
      <br>
       <br>
 
          
<p8>Приведены данные калорийности на 100 грамм продукта:</p8>
<br>
  <br>
      <br>
       <br>
 
<p8>Бел, г-6.4</p8>
<br>
<p8>Жир, г-27.3</p8>
<br>
<p8>Угл, г-53.4</p8>
<br>
<p8>Кал, ккал-478</p8>
</div>
</div>
    </div>
  </div>
</div>
<label for="popupCheckboxOne0.15" class="popup-shower">Подробнее</label>

      <br> 
      <br> 
  </div>
  
     <div class="popup-wrapper">
  <input type="checkbox" class="popup-checkbox" id="popupCheckboxOne15">
  <div class="popup">
    <div class="popup-content">
      <label for="popupCheckboxOne15" class="popup-closer">&#215;</label>
    Оформить заказ
    
  <div class="block">
      <div class="logo2" ></div>
<div class='form-box'>
     
<form action='../BD/tel.php' method='POST' >
    
<div class='form-input-container'>
    <p>Введите имя:</p>
<input type='text' placeholder='Введите Имя*' name='uname' >
</div>
 <p>Введите номер телефона:</p>
<div class='form-input-container'>
<input type='text' placeholder='Введите номер*' name='utext' >
</div>
  <p>Введите e-mail:</p>
<div class='form-input-container'>
<input type='email' placeholder='Введите e-mail*' name='umail' >
</div>
<div  class='form-input-container'>
    
   <p5><input name='unaz'  value="Детский торт" type='naz'></p5>

</div>
</div>
br
<div class='form-sender-btn'>
<input type='submit' value='Отправить' name='senderqq' id='qq'>
</div></form>
  
    </div>
  </div>
</div>

<label for="popupCheckboxOne15" class="popup-shower">Оформить заказ</label>

      <br> 
      <br> 
  </div>


  
  </div>
  <div class="product-item">
    
    <img src="../zxc/19.jpg">
    <p>
<?php
$query = ("SELECT * FROM prod where id=7");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['name'];
?>
    </p>
    
    <p1>
<?php
$query = ("SELECT * FROM prod where id=7");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['text'];
?>
</p1>
   
      <span class="price">
          <br> 
   <?php
$query = ("SELECT * FROM prod where id=7");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo "<a>".$row['price']."</a>";
?>
р
           </span>
         <div class="popup-wrapper">
  <input type="checkbox" class="popup-checkbox" id="popupCheckboxOne0.16">
  <div class="popup">
    <div class="popup-content">
      <label for="popupCheckboxOne0.16" class="popup-closer">&#215;</label>
   <div class="block">

<div class='form-box'>
     <div>
     <br>
      <br>
       <br>
 
          
<p8>Приведены данные калорийности на 100 грамм продукта:</p8>
<br>
  <br>
      <br>
       <br>
 
<p8>Бел, г-6.6</p8>
<br>
<p8>Жир, г-21.5</p8>
<br>
<p8>Угл, г-43.6</p8>
<br>
<p8>Кал, ккал-388</p8>
</div>
</div>
    </div>
  </div>
</div>
<label for="popupCheckboxOne0.16" class="popup-shower">Подробнее</label>

      <br> 
      <br> 
  </div>
  
     <div class="popup-wrapper">
  <input type="checkbox" class="popup-checkbox" id="popupCheckboxOne16">
  <div class="popup">
    <div class="popup-content">
      <label for="popupCheckboxOne16" class="popup-closer">&#215;</label>
    Оформить заказ
    
  <div class="block">
      <div class="logo2" ></div>
<div class='form-box'>
     
<form action='../BD/tel.php' method='POST' >
    
<div class='form-input-container'>
    <p>Введите имя:</p>
<input type='text' placeholder='Введите Имя*' name='uname' >
</div>
 <p>Введите номер телефона:</p>
<div class='form-input-container'>
<input type='text' placeholder='Введите номер*' name='utext' >
</div>
  <p>Введите e-mail:</p>
<div class='form-input-container'>
<input type='email' placeholder='Введите e-mail*' name='umail' >
</div>
<div  class='form-input-container'>
    
   <p5><input name='unaz'  value="Детский торт" type='naz'></p5>

</div>
</div>
br
<div class='form-sender-btn'>
<input type='submit' value='Отправить' name='senderqq' id='qq'>
</div></form>
  
    </div>
  </div>
</div>

<label for="popupCheckboxOne16" class="popup-shower">Оформить заказ</label>

      <br> 
      <br> 
  </div>


  
  </div>

	
	</div>

 <footer class="footer">
<div id="zxc">
		<a  href="https://www.instagram.com/mila_mhitaryan/"><img src="../qq/0.png" ></a>
<a  href="https://vk.com/public116917893"><img src="../qq/01.png" ></a>
</div>
</div>

</body>
</html>
