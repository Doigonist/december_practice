<?php
require_once('config.php');
$title = htmlspecialchars($_POST['title']);
$page_name = htmlspecialchars($_POST['page_name']);
$filename = htmlspecialchars($_POST['filename']);
$content = " <?php
require_once('header.php');
?>  <!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Document</title>
    </head>
    <body>
        <h1>$title</h1>
    </body>
    </html>
    <?php
    require_once('footer.php');
    ?>
    "; 
if(file_exists($filename)){
    $filename = random_int(1,99999) . $filename;
    file_put_contents($filename,$content);
}else{
    file_put_contents($filename,$content);
}
$res = $link->query("INSERT INTO `pages`(`page_name`, `title`, `filename`) VALUES ('$page_name','$title','$filename')");
if ($res){
    header("Location: index.php");
}else{
    echo "Что-то пошло не так!";
    echo $link->error;
}
$link->close();


