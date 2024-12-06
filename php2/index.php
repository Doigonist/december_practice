<?php
require_once('link.php');
if (!empty($_SESSION['auth']) && $_SESSION['auth'] == 'student'){
    header('Location: student-page.php');

}elseif (!empty($_SESSION['auth']) && $_SESSION['auth'] == 'kurator'){
    header('Location: kurator-page.php');
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
        <input type="text" name="login" id="">
        <label for="password">Введите пароль</label>
        <input type="password" name="password">
        <input type="submit" value="Отправить">
    </form>
</body>
</html>