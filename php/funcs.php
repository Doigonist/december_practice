<?php
function countSkidka($id){
    require('link.php');
    $skidka = 0;
    $skidka_per = 0;
    $id_partnera_for_skidka = $id;
    $res_skidka = $link -> query("SELECT `product_count_partner_products` FROM `partner_products_import` WHERE `partner_name_partner_products` = '$id_partnera_for_skidka'");
    $res_skidka = $res_skidka -> fetch_all(MYSQLI_ASSOC);
    foreach($res_skidka as $elem){
        $skidka += $elem['product_count_partner_products']; 
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
    $res_skidka = $link -> query("SELECT `product_count_partner_products` FROM `partner_products_import` WHERE `partner_name_partner_products` = '$id_partnera'");
    $res_skidka = $res_skidka -> fetch_all(MYSQLI_ASSOC);
    foreach($res_skidka as $elem){
        $skidka += $elem['product_count_partner_products']; 
    }
    return $skidka;
}
?>
