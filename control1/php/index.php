<?php
require_once('link.php');
error_reporting(0);
if (!empty($_SESSION['auth']) && $_SESSION['auth'] == 'user'){
    header('Location: userpage.php');

}elseif (!empty($_SESSION['auth']) && $_SESSION['auth'] == 'admin'){
    header('Location: adminpage.php');
}
?>


<form action="auth-handler.php" method="POST">
    <label for="login">Введите email</label>
<input type="text" name="login" id="">
<label for="password">Введите ИНН</label>
<input type="password" name="password" id="">
<input type="submit" value="Войти">
</form>