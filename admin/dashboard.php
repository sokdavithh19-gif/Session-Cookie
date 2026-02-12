<?php
// session_start();
// if(!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] != 1) {
//     header("Location: ../auth/login.php");
//     exit();
// }
if(!isset($_COOKIE['is_admin']) || $_COOKIE['is_admin'] != 1) {
    header("Location: ../auth/login.php");
    exit();
}
?>
<h1>Welcome to the Admin Dashboard</h1>