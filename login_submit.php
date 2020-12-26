<?php
    session_start();
    require 'connect.php';
    if(isset($_POST['login'])) {
        $user =  $_POST['user'];
        $password = mysqli_real_escape_string($conn, md5($_POST['password']));
        $sql = "SELECT id FROM admin WHERE email = '{$user}' AND password = '{$password}'";
        $result = mysqli_query($conn,$sql) or die("query failed.");
        $num = mysqli_num_rows($result);
		if($num == 1) {
            $_SESSION['email'] = $user;
            header("location: ../pages/admin.php");
        }
        else {
            $_SESSION['status'] = 'Email id/ Password is invalid';
            header("location: ../pages/login.php");
        }
    }
?>