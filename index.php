<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="css/all.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/go.css">
	<title>Creation Community</title>
</head>
<body>
	<div class="justcenter">
		<?php
		if ($_COOKIE['onauto'] != 1) {
			echo "<h2>Приветствуем, <br> мы рады видеть вас.
			</h2>
			<div class='dontIn'>
				<a href='go.php'><div class='btn'>
					Начать
				</div></a>
			</div> ";
		}?>

		<?php echo "<div class='dontIn'><a href='watch.php'><div class='btn'>Смотреть публикации</div></a></div>";
		?>
		
		<?php
		if ($_COOKIE['onauto'] == 1) {
			
			require 'php/menu.php';
		}?>
	</div>

</body>
</html>