<?php

    $link = new mysqli('localhost' , 'root', '','december_practice4');
 if (isset($_GET['login']) && isset($_GET['pass'])){
    if ($_GET['reg']){
        $res = $link -> query("INSERT INTO `users`(`login`, `password`, `email`) VALUES ('$login','$password','$email')");
        echo 1;
    }else{
    $login = htmlspecialchars($_GET['login']);
    $password = htmlspecialchars($_GET['pass']);
    $email = htmlspecialchars($_GET['email']);
    // echo 'Данные формы пришли успешно! Логин : ' . $_POST['login'] . ' a пароль - ' . $_POST['password'];
    if ($login == 'admin' && $password == 'admin'){
        // echo '<img src="https://media.tenor.com/lJ_LFPgMSzUAAAAi/niko-niko-oneshot.gif" alt="">';
        // echo '<h1>Cool IMG from ajax</h1>';
        echo 2;
    }else{
    $res = $link -> query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password' AND `email` = '$email'");
    $res = $res -> fetch_all(MYSQLI_ASSOC);
    if (count($res) > 0){
        echo 0;
    }else{
    }
    }
}
}
?>