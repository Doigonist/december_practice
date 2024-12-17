<?php

    $link = new mysqli('localhost' , 'root', '','december_practice2');
    $json = json_decode(file_get_contents('php://input') , true);
    $login = $json['login'];
    $password = $json['password'];
if(!empty(file_get_contents('php://input'))){
    // echo 'Данные формы пришли успешно! Логин : ' . $_POST['login'] . ' a пароль - ' . $_POST['password'];
    if ($login = 'admin' && $password = 'admin'){
        echo '<img src="https://media.tenor.com/lJ_LFPgMSzUAAAAi/niko-niko-oneshot.gif" alt="">';
        echo '<h1>Cool IMG from ajax</h1>';
    }else{
    $res = $link -> query("SELECT * FROM `student` WHERE `login-student` = '$login' AND `password-student` = '$password'");
    $res = $res -> fetch_all(MYSQLI_ASSOC);
    if (count($res) > 0){
        echo 'Пользователь найден!';
    }else{
        $res = $link -> query("INSERT INTO `student`(`student-group`, `student-name`, `login-student`, `password-student`, `book-student`) VALUES ('1','TEST','$login','$password','TEST')");
        echo 'Пользователь не был найден в базе данных вследствии чего был зарегестрирован на сайте.';
    }
    }
}
?>