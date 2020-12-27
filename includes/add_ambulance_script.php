<?php
    require 'connect.php';
    include 'security.php';
    if(isset($_POST['addbtn']))
    {
        $vehicle_number = $_POST['add_vehicle_number'];
        $groups = $_POST['add_group'];
        $contact_number = $_POST['add_contact_number'];
        $image = ($_FILES["add_image"]["name"]);
        $tmp = ($_FILES["add_image"]["tmp_name"]);
        $sql = "INSERT INTO ambulance (vehicle_number,contact_number,image) VALUES('$vehicle_number','$contact_number','$image')";
        $result = mysqli_query($conn,$sql) or die("qeury failed.");
        move_uploaded_file($_FILES["add_image"]['tmp_name'],"../assets/uploads/".$_FILES["add_image"]["name"]);
        header("location: ../pages/ambulance.php");
    }
?>