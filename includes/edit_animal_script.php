<?php
   require 'connect.php';
   include 'security.php';
    if(isset($_POST['updatebtn']))
    {
        $id = $_POST['edit_id'];
        $species = $_POST['edit_species'];
        $groups = $_POST['edit_group'];
        $streetORwild = $_POST['edit_streetORwild'];
        $adoption = $_POST['edit_adoption'];
        $description = $_POST['edit_description'];
        $aged = $_POST['edit_aged'];
        $image = $_FILES["edit_image"]['name'];
        $tmp = $_FILES["edit_image"]["tmp_name"];
        $sql = "UPDATE animal SET species='$species', groups='$groups', streetORwild='$streetORwild', adoption='$adoption', description='$description', aged='$aged', image='$image' WHERE id='$id'";
        $result = mysqli_query($conn,$sql) or die("qeury failed.");
        move_uploaded_file($_FILES["edit_image"]['tmp_name'],"../assets/uploads/".$_FILES["edit_image"]['name']);
        header("location: ../pages/animal.php");    
    }
?>