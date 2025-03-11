<?php
require_once('config.php');
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
  <div class="container">
    <h1>Созданные страницы</h1>
    <?php
    $i = 0;
    $res = $link->query("SELECT * FROM `pages`");
    $res = $res->fetch_all(MYSQLI_ASSOC);
    foreach($res as $page){
      echo "<div class='mb-3 pt-2'>";
      echo "<form action='change_logic.php' method='POST'>";
      echo "<input type='text' id='site_name' name='site_name' сlass='form-control'  value='" .$page['page_name'] ."'>";
      echo "<input type='text' id='filename' сlass='form-control'  name='filename' value='".$page['filename']."'>";
      echo "<button id='deletebutton' class='btn btn-danger'>Удалить</button>";
      echo "<input type='submit' class='btn btn-primary'value='Изменить'><br><hr>";
      echo "</form>";
      echo "</div>";
    }
    ?>
  </div>
    <script>
      'use strict';
let deletebuttons = document.querySelectorAll('#deletebutton');
deletebuttons.forEach(el => {

  el.addEventListener('click',async (e)=>{
    e.preventDefault();
    let form = el.parentNode;
    let name = form.querySelector('#site_name').value;
    let filename = form.querySelector('#filename').value;
    Delete(name,filename)
  });
});

async function Delete(name,filename) {
     let txt = await fetch("delete_logic.php", {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
      },
      body: new URLSearchParams({
        sitename : name,
        filename : filename,
      }),
    });
    let response = await txt.text();
    window.location.reload();
}
    </script>
</body>
</html>