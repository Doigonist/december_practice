<?php
require_once('link.php');
$date = $_POST['date'];
$selected_product = $_POST['select'];
$count_products = $_POST['count'];
$partner_id = $_POST['partner'];
$query_for_add = $link -> query("INSERT INTO `partner_products_import`( `product_partner-product`, `name_partner`, `quantity_products`, `date_sales`) VALUES ('$selected_product','$partner_id','$count_products','$date')");
header('Location: index.php');
// ?>