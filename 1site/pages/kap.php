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

<link rel="stylesheet" href="../css/zz1.css?v51">
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
      <li><a class="menu__item" href="#">Главная</a></li>
			<li><a class="menu__item" href="#">Торты</a></li>
			<li><a class="menu__item" href="#">Капкейки</a></li>
			<li><a class="menu__item" href="#">Raw-десерты</a></li>
    </ul>
  </div>
</header>

<div class="gimg">
    <h1>Капкейки на заказ.</h1>
</div>

<<div class="container">

<div class="product-item">
    
    <img src="../kap/1.jpg">
    <p>
<?php
$query = ("SELECT * FROM prod where id=12");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['name'];
?>
    </p>
    
    <p1>
<?php
$query = ("SELECT * FROM prod where id=12");

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
$query = ("SELECT * FROM prod where id=12");

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
 
<p8>Бел, г-3.9</p8>
<br>
<p8>Жир, г-25</p8>
<br>
<p8>Угл, г-34.7</p8>
<br>
<p8>Кал, ккал-375.5</p8>
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
    
   <p5><input name='unaz'  value="Набор капкейков" type='naz'></p5>

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
    
    <img src="../kap/2.jpg">
    <p>
<?php
$query = ("SELECT * FROM prod where id=12");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['name'];
?>
    </p>
    
   <p1> 
<?php
$query = ("SELECT * FROM prod where id=12");

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
$query = ("SELECT * FROM prod where id=12");

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
 
<p8>Бел, г-3.5</p8>
<br>
<p8>Жир, г-20</p8>
<br>
<p8>Угл, г-35.7</p8>
<br>
<p8>Кал, ккал-315.5</p8>
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
    
   <p5><input name='unaz'  value="Набор капкейков" type='naz'></p5>

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
    
    <img src="../kap/3.jpg">
    <p>
<?php
$query = ("SELECT * FROM prod where id=13");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['name'];
?>
    </p>
    
    <p1>
<?php
$query = ("SELECT * FROM prod where id=13");

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
$query = ("SELECT * FROM prod where id=13");

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
 
<p8>Бел, г-2.9</p8>
<br>
<p8>Жир, г-19</p8>
<br>
<p8>Угл, г-34.7</p8>
<br>
<p8>Кал, ккал-355.7</p8>
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
    
   <p5><input name='unaz'  value="Набор капкейков" type='naz'></p5>

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
  </div>
  
  	<div class="container2">
  <div class="product-item">
    
     <img src="../kap/444.jpg">
    <p>
<?php
$query = ("SELECT * FROM prod where id=12");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['name'];
?>
    </p>
    
   <p1> 
<?php
$query = ("SELECT * FROM prod where id=12");

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
$query = ("SELECT * FROM prod where id=12");

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
 
<p8>Бел, г-5.7</p8>
<br>
<p8>Жир, г-3.1</p8>
<br>
<p8>Угл, г-25.9</p8>
<br>
<p8>Кал, ккал-156.1 </p8>
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
    
   <p5><input name='unaz'  value="Набор капкейков" type='naz'></p5>

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
    
    <img src="../kap/555.jpg">
    <p>
<?php
$query = ("SELECT * FROM prod where id=12");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['name'];
?>
    </p>
    
    <p1>
<?php
$query = ("SELECT * FROM prod where id=12");

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
$query = ("SELECT * FROM prod where id=12");

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
 
<p8>Бел, г-3.6</p8>
<br>
<p8>Жир, г-10.2</p8>
<br>
<p8>Угл, г-25.8</p8>
<br>
<p8>Кал, ккал-256</p8>
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
    
   <p5><input name='unaz'  value="Набор капкейков" type='naz'></p5>

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
    
     <img src="../kap/6.jpg">
    <p>
<?php
$query = ("SELECT * FROM prod where id=12");

$result = mysqli_query ($link,$query) or die ("catch!");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
}
echo $row['name'];
?>
    </p>
    
    <p1>
<?php
$query = ("SELECT * FROM prod where id=12");

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
$query = ("SELECT * FROM prod where id=12");

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
 
<p8>Бел, г-3.3</p8>
<br>
<p8>Жир, г-6.1</p8>
<br>
<p8>Угл, г-21.4</p8>
<br>
<p8>Кал, ккал-322</p8>
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
    
   <p5><input name='unaz'  value="Набор капкейков" type='naz'></p5>

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
