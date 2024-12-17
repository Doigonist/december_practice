<?php

    $link = new mysqli('localhost' , 'root', '','december_practice2');
if (isset($_POST['login']) && isset($_POST['password'])){
    // echo 'Данные формы пришли успешно! Логин : ' . $_POST['login'] . ' a пароль - ' . $_POST['password'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $res = $link -> query("SELECT * FROM `student` WHERE `login-student` = '$login' AND `password-student` = '$password'");
    $res = $res -> fetch_all(MYSQLI_ASSOC);
    if (count($res) > 0){
        echo 'Пользователь найден!';
    }else{
        $res = $link -> query("INSERT INTO `student`(`student-group`, `student-name`, `login-student`, `password-student`, `book-student`) VALUES ('1','TEST','$login','$password','TEST')");
        echo 'Пользователь не был найден в базе данных вследствии чего был зарегестрирован на сайте.';
    }
}
?>