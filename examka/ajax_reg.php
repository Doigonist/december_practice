<?php
include('link.php');
if (!empty($_POST)){
$theatre = htmlspecialchars($_POST['theatre']);
if ($theatre == 'Театр 1'){
    $theatre = 1;
}else if ($theatre == 'Театр 2'){
    $theatre = 2;
}
$login = htmlspecialchars($_POST['login']);
$email = htmlspecialchars($_POST['email']);
$res = $link -> query("INSERT INTO `actor`(`name`, `email`, `theatre`) VALUES ('$login','$email','$theatre')");
echo 1;
}