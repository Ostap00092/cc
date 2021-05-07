
<?php

# Импорт параметров подключения

require "php/connect.php";

# Подключение к базе данных

$link = mysqli_connect($host, $user, $password, $database) 
       or die("Ошибка " . mysqli_error($link));

# Создание запроса
$id = $_COOOKIE['id'];
// echo $id;
$query = "SELECT * FROM `articles`";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if (mysqli_num_rows($result) != 0)
{
    while ($row = mysqli_fetch_array($result)) {
        // var_dump($row);
    }
    
}else {
    echo "Что-то не так.";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/watch.css">
    <link rel="stylesheet" href="css/menu.css">
    <title>Просмотр публикаций</title>
</head>
<body>
    <?php require "php/menu.php";?>
    <div class="article">
        <?php
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
        if (mysqli_num_rows($result) != 0)
        {
            while ($row = mysqli_fetch_array($result)):?>
            <div class="article">
                <img class="art" src="temp/<?=$row['filename']?>" alt="">
                <div class="author">
                    <img src="avas/<?=$row['author_avaname']?>" alt="" class="profile_logo">
                    <div class="name">
                        <?=$row['author_name']?>
                        <?=$row['author_lastname']?>
                    </div>
                </div>
            </div>
            
<!--             
            #endwhile; -->
            <?php endwhile;}?>
        
    </div>
</body>
</html>
