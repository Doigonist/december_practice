<?php
require_once('link.php');
$id = $_GET['id'];
$res = $link -> query("DELETE FROM `civilian` WHERE `id_people` = '$id'");
header('Location: index.php');
?>