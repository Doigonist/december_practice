<?php
require_once('link.php');
require_once('funcs.php');
$id_mayor = $_SESSION['id'];
$id_city = $_SESSION['city'];
$res = $link -> query("SELECT * FROM `civilian` WHERE `id_people` = '$id_mayor'");
$res = $res -> fetch_all(MYSQLI_ASSOC);
$arr = ["Этот текст создан для отвлечения внимания"];
$res_c = $link -> query("SELECT * FROM `civilian` WHERE `adress_people` = '$id_city' AND `status_people` != '1'");
$res_c = $res_c -> fetch_all(MYSQLI_ASSOC);

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
        </tr>
        <?php
        for($i=0; $i < count($res_c); $i++){
            if($i>0){
            $id_people = $res_c[$i]['id_people'];
            }
            $id_status = $res_c[$i]['status_people'];
            $id_adress = $res_c[$i]['adress_people'];
            $type = countCity($id_adress, $link);
            $id_post = $res_c[$i]['post_people'];
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
            echo '<td>' . $res_c[$i]['fio_people'] . '</td>';
            echo '<td>' . $status_query . '</td>';
            echo '<td>'.$adress_query.'</td>';
            echo '<td>'.$post_query.'</td>';
            echo '<td>'.$type.'</td>';
            if($i > 0){
            echo '<td>' . "<a href='editcivilian.php?id=$id_people'>Изменить</a>" .'</td>';
            }
            echo '</tr>';
        }
        ?>
    </table>
<a href="logout.php">Выйти</a>
</body>
</html>
