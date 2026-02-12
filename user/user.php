<?php include '../pages/header.php'; 
session_start(); ?>
<h1>Welcome to the User Page</h1>
<?php
// if(isset($_SESSION['is_admin']))
if(isset($_COOKIE['is_admin'])){
    echo '<a href="../auth/logout.php" class="btn btn-outline-danger">Logout</a>';
} else {
    echo '<a href="../auth/login.php" class="btn btn-outline-primary">Login</a>
    <a href="../auth/register.php" class="btn btn-outline-success">Register</a>';
}
?>
<?php include '../pages/footer.php'; ?>