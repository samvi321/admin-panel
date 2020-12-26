<?php
    session_start();
    require 'connect.php';
    if(isset($_POST['updatebtn']))
    {
        $id = $_POST['edit_id'];
        $fname = mysqli_real_escape_string($conn,$_POST['edit_fname']);
        $lname = mysqli_real_escape_string($conn,$_POST['edit_lname']);
        $user = $_POST['edit_user'];
        $password = mysqli_real_escape_string($conn,md5($_POST['password']));
        $sql = "UPDATE admin SET first_name='$fname', last_name='$lname', email='$user', password='$password' WHERE id='$id'";
        $result = mysqli_query($conn,$sql) or die("qeury failed.");
        header("location: ../pages/admin.php");
    }
?>