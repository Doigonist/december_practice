<?php

    $link = new mysqli('localhost' , 'root', '','december_practice4');
 if (isset($_GET['login']) && isset($_GET['pass'])){
    $login = $_GET['login'];
    $password = $_GET['pass'];
    // echo 'Данные формы пришли успешно! Логин : ' . $_POST['login'] . ' a пароль - ' . $_POST['password'];
    if ($login == 'admin' && $password == 'admin'){
        echo '<img src="https://media.tenor.com/lJ_LFPgMSzUAAAAi/niko-niko-oneshot.gif" alt="">';
        echo '<h1>Cool IMG from ajax</h1>';
    }else{
    $res = $link -> query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
    $res = $res -> fetch_all(MYSQLI_ASSOC);
    if (count($res) > 0){
        echo 'Пользователь найден!';
    }else{
        $res = $link -> query("INSERT INTO `users`(`login`, `password`, `email`) VALUES ('$login','$password','example@mail.com')");
        echo 'Пользователь не был найден в базе данных вследствии чего был зарегестрирован на сайте.';
    }
    }
}
?>