<?php

    $link = new mysqli('localhost' , 'root', '','december_practice4');
    $json = json_decode(file_get_contents('php://input') , true);
  
if(!empty(file_get_contents('php://input'))){  
    if ($json['reg'] == 1){
        $res = $link -> query("INSERT INTO `users`(`login`, `password`, `email`) VALUES ('$login','$password','$email')");
        echo 1;   
    }else{
    $login = htmlspecialchars($json['login']);
    $password = htmlspecialchars($json['password']);
    $email = htmlspecialchars($json['email']);
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