<?php
require_once('link.php');
$id = $_GET['id'];
$res = $link -> query("SELECT * FROM `civilian` WHERE `id_people` = '$id'");
$res = $res -> fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="edit-handler.php" method="POST">
        <input type="text" name="fio" value="<?=$res[0]['fio_people']?>">
        <select name="status" id="">
            <?php
            if ($_SESSION['auth'] == 'Губернатор'){
                echo '<option value="2">Мэр</option>';
            }
            ?>
            <option value="3">Житель</option>
        </select>
        <?php if($_SESSION['auth'] == "Губернатор"){
         $html = '<select name="adress" id="">
            <option value="1">Калининград</option>
            <option value="2">Черняховск</option>
            <option value="3">Балтийск</option>
        </select>';
        echo $html;
        }
        ?>
        <select name="post" id="">
            <?php
            if ($_SESSION['auth'] == 'Губернатор'){
                 echo '<option value="1">Чиновник</option>';
            }
            ?>
            <option value="2">Студент</option>
            <option value="3">Рабочий</option>
            <option value="4">Ученый</option>
        </select>
        <input type="hidden" name="id" value="<?=$id?>">
        <input type="submit">
    </form>
    <br>
    <a href="index.php">Обратно</a>
</body>
</html>