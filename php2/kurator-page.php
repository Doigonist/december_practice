<?php
require_once('link.php');
$id_kurator = $_SESSION['id'];
$res = $link -> query("SELECT * FROM `student` WHERE `student-group` = '$id_kurator'");
$res = $res -> fetch_all(MYSQLI_ASSOC);
print_r($res);
?>