<?php
require '../user/connection.php';
if(isset($_POST['register'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pw=$_POST['pw'];
    $register="INSERT INTO tbl_user(name,email,password) values('$name','$email','$pw')";
    $ex=$conn->query($register);
    if($ex){
        header("Location: login.php");
    }
}
?>