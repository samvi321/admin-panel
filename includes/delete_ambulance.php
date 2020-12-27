<?php
    require 'connect.php';
    include 'security.php';
    if(isset($_POST['deletebtn']))
    {
        $id = $_POST['delete_id'];
        $sql = "DELETE FROM ambulance WHERE id='$id'";
        $result = mysqli_query($conn,$sql) or die("query failed.");
        header("location: ../pages/ambulance.php");
    }
?>