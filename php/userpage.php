<?php
require_once('link.php');
$ready_to_go = false;
if($_SESSION['auth'] == 'user'){
    $email = $_SESSION['login'];
    $res = $link -> query("SELECT * FROM `partners_import` WHERE `email_partners` = '$email'");
    $res = $res -> fetch_all(MYSQLI_ASSOC);
    $ready_to_go = true;
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
		<div class="wrapper">
			<div class="wrapper-main">
				<div class="wrapper-main-content-left">
					<span><?= $res[0]['type_partner']?> | <?= $res[0]['name_partners']?></span>
					<p><?= $res[0]['director_partners']?></p>
					<p><?= $res[0]['tel_partners']?></p>
					<p>Рейтинг: <?= $res[0]['rating_partners']?></p>
				</div>
				<div class="wrapper-main-content-right">
          <span>10%</span>
        
        </div>
			</div>
		</div>
	</body>
</html>
