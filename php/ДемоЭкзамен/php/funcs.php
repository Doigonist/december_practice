<?php
function countSkidka($id){
    require('link.php');
    $skidka = 0;
    $skidka_per = 0;
    $id_partnera_for_skidka = $id;
    $res_skidka = $link -> query("SELECT `quantity_products` FROM `partner_products_import` WHERE `name_partner` = '$id_partnera_for_skidka'");
    $res_skidka = $res_skidka -> fetch_all(MYSQLI_ASSOC);
    foreach($res_skidka as $elem){
        $skidka += $elem['quantity_products']; 
    }
        if($skidka < 10000){
             $skidka_per = 0 . "%";
        }elseif($skidka > 10000 and $skidka < 50000){
            $skidka_per = 5 . "%";
        }elseif($skidka > 50000 and $skidka < 300000){
            $skidka_per = 10 . "%"; 
        }elseif($skidka > 300000){
            $skidka_per = 15 . "%"; 
        }
        return $skidka_per;
}
function countCopies($id){
    require('link.php');
    $skidka = 0;
    $id_partnera = $id;
    $res_skidka = $link -> query("SELECT `quantity_products` FROM `partner_products_import` WHERE `name_partner` = '$id_partnera'");
    $res_skidka = $res_skidka -> fetch_all(MYSQLI_ASSOC);
    foreach($res_skidka as $elem){
        $skidka += $elem['quantity_products']; 
    }
    return $skidka;
}
?>
