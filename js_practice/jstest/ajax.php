<?php
include('link.php');
if (isset($_POST['login']) && isset($_POST['password'])){
    $login = htmlspecialchars($_POST['login']);
    $password = htmlspecialchars($_POST['password']);
    $email = htmlspecialchars($_POST['email']);
if ($_POST['reg'] == 1){
    $res = $link -> query("INSERT INTO `users`(`login`, `password`, `email`) VALUES ('$login','$password','$email')");
    echo 3;
}else{
    $res =$link -> query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password' AND `email` = '$email'");
    if ($res -> num_rows > 0){
        echo 1;
    }else{
        echo 2;
    }
}
}

?>