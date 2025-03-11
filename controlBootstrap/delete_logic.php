<?php
require_once('config.php');
$name = htmlspecialchars($_POST['sitename']);
$filename = htmlspecialchars($_POST['filename']);
$res = $link->query("SELECT * FROM `pages` WHERE `page_name` = '$name' OR `filename` = '$filename'");
$res = $res->fetch_all(MYSQLI_ASSOC);
$id = $res[0]['id'];
$link->query("DELETE FROM `pages` WHERE `id` = '$id'");
unlink($filename);

