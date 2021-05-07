<?php 
move_uploaded_file($_FILES['filename']['tmp_name'], '../temp/' . $_FILES['filename']['name']);
echo $_FILES['filename']['name'];

$filename = $_FILES['filename']['name'];

# Импорт параметров подключения

require "connect.php";

# Подключение к базе данных

$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));

# Создание запроса
"UPDATE `articles` SET `filename` = 'dsdfsfsdfsdf' WHERE `articles`.`article_id` = 1;"
$query = "UPDATE `articles` SET `filename` = $filename";

# Результат запроса

$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if ($result) {
	header('Location: ../author_page.php');
}

# Закрытие соединения

mysqli_close($link);