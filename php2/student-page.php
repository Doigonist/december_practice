<?php
require_once('link.php');
if (empty($_SESSION['auth']) or $_SESSION['auth'] == 'kurator'){
    header('Location: index.php');
}
    $id_student = $_SESSION['id'];
    $res = $link -> query("SELECT * FROM `student` WHERE `id-student` = '$id_student'");
    $res = $res -> fetch_all(MYSQLI_ASSOC);
    $group_student = $res[0]['student-group'];
    $group = $link -> query("SELECT `kurator-group` FROM `kurator` WHERE `id-kurator` = '$group_student'");
    $group = $group -> fetch_all(MYSQLI_ASSOC);
    print_r($group);
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
            <th>ФИО студента</th>
            <th>Средний балл</th>
            <th>Рейтинг студента</th>
        </tr>
        <tr>
            <td><?=$group[0]['kurator-group']?></td>
            <td><?=$res[0]['student-name']?></td>
            <td>2</td>
            <td>0</td>
        </tr>
    </table>
</body>
</html>