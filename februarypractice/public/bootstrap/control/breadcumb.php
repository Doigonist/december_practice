<?php
$paths = ['index.php', 'dop.php' , 'superdop.php', 'secretdop.php'];
$titles = ['Главная', 'Дополнительно', 'Супердополнительно', 'Секретно дополнительно'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg sticky-bottom">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Панель навигации</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Переключатель навигации">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
          <?php
    if (!isset($_GET['pagecounter'])){
        $pagecounter = 0;
    }else{
        $pagecounter = $_GET['pagecounter'];
        for ($i = 0; $i <= $pagecounter; $i++) {
            $page = $paths[$i];
            if ($i == $pagecounter) {
                echo "<li class='nav-item'>";
                echo "<p>$titles[$i]</p> | ";
                echo "</li>";
            }else{
                echo "<li class='nav-item'>";
                echo "<a href='$page?pagecounter=$i'>$titles[$i]</a>| ";
                echo "</li>";
            }
        }
    }
    ?>
        <li class="nav-item">
            
        </li>
        </ul>
      </div>
    </div>
  </nav>
  <a href="<?= $paths[$pagecounter+1]?>?pagecounter=<?=$pagecounter+1?>">Следующая страница</a>
  <a href="<?= $paths[$pagecounter-1]?>?pagecounter=<?=$pagecounter-1?>">Предыдущая страница</a>
    <?=$pagecounter?>
</body>
</html>