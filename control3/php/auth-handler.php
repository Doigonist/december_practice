<?php
require_once('link.php');
    $login = htmlspecialchars($_POST['login']);
    $password = htmlspecialchars($_POST['password']);
    if (empty($_SESSION['auth']) && !empty($_POST)){
        $res = $link -> query("SELECT * FROM `civilian` WHERE `login_people` = '$login' AND `password_people` = '$password'");
        $res = $res -> fetch_all(MYSQLI_ASSOC);
        
        if (count($res) > 0){
            $status_q = $res[0]['status_people'];
            $status = $link -> query("SELECT `status` FROM `status` WHERE `id_status` = '$status_q'");
            $status = $status -> fetch_all(MYSQLI_ASSOC);
            $_SESSION['auth'] = $status[0]['status'];
            $_SESSION['id'] = $res[0]['id_people'];
            header('Location: index.php'); 
        }elseif(count($res) <= 0){
            header("Location: index.php");
        }
    }else{
        header('Location: index.php');
    }


?> 

