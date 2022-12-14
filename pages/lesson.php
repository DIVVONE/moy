<?php 
	session_start();
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>FrontDev | курс HTML</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles.css?v5">
	<base href="../">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap" rel="stylesheet">
	<script type="text/javascript" src="scripts/scripts.js"></script>
</head>
<body>
	<?php 
		require ("../php/header.php");
	 ?>
	<main class="main-lesson-container">
		<div class="lesson-container">
			<div class="content-txt">
				<h2>1.1. Основы HTML</h2>
				<p><img src="images/lessons/img01.png" width="250">
					<strong>Основы HTML</strong> содержат основные правила языка HTML, описание структуры HTML-страницы, отношения в структуре HTML-документа между HTML-элементами.<br><br></p>

<p>HTML-документ — это обычный текстовый документ, может быть создан как в обычном текстовом редакторе <strong>(Блокнот)</strong>, так и в специализированном, с подсветкой кода <strong>(Notepad++, Visual Studio Code и т.п.).</strong> HTML-документ имеет расширение <kbd>.html</kbd>.<br><br>

<p>HTML-документ состоит из дерева HTML-элементов и текста. Каждый элемент обозначается в исходном документе начальным (открывающим) и конечным (закрывающим) тегом (за редким исключением).<br><br></p>

<p><strong>Начальный тег</strong> показывает, где начинается элемент, конечный — где заканчивается. <strong>Закрывающий тег</strong> образуется путем добавления слэша <kbd>/</kbd> перед именем тега: <kbd>&lt;имя тега&gt;…&lt;/имя тега&gt;</kbd>. Между начальным и закрывающим тегами находится содержимое тега — контент.<br><br></p>

<p>Одиночные теги не могут хранить в себе содержимого напрямую, оно прописывается как значение атрибута, например, тег <kbd>&lt;input type="button" value="Кнопка"&gt;</kbd> создаст кнопку с текстом <strong>Кнопка внутри</strong>.<br><br></p>

<p>Теги могут вкладываться друг в друга, например, <kbd>&lt;p&gt;&lt;i&gt;Текст&lt;/i&gt;&lt;/p&gt;</kbd>. При вложении следует соблюдать порядок их закрытия <strong>(принцип «матрёшки»)</strong>, например, следующая запись будет неверной: <kbd>&lt;p&gt;&lt;i&gt;Текст&lt;/p&gt;&lt;/i&gt;</kbd>.<br><br></p>

<p>HTML-элементы могут иметь атрибуты (глобальные, применяемые для всех HTML-элементов, и собственные). Атрибуты прописываются в открывающем теге элемента и содержат имя и значение, указываемые в формате имя <kbd>атрибута="значение"</kbd>. Атрибуты позволяют изменять свойства и поведение элемента, для которого они заданы.<br><br></p>

<p>Каждому элементу можно присвоить несколько значений <kbd>class</kbd> и только одно значение <kbd>id</kbd>. Множественные значения <kbd>class</kbd> записываются через пробел, <kbd>&lt;div class="nav top"&gt;</kbd>. Значения <kbd>class</kbd> и <kbd>id</kbd> должны состоять только из букв, цифр, дефисов и нижних подчеркиваний и должны начинаться только с букв или цифр.<br><br></p>

<p>Браузер просматривает (интерпретирует) HTML-документ, выстраивая его структуру (DOM) и отображая ее в соответствии с инструкциями, включенными в этот файл (таблицы стилей, скрипты). Если разметка правильная, то в окне браузера будет отображена HTML-страница, содержащая HTML-элементы — заголовки, таблицы, изображения и т.д.<br><br></p>

<p>Процесс интерпретации <strong>(парсинг)</strong> начинается прежде, чем веб-страница полностью загружена в браузер. Браузеры обрабатывают HTML-документы последовательно, с самого начала, при этом обрабатывая CSS и соотнося таблицы стилей с элементами страницы.<br><br></p>

<p>HTML-документ состоит из двух разделов — заголовка — между тегами <kbd>&lt;head&gt;…&lt;/head&gt;</kbd> и содержательной части — между тегами <kbd>&lt;body&gt;…&lt;/body&gt;</kbd>.</p>
				</p>
			</div>
		</div>
		<div class="side-bar">
			<div class="slide-lesson">
				<a href="#">Предыдущий урок</a>
			</div>
			<div class="slide-lesson">
				<a href="#"> Следующий урок</a>
			</div>
		</div>
	</main>
	<?php 
		require ("../php/footer.php");
	 ?>
</body>
</html>