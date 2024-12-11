<?php
require_once('link.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="add-handler.php" method="POST">
        <input type="text" name="fio" value="" placeholder="Введите ФИО">
        <input type="text" name="login" id="" placeholder="Введите Логин">
        <input type="password" name="pass" id="" placeholder="Введите Пароль">
        <select name="status" id="">
            <option value="2">Мэр</option>
            <option value="3">Житель</option>
        </select>
         <select name="adress" id="">
            <option value="1">Калининград</option>
            <option value="2">Черняховск</option>
            <option value="3">Балтийск</option>
        </select>

        <select name="post" id="">
            <option value="1">Чиновник</option>
            <option value="2">Студент</option>
            <option value="3">Рабочий</option>
            <option value="4">Ученый</option>
        </select>
        <input type="submit">
    </form>
    <br>
    <a href="index.php">Обратно</a>
</body>
</html>