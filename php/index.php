<?php
require_once('link.php');
$res = $link -> query("SELECT * FROM `partners_import`");
$res = $res -> fetch_all(MYSQLI_ASSOC);
for ($i = 0 ; $i < count($res); $i++){
    print_r($res[$i]);
    echo '<br>';
}
?>
