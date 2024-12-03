<?php
require_once('link.php');
$ready_to_go = false;
if($_SESSION['auth'] == 'user'){
    $res = $link -> query("SELECT * FROM `partners_import` WHERE `email_partners` = '$email'");
    $res = $res -> fetch_all(MYSQLI_ASSOC);
    $id_partnera = $res['id_partners'];
    $res_skidka = $link -> query("SELECT * FROM `partner_products_import` WHERE `id_partner_products` = '$id_partnera'");
    $res_skidka = $res_skidka -> fetch_all(MYSQLI_ASSOC);
    $ready_to_go = true;
}else{
    header('Location: index.php');
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
<div id="box">
    <div id="container">
    <p><?= $res['type_partner']?> | <?= $res['name_partners']?></p>
    </div>
</div>


