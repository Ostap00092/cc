<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/publication.css">
	<link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="css/all.css">
	<link rel="stylesheet" href="css/slider.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="js/slick.min.js"></script>
	<title>Страница статьи</title>
	<script>
		$(document).ready(function() {
			$('.slider').slick({
				arrows: false,
			});
		});
		
	
	</script>
</head>
<body>
	<?php 

	$article_title = $_POST['article_title'];
	$filename = $_POST['filename'];

	?>
	<!-- <img src="temp/<?=$filename?>" alt=""> -->
	<?php require "php/menu.php";?>
	<div class="slider">
		<div class="slider__item">
			<img src="temp/додекаэдр.jpeg" alt="">
		</div>
		<div class="slider__item">
			<img src="temp/додекаэдр.jpeg" alt="">
		</div>
		<div class="slider__item">
			<img src="temp/додекаэдр.jpeg" alt="">
		</div>
		<div class="slider__item">
			<img src="temp/додекаэдр.jpeg" alt="">
		</div>
		<div class="slider__item">
			<img src="temp/додекаэдр.jpeg" alt="">
		</div>
	</div>
</body>
</html>