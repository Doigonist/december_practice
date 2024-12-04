<?php
require_once('link.php');
if ($_SESSION['auth'] == 'admin'){
    print_r($_SESSION['auth']);
$res = $link -> query("SELECT * FROM `partners_import`");
$res_products = $link -> query("SELECT * FROM `partner_products_import`");
$res_products = $res_products -> fetch_all(MYSQLI_ASSOC);
$res = $res -> fetch_all(MYSQLI_ASSOC);
}elseif($_SESSION['auth'] == 'user' ){
    header('Location: userpage.php');
}else{
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="styles.css">
		<title>Document</title>
	</head>
	<body>
		<button>
			<a href="logout.php">Выйти</a>
        </button>
		<div class="wrapper">
            <?php
            function countSkidka($id){
                require('link.php');
                $skidka = 0;
                $skidka_per = 0;
                $id_partnera_for_skidka = $id + 1;
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
                    return $skidka_per . " | " . $skidka;
            }
            for($i = 0; $i < count($res); $i++) {
                $skidka = countSkidka($i);
                $type_partner = $res[$i]['type_partner'];
                $name_partner = $res[$i]['name_partners'];
                $director_partner = $res[$i]['director_partners'];
                $tel_partner = $res[$i]['tel_partners'];
                $rating_partners = $res[$i]['rating_partners'];
                echo '<div class="wrapper-main">';
				echo '<div class="wrapper-main-content-left">';
				echo "<span>$type_partner | $name_partner</span>";
				echo "<p>$director_partner</p>";
				echo "<p>$tel_partner</p>";
				echo "<p>Рейтинг: $rating_partners</p>";
				echo '</div>';
				echo '<div class="wrapper-main-content-right">';
                echo "<span>$skidka</span>";
        
                echo '</div>';
                echo '</div>';
            }
            ?>
		</div>
	</body>
</html>

