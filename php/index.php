<?php
require_once('link.php');
$res = $link -> query("SELECT * FROM `partners_import`");
$res_products = $link -> query("SELECT * FROM `partner_products_import`");
$res_products = $res_products -> fetch_all(MYSQLI_ASSOC);
$res = $res -> fetch_all(MYSQLI_ASSOC);
?>
<table border="1px">
<tr>
    <th>id Партнера</th>
    <th>Тип партнера</th>
    <th>Название партнера</th>
    <th>Директор партнера</th>
    <th>email Партнера</th>
    <th>телефон партнера</th>
    <th>адресс партнера</th>
    <th>инн партнера</th>
    <th>рейтинг партнера</th>
    <th>скидка для партнера</th>
</tr>
<?php
for($i = 0 ; $i < count($res); $i++){
    echo '<tr>';
    echo "<td>" . $res[$i]['id_partners'] . '</td>';
    echo "<td>" . $res[$i]['type_partner'] . '</td>';
    echo "<td>" . $res[$i]['name_partners'] . '</td>';
    echo "<td>" . $res[$i]['director_partners'] . '</td>';
    echo "<td>" . $res[$i]['email_partners'] . '</td>';
    echo "<td>" . $res[$i]['tel_partners'] . '</td>';
    echo "<td>" . $res[$i]['address_partners'] . '</td>';
    echo "<td>" . $res[$i]['INN_partners'] . '</td>';
    echo "<td>" . $res[$i]['rating_partners'] . '</td>';

}
?>
</table>
