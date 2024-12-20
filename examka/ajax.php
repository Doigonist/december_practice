<?php
include('link.php');
if (!empty($_POST)){
$type = $_POST['type'];
$value = htmlspecialchars($_POST['value']);
$res = $link -> query("SELECT * FROM `actor` WHERE `$type` = '$value'");
if ($res -> num_rows > 0){
    echo 1;
}
}