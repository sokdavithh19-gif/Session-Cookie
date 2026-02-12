<?php
     require '../user/connection.php';
     if(isset($_POST['login'])){
        $email=$_POST['email'];
        $pw=$_POST['pw'];
        $select="SELECT password,is_admin FROM tbl_user WHERE email='$email'";
        $ex=$conn->query($select);
        $row=mysqli_fetch_assoc($ex);
        if($pw=$row['password']){
            setcookie('is_admin', $row['is_admin'], time() + 180, "/");
            //  session_start();
            // $_SESSION['is_admin']=$row['is_admin'];
            if($row['is_admin']==1){
                header("Location: ../admin/dashboard.php");
            }else{
                header("Location: ../user/user.php");
            }
     }else{
            echo "<script>alert('Invalid email or password!')</script>";
     }
     }
?>