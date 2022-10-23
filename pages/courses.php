<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<title>FrontDev | Курсы</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<base href="../">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap" rel="stylesheet">
	<script type="text/javascript" src="scripts/scripts.js"></script>
</head>
<body>
	<?php 
		require ("../php/header.php");
	 ?>
	<main class="courses-main">
		<div class="course-container-column">
			<div class="course-container-row">
				<div class="course-box">
					<div class="course-box-info-cont">
						<div class="course-box-ico">
							<img src="images/html-ico.png" width="100">
						</div>
						<div class="course-box-info">
							<div class="course-header">
								<h2>Курс HTML</h2>
							</div>
							<div class="course-txt">
								<p>
									Этот бесплатный курс научит вас, как создавать веб-страницы с использованием HTML.
									Выполните серию практических упражнений и попрактикуйтесь при написании реального HTML-кода.
								</p>
							</div>
							<div class="course-btn">
								<div class="btn-1">
									<a href="pages/course.php">Подробнее</a>
								</div>
							</div>
						</div>
					</div>
					<div class="course-box-nums-cont">
						<div class="course-nums">
							<p>Изучают<br><span>0</span></p>
						</div>
						<div class="course-nums">
							<p>Уроков<br><span>0</span></p>
						</div>
						<div class="course-nums">
							<p>Тестов<br><span>0</span></p>
						</div>
					</div>
				</div>
				<div class="course-box">
					<div class="course-box-info-cont">
						<div class="course-box-ico">
							<img src="images/css-ico.png" width="100">
						</div>
						<div class="course-box-info">
							<div class="course-header">
								<h2>Курс CSS</h2>
							</div>
							<div class="course-txt">
								<p>
									
Наш курс CSS научит вас, как управлять стилем и макетом веб-сайтов. Выполните серию упражнений и упражнений, заполняя реальные CSS-шаблоны.
								</p>
							</div>
							<div class="course-btn">
								<div class="btn-1">
									<a href="#">Подробнее</a>
								</div>
							</div>
						</div>
					</div>
					<div class="course-box-nums-cont">
						<div class="course-nums">
							<p>Изучают<br><span>0</span></p>
						</div>
						<div class="course-nums">
							<p>Уроков<br><span>0</span></p>
						</div>
						<div class="course-nums">
							<p>Тестов<br><span>0</span></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<?php 
		require ("../php/footer.php");
	 ?>
</body>
</html>