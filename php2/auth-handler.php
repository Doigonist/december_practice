<?php
require_once('link.php');
    $login = htmlspecialchars($_POST['login']);
    $password = htmlspecialchars($_POST['password']);
    if (empty($_SESSION['auth']) && !empty($_POST)){
        $res_kurator = $link -> query("SELECT * FROM `kurator` WHERE `kurator-login` = '$login' AND `kurator-password` = '$password'");
        $res_kurator = $res_kurator -> fetch_all(MYSQLI_ASSOC);
        $res_student = $link -> query("SELECT * FROM `student` WHERE `login-student` = '$login' AND `password-student` = '$password'");
        $res_student = $res_student -> fetch_all(MYSQLI_ASSOC);
        if (count($res_kurator) > 0){
            $_SESSION['auth'] = 'kurator';
            $_SESSION['id'] = $res_kurator[0]['id-kurator'];
            header('Location: kurator-page.php');
        }elseif(count($res_student) > 0){
            $_SESSION['auth'] = 'student';
            $_SESSION['id'] = $res_student[0]['id-student'];
            header('Location: student-page.php');
        }
    }


?> 

