<?php
require_once('link.php');
$date = htmlspecialchars($_POST['date']);
$selected_product = htmlspecialchars($_POST['select']);
$count_products = htmlspecialchars($_POST['count']);
$partner_id = htmlspecialchars($_POST['partner']);
$query_for_add = $link -> query("INSERT INTO `partner_products_import`( `products_partner_products`, `partner_name_partner_products`, `product_count_partner_products`, `date_of_sell_partner_products`) VALUES ('$selected_product','$partner_id','$count_products','$date')");
header('Location: index.php');
// ?>