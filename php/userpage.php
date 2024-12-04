<?php
require_once('link.php');
$skidka = 0;
if($_SESSION['auth'] == 'user'){
    $email = $_SESSION['login'];
    $res = $link -> query("SELECT * FROM `partners_import` WHERE `email_partners` = '$email'");
    $res = $res -> fetch_all(MYSQLI_ASSOC);
	$id_partnera_for_skidka = $_SESSION['partner_id'];
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
}else{
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="styles.css" />
		<title>Document</title>
	</head>
	<body>
		<button>
			<a href="logout.php">Выйти</a>
        </button>
			<div class="wrapper">
			<div class="wrapper-main">
				<div class="wrapper-main-content-left">
					<span><?= $res[0]['type_partner']?> | <?= $res[0]['name_partners']?></span>
					<p><?= $res[0]['director_partners']?></p>
					<p><?= $res[0]['tel_partners']?></p>
					<p>Рейтинг: <?= $res[0]['rating_partners']?></p>
				</div>
				<div class="wrapper-main-content-right">
          <span><?=$skidka_per?></span>
        
        </div>
			</div>
		</div>
	</body>
</html>
