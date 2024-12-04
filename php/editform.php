<?php
require_once('link.php');
$id_partnera = $_GET['id'];
$res = $link -> query("SELECT * FROM `partners_import` WHERE `id_partners` = '$id_partnera'");
$res = $res -> fetch_all(MYSQLI_ASSOC);
$res_products = $link -> query("SELECT * FROM `products_import_1`");
$res_products = $res_products -> fetch_all(MYSQLI_ASSOC);
require_once('funcs.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Форма для добавления продажи</h1>
    <table border="5px">
        <tr>
            <th>Компания</th>
            <th>Директор</th>
            <th>Количество проданных копий</th>
            <th>Скидка</th>
        </tr>
        <tr>
            <td><?= $res[0]['name_partners']?></td>
            <td><?= $res[0]['director_partners']?></td>
            <td><?= countCopies($res[0]['id_partners'])?></td>
            <td><?= countSkidka($res[0]['id_partners'])?></td>
        </tr>
    </table>
    <form action="">
        <select name="" id="">
            <?php
            for($i = 0 ; $i < count($res_products); $i++) {
                $product = $res_products[$i]['name_products'];
                $id_prod = $res_products[$i]['id_products'];
                echo "<option value='$id_prod'>$product</option>";
            }
            ?>
        </select>
        <input type="number"name="count" id="count"placeholder="Количество проданных копий">
        <input type="date" name="date" id="date">
        <button type="submit">Добавить продажу</button>
    </form>
</body>
</html>