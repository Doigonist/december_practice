<?php
require_once('link.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="add-img-handler.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="img" id="">
        <input type="submit" value="Отправить">
        <input type="hidden" name="id" value="<?=$_GET['id']?>">
    </form>
</body>
</html>