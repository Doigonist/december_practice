<?php
include('breadcumb.php');
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
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Панель навигации</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Переключатель навигации">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Предыдущая страница</a>
                </li>
              <li class="nav-item">
                <a class="nav-link" href="superdop.html">Следующая страница</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container-fluid">
        <h1>Дополнительная страница</h1>
        <img src="sad-hamster-race-sad.gif" alt="">
      </div>
    <nav aria-label="breadcrumb" class="sticky-bottom bg-grey">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Главная</a></li>
          <li class="breadcrumb-item active" aria-current="page">Дополнительная страница</li>
        </ol>
      </nav>
      <script src="js/bootstrap.bundle.js"></script>
      <script src="script.js"></script>
</body>
</html>