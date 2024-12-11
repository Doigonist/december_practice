<?php
require_once('link.php');
$fio = $_POST['fio'];
$adress = $_POST['adress'];
$status = $_POST['status'];
$post = $_POST['post'];
$pass = $_POST['pass'];
$login = $_POST['login'];
$res = $link -> query("INSERT INTO `civilian`(`fio_people`, `login_people`, `password_people`, `status_people`, `adress_people`, `post_people`) VALUES ('$fio','$login','$pass','$status','$adress','$post')");
header("Location: index.php");
?>