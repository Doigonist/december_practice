<?php
require_once('link.php');
if (empty($_SESSION['auth']) && !empty($_POST)){
    $login = $_POST['login'];
    $password = $_POST['password'];
    if ($_POST['login'] == 'admin' && $_POST['password'] == '123456'){
        $_SESSION['auth'] = 'admin';
        header('Location: adminpage.php');
    }else{
    $query = $link->query("SELECT * FROM `partners_import` WHERE `email_partners` = '$login' AND `INN_PARTNERS` = '$password'");
    $res = $query->fetch_all(MYSQLI_ASSOC);
    $_SESSION['auth'] = 'user';
    $_SESSION['login'] = $login;
     header('Location: userpage.php');
    }
}elseif(!empty($_SESSION['auth'])){
    echo 'Вы уже авторизированы!';
}
?>