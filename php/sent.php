<?php
# Принятие данных

$title = $_POST['title'];
$des = $_POST['desc'];
$author_id = intval($_POST['id']);
move_uploaded_file($_FILES['filename']['tmp_name'], '../temp/' . $_FILES['filename']['name']);

$filename = $_FILES['filename']['name'];
# Импорт параметров подключения

require "connect.php";

# Подключение к базе данных

$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));

# Создание запроса
$name = $_COOKIE['name'];
$lastname = $_COOKIE['lastname'];
$ava = $_COOKIE['avaname'];

$query = "INSERT INTO `articles` (`filename`, `author_id`, `author_name`, `author_lastname`, `author_avaname`, `article_title`,`description`) VALUES ('$filename','$author_id', '$name', '$lastname', '$ava','$title','$des')";

# Результат запроса

$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if ($result) {
	header('Location: ../author_page.php');
}

# Закрытие соединения

mysqli_close($link);