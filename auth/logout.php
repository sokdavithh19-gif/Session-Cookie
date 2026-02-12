<?php 
// session_start(); 
// session_destroy();
// header("Location: ../user/index.php");
setcookie('is_admin', '', time() - 180, "/");
header("Location: ../user/index.php");
?>