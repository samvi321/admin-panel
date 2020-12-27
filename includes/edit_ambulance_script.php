<?php
   require 'connect.php';
   include 'security.php';
    if(isset($_POST['updatebtn']))
    {
        $id = $_POST['edit_id'];
        $vehicle_number = $_POST['edit_vehicle_number'];
        $contact_number= $_POST['edit_contact_number'];
        $image = $_FILES["edit_image"]['name'];
        $tmp = $_FILES["edit_image"]["tmp_name"];
        $sql = "UPDATE ambulance SET vehicle_number='$vehicle_number', contact_number='$contact_number', image='$image' WHERE id='$id'";
        $result = mysqli_query($conn,$sql) or die("qeury failed.");
        move_uploaded_file($_FILES["edit_image"]['tmp_name'],"../assets/uploads/".$_FILES["edit_image"]['name']);
        header("location: ../pages/ambulance.php");    
    }
?>