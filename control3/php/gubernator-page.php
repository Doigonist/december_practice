<?php
require_once('link.php');
require_once('funcs.php');
$res = $link -> query("SELECT * FROM `civilian`");
$res = $res -> fetch_all(MYSQLI_ASSOC);
countCity(1,$link);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_gubernator.css">
</head>
<body>
    <table>
        <tr>
        <th>ФИО</th>
        <th>Статус</th>
        <th>Адресс</th>
        <th>Профессия</th>
        <th>Тип города</th>
        <th>Изменить</th>
        <th><a href="addcivilian.php">Добавить жителя</a></th>
        </tr>
        <?php
        for($i=0; $i < count($res); $i++){
            if($i>0){
            $id_people = $res[$i]['id_people'];
            }
            $id_status = $res[$i]['status_people'];
            $id_adress = $res[$i]['adress_people'];
            $type = countCity($id_adress, $link);
            $id_post = $res[$i]['post_people'];
            $status_query = $link -> query("SELECT `status` FROM `status` WHERE `id_status` = '$id_status'");
            $status_query = $status_query -> fetch_all(MYSQLI_ASSOC);
            $status_query = $status_query[0]['status'];
            $adress_query = $link -> query("SELECT `adress` FROM `adress` WHERE `id_adress` = '$id_adress'");
            $adress_query = $adress_query -> fetch_all(MYSQLI_ASSOC);
            $adress_query = $adress_query[0]['adress'];
            $post_query = $link -> query("SELECT `post` FROM `post` WHERE `id_post` = '$id_post'");
            $post_query = $post_query -> fetch_all(MYSQLI_ASSOC);
            $post_query = $post_query[0]['post'];
            echo '<tr>';
            echo '<td>' . $res[$i]['fio_people'] . '</td>';
            echo '<td>' . $status_query . '</td>';
            echo '<td>'.$adress_query.'</td>';
            echo '<td>'.$post_query.'</td>';
            echo '<td>'.$type.'</td>';
            if($i > 0){
            echo '<td>' . "<a href='editcivilian.php?id=$id_people'>Изменить</a>" . " " . "<a href='deletecivilian.php?id=$id_people'>Удалить</a>" . '</td>';
            }
            echo '</tr>';
        }
        ?>
    </table>
<a href="logout.php">Выйти</a>
</body>
</html>

