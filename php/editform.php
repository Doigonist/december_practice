<?php
require_once('link.php');
require_once('funcs.php');  
$id_partnera = $_GET['id'];
$res = $link -> query("SELECT * FROM `partners_import` WHERE `id_partners` = '$id_partnera'");
$res = $res -> fetch_all(MYSQLI_ASSOC);
$res_products = $link -> query("SELECT * FROM `products_import_1`");
$res_products = $res_products -> fetch_all(MYSQLI_ASSOC);
$copies = countCopies($id_partnera);
$skidka = countSkidka($id_partnera);
$get_date = date('d.m.Y');
echo $get_date;
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
            <td><?=$copies?></td>
            <td><?=$skidka?></td>
        </tr>
    </table>
    <br>
    <form action="addrecord.php" method="POST">
        <select name="select" id="">
            <?php
            for($i = 0 ; $i < count($res_products); $i++) {
                $product = $res_products[$i]['name_products'];
                $id_prod = $res_products[$i]['id_products'];
                echo "<option value='$id_prod'>$product</option>";
            }
            ?>
        </select>
        <input type="number"name="count" id="count"placeholder="Количество проданных копий">
        <input type="hidden" name="date" id="date" value ="<?=$get_date?>">
        <input type="hidden" name="partner" value="<?=$id_partnera?>">
        <button type="submit">Добавить продажу</button>
    </form>
</body>
</html>
