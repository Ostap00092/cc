<?php

$name = $_POST['name'];
$lastname = $_POST['lastname'];

if($name == '' and $lastname == '') {
	header('Location: ../author_page.php');
}else {
	# Импорт параметров подключения

	require "connect.php";

	# Подключение к базе данных

	$link = mysqli_connect($host, $user, $password, $database) 
		   or die("Ошибка " . mysqli_error($link));

	# Создание запроса
	$id = $_COOKIE['id'];
	if ($name != '') {
		$query = "UPDATE `users` SET `name` = '$name' WHERE `id` = '$id'";
		setcookie('name', $name, time() + 3600 * 24 * 10, "/");
		$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
	}
	if ($lastname != '') {
		$query = "UPDATE `users` SET `lastname` = '$lastname' WHERE `id` = '$id'";
		setcookie('lastname', $lastname, time() + 3600 * 24 * 10, "/");
		$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
	}
}
header('Location: ../author_page.php');
?>