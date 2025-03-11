<?php
require_once('config.php');
if(isset($_SESSION['auth'])){
    header('Location: index.php');
}else{
    $login = htmlspecialchars($_POST['login']);
    $pass = htmlspecialchars($_POST['pass']);
    $result = $link->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
    if($result->num_rows > 0){
        $_SESSION['auth'] = true;
        header('Location: index.php');
    }else{
        echo "Неверный логин или пароль.";
        $link->error;
    }
}
$link->close();