<?php
    session_start();
    require 'connect.php';
    if(isset($_POST['signup'])){
        $fname = mysqli_real_escape_string($conn,$_POST['fname']);
        $lname = mysqli_real_escape_string($conn,$_POST['lname']);
        $user = $_POST['user'];
        $password = mysqli_real_escape_string($conn,md5($_POST['password']));
        $sql = "INSERT INTO admin(first_name,last_name,email,password) VALUES ('{$fname}','{$lname}','{$user}','{$password}')";
        $result = mysqli_query($conn,$sql) or die("qeury failed.");
        $_SESSION['email'] = $user;
        header('location: ../pages/admin.php');
    }
?>
