<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/forms2.css">
    <link rel="stylesheet" href="css/all.css">
    <title>Авторизация</title>
</head>
<body>
    <form class="form" class="back" action="php/auto.php" method="POST">
        <a href="go.php"><img class="back" src="images/b.png" alt=""></a>
        <img class="logo" src="images/logo.png" alt="">
        <h2 id="logo">creation<br> community</h2>
        <? if ($_COOKIE['err'] != "") { 
            echo "<a>" . $_COOKIE['err'] . "</a>";
            }?>
        <input type="email" name="email" placeholder="Электронная почта" required>
        <input type="password" name="password" placeholder="Пароль" required>
        <input type="submit" value="Войти">
    </form>
</body>
</html>