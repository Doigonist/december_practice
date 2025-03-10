<?php
require_once('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container bg-secondary mt-5 d-flex justify-content-evenly flex-column">
        <h1>Форма по созданию страницы</h1>
        <form action="create_page.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Название Сайта</label>
    <input type="text" name="page_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Это название будет отображаться в панели навигации.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Текст для сайта</label>
    <input type="text" name="title" class="form-control" id="exampleInputPassword1" aria-describedby="passhelp">
    <div id="passhelp" class="form-text">Этот текст будет вставлен в сайт.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Название файла</label>
    <input type="text" name="filename" class="form-control" id="exampleInputPassword1" aria-describedby="filenamehelp">
    <div id="filenamehelp" class="form-text">Название файла для добавления в навигационную панель. Принимается только php!</div>
  </div>    
  <button type="submit" class="btn btn-primary mb-3">Создать</button>
</form>
    </div>
</body>
</html>
