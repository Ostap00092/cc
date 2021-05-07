<?php
# Принятие данных

$email = $_POST['email'];
$name = $_POST['name'];
$last_name = $_POST['lastname'];
$password2 = $_POST['password'];

setcookie('email', $email, time() + 3600, "/");

# Импорт параметров подключения

require "connect.php";

# Подключение к базе данных

$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));

# Хэширование пароля

$pass1 = md5($password2);

# Создание запроса

$query = "INSERT INTO `users` ( `name`, `lastname`, `password`, `email`) VALUES ('$name', '$last_name', '$pass1', '$email')";

# Результат запроса

$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    header("Location:../autorization.php");
}

# Закрытие соединения

mysqli_close($link);