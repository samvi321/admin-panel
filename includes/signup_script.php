<?php
    require 'connect.php';
    include 'security.php';
    if(isset($_POST['signup'])){
        $user = $_POST['user'];
        $sql1 = "SELECT * FROM admin WHERE email='$user'";
        $result1 = mysqli_query($conn,$sql1) or die("query failed.");
        $num = mysqli_num_rows($result1);
        if($num == 1){
            $_SESSION['status'] = "Email already exists.";
            header('location: ../pages/signup.php');
        }
        else{ 
        $fname = mysqli_real_escape_string($conn,$_POST['fname']);
        $lname = mysqli_real_escape_string($conn,$_POST['lname']);
        $password = mysqli_real_escape_string($conn,md5($_POST['password']));
        $sql = "INSERT INTO admin(first_name,last_name,email,password) VALUES ('{$fname}','{$lname}','{$user}','{$password}')";
        $result = mysqli_query($conn,$sql) or die("qeury failed.");
        $_SESSION['email'] = $user;
        header('location: ../pages/admin.php');
        }
    }
?>
