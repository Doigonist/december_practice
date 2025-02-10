

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
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Панель навигации</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Переключатель навигации">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="dop.html">Следующая страница</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="niko-oneshot.gif" class="d-block vw-100 vh-100" alt="..." id="img1">
        <div class="carousel-caption d-none d-md-block">
          <h5>Первый слайд</h5>
          <p>Невероятно красивый и прекрасный первый слайд.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="niko-oneshot (1).gif" class="d-block vw-100 vh-100" alt="..." id="img1">
        <div class="carousel-caption d-none d-md-block">
          <h5>Второй слайд</h5>
          <p>Невероятно красивый и прекрасный второй слайд.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Предыдущий</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Следующий</span>
    </button>
  </div>
  <div id="carouselExampleCaptions2" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="sad-hamster-race-sad.gif" class="d-block vw-100 vh-100" alt="..." id="img1">
        <div class="carousel-caption d-none d-md-block">
          <h5>Первый слайд на втором блоке!</h5>
          <p>Невероятно красивый и прекрасный первый слайд.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="barbanne-hams4anne.gif" class="d-block vw-100 vh-100" alt="..." id="img1">
        <div class="carousel-caption d-none d-md-block">
          <h5>Второй слайд на втором блоке!</h5>
          <p>Невероятно красивый и прекрасный второй слайд.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Предыдущий</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Следующий</span>
    </button>
  </div>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="script.js"></script>
    <?php
include('breadcumb.php');
?>
</body>
</html>