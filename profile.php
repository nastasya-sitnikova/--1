<?php
session_start();
include("base.php");
$q="SELECT * FROM reg;";
$r=mysqli_query($a, $q) or die('error:'.mysqli_error());
if($n=mysqli_fetch_array($r)){
if (isset($_SESSION['ID'])){
echo '
<ul>
<li><a title="Выйти с профиля" href="exit.php">Выход</a></li>
</ul>
';
}
else {
echo '
<ul>
<li><a title="Войти или Зарегистрироваться на сайте" href="auth.php">Войти/Зарегистрироваться</a></li>
</ul>
';
}
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>

    <!-- Профиль -->

<h2> Привет ты зашел на сайт</h2>

</body>
</html>