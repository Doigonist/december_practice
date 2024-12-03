<?php
require_once('link.php');
$ready_to_go = false;
if($_SESSION['auth'] == 'user'){
    $email = $_SESSION['login'];
    $res = $link -> query("SELECT * FROM `partners_import` WHERE `email_partners` = '$email'");
    $res = $res -> fetch_all(MYSQLI_ASSOC);
    $ready_to_go = true;
}else{
    header('Location: index.php');
}
?>
<form action="logout.php">
    <input type="submit" value="Выйти из аккаунта">
</form>
<div id="box">
    <div id="container">
    <p><?= $res[0]['type_partner']?> | <?= $res[0]['name_partners']?></p>
    <p><?=$res[0]['director_partners']?><br>
    <?=$res[0]['tel_partners']?><br>
     Рейтинг:<?=$res[0]['rating_partners']?><br></p>
    </div>
</div>


