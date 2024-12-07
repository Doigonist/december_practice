<?php
require_once('link.php');
    $login = htmlspecialchars($_POST['login']);
    $password = htmlspecialchars($_POST['password']);
    if (empty($_SESSION['auth']) && !empty($_POST)){
        $res = $link -> query("SELECT * FROM `partners_import` WHERE `email_partners` = '$login' AND `INN_partners` = '$password'");
        $res = $res -> fetch_all(MYSQLI_ASSOC);
        if (count($res) > 0){
            $_SESSION['auth'] = 'user';
            $_SESSION['login'] = $login;
            $_SESSION['partner_id'] = $res[0]['id_partners'];
            header('Location: userpage.php');
        }elseif($login == 'admin' and $password == '123456'){
            $_SESSION['auth'] = 'admin';
            header('Location: adminpage.php');
        }else{
            header('Location: index.php');
        }
    }else{
        header('Location: index.php');
    }


?> 

