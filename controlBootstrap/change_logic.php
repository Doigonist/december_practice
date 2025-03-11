<?php
require('config.php');
$name = htmlspecialchars($_POST['site_name']);
$filename = htmlspecialchars($_POST['filename']);
$res = $link->query("SELECT * FROM `pages` WHERE `page_name` = '$name' OR `filename` = '$filename'");
$res = $res->fetch_all(MYSQLI_ASSOC);
if ($name != $res[0]['page_name']){
    $id = $res[0]['id'];
    $link->query("UPDATE `pages` SET `page_name` = '$name' WHERE `id` = '$id'");
    header("Location: adminPage.php");
}elseif($filename != $res[0]['filename']){
    $id = $res[0]['id'];
    $link->query("UPDATE `pages` SET `filename` = '$filename' where `id` = '$id'");
    rename($res[0]['filename'],$filename);
    header("Location: adminPage.php");
}elseif($name != $res[0]['page_name'] && $filename != $res[0]['filename']){
    $id = $res[0]['id'];
    $link->query("UPDATE `pages` SET `page_name` = '$name', `filename` = '$filename' WHERE `id` = '$id'");
    rename($res[0]['filename'],$filename);
    header("Location: adminPage.php");
}else{
    $link->error;
}
$link->close();
