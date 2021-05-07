<?php

move_uploaded_file($_FILES['filename']['tmp_name'], '../avas/' . $_FILES['filename']['name']);
// echo $_FILES['filename']['name'];

# Импорт параметров подключения

require "connect.php";

# Подключение к базе данных

$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));

# Создание запроса
$filename = $_FILES['filename']['name'];
$id = $_COOKIE['id'];
setcookie('avaname', $filename, time() + 3600 * 24 * 10, "/");
$query = "UPDATE `users` SET `avaname` = '$filename' WHERE `id` = '$id'";

# Результат запроса

$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if ($result) {
	header('Location: ../red.php');
}
