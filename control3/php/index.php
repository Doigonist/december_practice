<?php
require_once('link.php');
if (isset($_SESSION['auth'])){
if($_SESSION['auth'] == 'Губернатор'){
    header('Location: gubernator-page.php');
}elseif ($_SESSION['auth'] == 'Мэр'){
    header('Location: mayor-page.php');
}elseif($_SESSION['auth'] == 'Житель'){
    header('Location: civilian-page.php');
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Форма авторизации</h1>
    <form action="auth-handler.php" method="POST">
        <label for="login">Введите логин</label>
        <input type="text" name="login" id="login">
        <label for="password">Введите пароль</label>
        <input type="password" name="password" id="password">
        <input type="submit" value="Отправить">
    </form>
</body>
</html>