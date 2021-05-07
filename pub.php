<?php 
    if($_COOKIE['onauto'] != 1) {
        header("Location: autorization.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/pub.css">
    <link rel="stylesheet" href="css/all.css">
<!--     <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <title>Страница публикации</title>
</head>
<body>
    <form action="php/sent.php" method="POST" enctype="multipart/form-data">
        <input type="file"  accept="image/*" onchange="loadFile(event)" name="filename">
        <img id="output"/>
        <p>Придумайте название для<br> своего творчества</p>
        <input id='title' type="text" name="title" placeholder="Добавьте название" required="">
        <p>Дайте описание к данной <br>публикации</p>
        <input type="text" name="desc" placeholder="Описание(необязательно)">
        <input type="hidden" name="id" value="<?=$_COOKIE['id']?>">
        <input type="submit" value="Опубликовать">
    </form>
</body>
</html>