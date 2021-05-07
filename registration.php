<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/forms.css">
    <link rel="stylesheet" href="css/all.css">
    <title>Создание аккаунта</title>
</head>
<body>
    <form action="php/reg.php" method="POST">
        <div id="s" class="form">
            <a href="go.php"><img class="back" src="images/b.png" alt=""></a>
            <h1>Введите имя и фамилию</h1><br>
            <input type="text" name="name" placeholder="Имя" required>
            <input type="text" placeholder="Фамилия" name="lastname" required>
            <a class="btn" href="#s1">Далее</a>
        </div>
        
        <div class="form" id="s1">
            <a href="#s"><img class="back1" src="images/b.png" alt=""></a>
            <h1>Напишите электронную<br> почту</h1><br>
            <input type="email" name="email" placeholder="Электронная почта" required>
            <a class="btn" href="#s2">Далее</a>
        </div>
        <div id="s2" class="form">
            <a href="#s1"><img class="back2" src="images/b.png" alt=""></a>
            <h1>Придумайте<br> пароль</h1><br>
            <input type="password" placeholder="Пароль" name="password" required>
            <input  type="submit" value="Завершить">
        </div>
    </form>
</body>
</html>