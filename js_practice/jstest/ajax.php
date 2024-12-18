<?php

    $link = new mysqli('localhost' , 'root', '','december_practice4');
if (isset($_POST['login']) && isset($_POST['password'])){
    // echo 'Данные формы пришли успешно! Логин : ' . $_POST['login'] . ' a пароль - ' . $_POST['password'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    if ($login == 'admin' && $password == 'admin'){
       echo 2;
    }else{
        $res = $link -> query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
        $res = $res -> fetch_all(MYSQLI_ASSOC);
        if (count($res) > 0){
            $arr = [];
            array_push($arr , $login);
            array_push($arr , $password);
            array_push($arr , $res[0]['email']);
            $arr = json_encode($arr);
            print_r($arr);
        }else{
        $res = $link -> query("INSERT INTO `users`(`login`, `password`, `email`) VALUES ('$login','$password','example@mail.com')");
        echo 1;
        }
    }
}
?>