<?php
require_once('link.php');
require_once('classes.php');
if (!empty($_POST['login'])){
    print_r($_POST);
    $login = $_POST['login'];
    $res = $link->query("SELECT * FROM `users` WHERE `login` = '$login'");
    $res = $res->fetch_all(MYSQLI_ASSOC);
    if (count($res) > 0){
        echo $returnmsg->ReturnErrorByCode(3);
    }else{
        echo $returnmsg->ReturnErrorByCode(1);
    }
}else{
    echo $returnmsg->ReturnErrorByCode(2) . ' ($_POST)';
}