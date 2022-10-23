<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>FrontDev | курс HTML</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles.css?v1">
	<base href="../">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap" rel="stylesheet">
	<script type="text/javascript" src="scripts/scripts.js"></script>
</head>
<body>
	<?php 
		require ("../php/header.php");
	 ?>
	<main class="course-main">
		<div class="course-container">
			<div class="course-ico">
				<img src="images/html-ico.png" width="100">
			</div>
			<div class="course-info">
				<h2>Курс HTML</h2>
				<br>
				<p>			
Хотите узнать, как создать веб-сайт с использованием HTML-тегов, элементов и атрибутов? Тогда эта обучающая игра для вас!<br><br>
Наш интерактивный учебник по HTML состоит из тщательно отобранного контента, тестов и контрольных точек, чтобы вы могли узнать как можно больше, а также получить как можно больше удовольствия. Это достигается с помощью серии увлекательных упражнений и множества практических навыков написания реального HTML-кода.<br><br>
Вы также изучите основы веб-дизайна, набираете красочные очки и соревнуетесь с другими учениками по всему миру.<br><br>
Наши уроки информативны и кратки, наши контрольные пункты приятны, и ваше обучение гарантировано.<br>
Учитесь во время игры и играйте во время обучения с нашим учебником HTML! Если вы хотите продолжить свою карьеру или просто приобрести новый навык, этот учебник подойдет вам.
				</p>
			</div>
		</div>
		<div class="list-container">
			<div class="pre-info">
				<p>Уроков: <span>0</span></p>
			</div>
			<div class="module-line">
				<span>Мудуль 1: HTML</span>
			</div>
			<div class="list-lessons">
				<ol>
					<li><a href="pages/lesson.php">Основы HTML</a></li>
					<li><a href="#">HTML-теги</a></li>
					<li><a href="#">HTML-атрибуты</a></li>
					<li><a href="#">HTML-текст</a></li>
					<li><a href="#">HTML-ссылки</a></li>
				</ol>
			</div>
			<div class="module-line">
				<span>Мудуль 2: HTML5</span>
			</div>
			<div class="list-lessons">
				<ol>
					<li><a href="pages/lesson.php">Основы HTML</a></li>
					<li><a href="#">HTML-теги</a></li>
					<li><a href="#">HTML-атрибуты</a></li>
					<li><a href="#">HTML-текст</a></li>
					<li><a href="#">HTML-ссылки</a></li>
				</ol>
			</div>
		</div>
	</main>
	<?php 
		require ("../php/footer.php");
	 ?>
</body>
</html>