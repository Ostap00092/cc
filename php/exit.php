<?php
unset($_COOKIE['email']);
setcookie('email', NULL, -1, "/");
unset($_COOKIE['choose']);
setcookie('choose', NULL, -1, "/");
unset($_COOKIE['name']);
setcookie('name', NULL, -1, "/");
unset($_COOKIE['lastname']);
setcookie('lastname', NULL, -1, "/");
unset($_COOKIE['onauto']);
setcookie('onauto', NULL, -1, "/");
unset($_COOKIE['avaname']);
setcookie('avaname', NULL, -1, "/");
unset($_COOKIE['id']);
setcookie('id', NULL, -1, "/");
header("Location: ../index.php");