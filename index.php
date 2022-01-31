<?php
session_start();

$userAgent = $_SERVER['HTTP_USER_AGENT'];
$userIp = $_SERVER['REMOTE_ADDR'];
$userServerName = $_SERVER['SERVER_NAME'];


?>
<div class="partie1">
    <p class="infos">=> <?=$userAgent?></p>
    <p class="infos">=> <?=$userIp?></p>
    <p class="infos">=> <?=$userServerName?></p>
</div>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/style.css">
    <title></title>
</head>
<body>
<hr>
<div class="container">
    <form action="/page2.php" method="GET">

        <label for="name-id" class="block">Name</label>
        <input type="text" name="name" id="name-id" required>

        <label for="fname-id" class="block">First name</label>
        <input type="text" name="fname" id="fname-id" required>

        <label for="year-id" class="block">Year</label>
        <input type="number" name="age" id="year-id" required>

        <input type="submit" value="Page 2" name="submit-get" class="bouton">
    </form>
</div>

<div class="container">
    <h2>secodn form    </h2>

    <form action="/page3.php" method="post">

        <label for="login-id" class="block">Login</label>
        <input type="text" name="login" id="login-id" required>

        <label for="password-id" class="block">Password</label>
        <input type="password" name="password" id="password-id" required>

        <input type="submit" value="Page 3" name="submit-post" class="bouton">

    </form>
</div>

<?php

//check form two and create a cookie with infos
if (!empty($_POST)){
    if (isset($_POST['login'], $_POST['password'])
        && !empty($_POST['login'] && !empty($_POST['password']))
    ){
        $login = strip_tags(trim($_POST['login']));
        $password =  $_POST['password'];
        $cookie = setcookie($login, $password);
        return $cookie = $_SESSION['cookie'];
    }
}
?>
</body>
</html>