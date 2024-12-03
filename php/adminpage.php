<?php
require_once('link.php');
$ready_to_go = false;
if ($_SESSION['auth'] == 'admin'){
    print_r($_SESSION['auth']);
$res = $link -> query("SELECT * FROM `partners_import`");
$res_products = $link -> query("SELECT * FROM `partner_products_import`");
$res_products = $res_products -> fetch_all(MYSQLI_ASSOC);
$res = $res -> fetch_all(MYSQLI_ASSOC);
$res_skidka = $link -> query("SELECT * FROM `partner_products_import`");
$res_skidka = $res_skidka -> fetch_all(MYSQLI_ASSOC);
$ready_to_go = true;
}elseif($_SESSION['auth'] == 'user' ){
    $email = $_SESSION['login'];
    print_r($_SESSION['auth']);
    $res = $link -> query("SELECT * FROM `partners_import` WHERE `email_partners` = '$email'");
    $res = $res -> fetch_all(MYSQLI_ASSOC);
    $id_partnera = $res['id_partners'];
    $res_skidka = $link -> query("SELECT * FROM `partner_products_import`");
    $res_skidka = $res_skidka -> fetch_all(MYSQLI_ASSOC);
    $ready_to_go = true;
}else{
    echo 'Авторизации нет!';
}
?>
<form action="auth-handler.php" method="POST">
    <label for="login">Введите email</label>
<input type="text" name="login" id="">
<label for="password">Введите ИНН</label>
<input type="password" name="password" id="">
<input type="submit" value="Войти">
</form>
<form action="logout.php">
    <input type="submit" value="Выйти из аккаунта">
</form>
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
$res_skidka = $link -> query("SELECT * FROM `partner_products_import`");
$res_skidka = $res_skidka -> fetch_all(MYSQLI_ASSOC);
if($ready_to_go){
for($i = 0 ; $i < count($res); $i++){
    if($res_skidka[$i]['product_count_partner_products'] < 10000){
        $skidka = 0 . "%";
    }elseif($res_skidka[$i]['product_count_partner_products'] > 10000 and $res_skida[$i]['product_count_partner_products'] < 50000){
        $skidka = 5 . "%";
    }elseif($res_skidka[$i]['product_count_partner_products'] > 50000 and $res_skida[$i]['product_count_partner_products'] < 300000){
        $skidka = 10 . "%"; 
    }elseif($res_skidka[$i]['product_count_partner_products'] > 300000){
        $skidka = 15 . "%"; 
    }
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
    echo "<td>" . $skidka ."</td>";

}
}
?>
</table>

