<?php
require_once('funcs.php');
$id = $_POST['id'];
if(isset($_FILES['img'])) {
    $check = can_upload($_FILES['img']);
    if($check === true){
      make_upload($_FILES['img'] , $id , $link);
      echo "<strong>Файл успешно загружен!</strong>";
    }
    else{
      echo "<strong>$check</strong>";  
    }
  }
  header("Location: index.php");
?>