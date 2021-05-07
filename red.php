<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/red.css">
	<link rel="stylesheet" href="css/all.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="js/red.js"></script>
	<script src="js/script.js"></script>
	<title>Редактирование профиля</title>
</head>
<body>
	<a href="author_page.php"><img class="back" src="images/b.png" alt=""></a>
	<form class="na" action="php/redak.php" method="POST">
		<div class="container">
			<img id="ava" src="avas/<?=$_COOKIE['avaname']?>" alt="" class="ava">
			<div class="inputs">
				<h2>Имя</h2>
				<input type="text" name="name" placeholder="<?=$_COOKIE['name']?>">
				<h2>Фамилия</h2>
				<input type="text" name="lastname" placeholder="<?=$_COOKIE['lastname']?>">
			</div>
		
		</div>
		
		<div class="container">
			<input type="submit" value="Сохранить">
		</div>
	</form>
	<form id="form2" action="php/ava.php" method="POST" enctype="multipart/form-data">
		<a id="back" href=""><img class="back" src="images/b.png" alt=""></a>
		<input type="file"  accept="image/*" onchange="loadFile(event)" name="filename" required>
        <img id="output"/>
		<input type="submit" value="Изменить">
	</form>
	<a href="php/exit.php">Выйти из аккаунта</a>
</body>
</html>