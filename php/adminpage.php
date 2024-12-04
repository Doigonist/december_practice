<?php
require_once('link.php');
$ready_to_go = false;
if ($_SESSION['auth'] == 'admin'){
    print_r($_SESSION['auth']);
$res = $link -> query("SELECT * FROM `partners_import`");
$res_products = $link -> query("SELECT * FROM `partner_products_import`");
$res_products = $res_products -> fetch_all(MYSQLI_ASSOC);
$res = $res -> fetch_all(MYSQLI_ASSOC);
// $res_skidka = $link -> query("SELECT * FROM `partner_products_import`");
// $res_skidka = $res_skidka -> fetch_all(MYSQLI_ASSOC);
// $ready_to_go = true;
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
            for($i = 0; $i < count($res); $i++) {
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
                echo '<span>0%</span>';
        
                echo '</div>';
                echo '</div>';
            }
            ?>
		</div>
	</body>
</html>

