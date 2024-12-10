<?php
require_once('link.php');
$id = $_POST['id'];
$fio = htmlspecialchars($_POST['fio']);
$adress = $_POST['adress'];
$post = $_POST['post'];
$status = $_POST['status'];
$query = $link -> query("UPDATE `civilian` SET `fio_people`='$fio',`status_people`='$status',`adress_people`='$adress',`post_people`='$post' WHERE `id_people` = '$id'");
header('Location: index.php');
?>