<?php
require_once('link.php');
require_once('funcs.php');
$id_kurator = $_SESSION['id'];
$res = $link -> query("SELECT * FROM `student` WHERE `student-group` = '$id_kurator'");
$res = $res -> fetch_all(MYSQLI_ASSOC);
$group_student = $res[0]['student-group'];
    $group = $link -> query("SELECT * FROM `kurator` WHERE `id-kurator` = '$group_student'");
    $group = $group -> fetch_all(MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_student.css">
</head>
<body>
<table border="10px">
        <tr>
            <th>Группа студента</th>
            <th>ФИО куратора</th>
            <th>ФИО студента</th>
            <th>Средний балл</th>
            <th>Рейтинг студента</th>
        </tr>
        <?php
        for ($i = 0; $i < count($res); $i++){
            $sredniy = countSredniy($i + 1,$link);
            $rating = CalculateRating($sredniy);
            echo '<tr>';
            echo '<td>' .$group[0]['kurator-group'].'</td>';
            echo '<td>'.$group[0]['kurator-kurator'].'</td>';
            echo '<td>'.$res[$i]['student-name'].'</td>';
            echo '<td>'.$sredniy.'</td>';
            echo '<td>'.$rating.'</td>';
            echo '</tr>';
        }
        ?>
    </table>
    <a href="logout.php">Выйти</a>
</body>
</html>