<?php
   require 'connect.php';
   include 'security.php';
    if(isset($_POST['updatebtn']))
    {
        $id = $_POST['edit_id'];
        $species = $_POST['edit_species'];
        $description = $_POST['edit_description'];
        $image = $_FILES["edit_image"]['name'];
        $tmp = $_FILES["edit_image"]["tmp_name"];
        $sql = "UPDATE plantation SET species='$species', description='$description', image='$image' WHERE id='$id'";
        $result = mysqli_query($conn,$sql) or die("qeury failed.");
        move_uploaded_file($_FILES["edit_image"]['tmp_name'],"../assets/uploads/".$_FILES["edit_image"]['name']);
        header("location: ../pages/plantation.php");    
    }
?>