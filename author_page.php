<?php 
    if($_COOKIE['onauto'] != '1') {
        header("Location: autorization.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/author.css">
	<link rel="stylesheet" href="css/all.css">
	<link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="css/slider.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="js/mer.js"></script>
	<script src="js/slick.min.js"></script>
	<title>Страница автора</title>
</head>
<body>
	<?php

	require "php/menu.php";

	?>
	<div class="top">
		<div class="container">
			<img id="photo" src="avas/<?=$_COOKIE['avaname']?>" alt="">
		</div>
		<div class="container">
			<div class="name">
				<?=$_COOKIE['name']?>
				<?=$_COOKIE['lastname']?>
			</div>
		</div>
		<div class="container">
			<a class="btn" href="red.php">Редактировать профиль</a>
		</div>
	</div>
	<div class="articles">
		<?php 
		# Импорт параметров подключения

		require "php/connect.php";

		# Подключение к базе данных

		$link = mysqli_connect($host, $user, $password, $database) 
		    or die("Ошибка " . mysqli_error($link));

		# Создание запроса
		$id = $_COOKIE['id'];
		$query = "SELECT * FROM `articles` WHERE `author_id` = '$id'";
		$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
		if (mysqli_num_rows($result) != 0)
		{
		    while ($row = mysqli_fetch_array($result)) {
		        // var_dump($row);
		        echo "<div class='article' >";
		  		echo "<img class='img' src='temp/" . $row['filename'] . "'>";
		  		echo "</div>";
		    }
		}else {
		    echo "Публикаций нет.";
		}

		 ?>
	</div>
	<div id="all"></div>
	<div id="slider" class="slider">
		<?php
		$id = $_COOKIE['id'];
		$query = "SELECT * FROM `articles` WHERE `author_id` = '$id'";
		$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
		while ($row2 = mysqli_fetch_array($result)) {
		        // var_dump($row);
		        echo "<div class='slider__item' >";
		  		echo "<img id='img' src='temp/" . $row2['filename'] . "'>";
		  		echo "</div>";
		    }
		?>
	</div>
</body>
</html>