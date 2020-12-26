<?php
    session_start();
    require 'connect.php';
    if(isset($_POST['deletebtn']))
    {
        $id = $_POST['delete_id'];
        $sql = "DELETE FROM animal WHERE id='$id'";
        $result = mysqli_query($conn,$sql) or die("query failed.");
        header("location: ../pages/animal.php");
    }
?>