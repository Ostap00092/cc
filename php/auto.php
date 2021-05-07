<?php

# Принятие данных

$email = $_POST['email'];
$password2 = $_POST['password'];

# Импорт параметров подключения

require "connect.php";

# Подключение к базе данных

$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
# Хэширование пароля

$pass = md5($password2);

# Создание запроса

$query = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$pass'";

# Результат запроса

$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if (mysqli_num_rows($result) != 0)
{
    while ($row = mysqli_fetch_array($result)) {
        $name = $row['name'];
        $id = $row['id'];
        $lastname = $row['lastname'];
        $avaname = $row['avaname'];
    }
    unset($_COOOKIE['err']);
    setcookie('err', $err, time() + 600, "/");
    setcookie('avaname', $avaname, time() + 3600 * 24 * 10, "/");
    setcookie('id', $id, time() + 3600 * 24 * 10, "/");
    setcookie('email', $email, time() + 3600 * 24 * 10, "/");
    setcookie('name', $name, time() + 3600 * 24 * 10, "/");
    setcookie('lastname', $lastname, time() + 3600 * 24 * 10, "/");
    setcookie('onauto', 1, time() + 3600 * 24 * 10, "/");
    header("Location: ../index.php");
}else {
    $err =  "Неверный пароль или электронная почта.";
    setcookie('err', $err, time() + 600, "/");
    header('Location: ../autorization.php');
}

# Закрытие соединения

mysqli_close($link);