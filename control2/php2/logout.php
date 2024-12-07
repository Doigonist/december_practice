<?php
require_once('link.php');
session_destroy();
header('Location: index.php');
?>