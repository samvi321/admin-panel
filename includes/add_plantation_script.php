<?php
    require 'connect.php';
    include 'security.php';
    if(isset($_POST['addbtn']))
    {
        $species = $_POST['add_species'];
        $description = $_POST['add_description'];
        $image = ($_FILES["add_image"]["name"]);
        $tmp = ($_FILES["add_image"]["tmp_name"]);
        $sql = "INSERT INTO plantation (species,description,image) VALUES('$species','$description','$image')";
        $result = mysqli_query($conn,$sql) or die("qeury failed.");
        move_uploaded_file($_FILES["add_image"]['tmp_name'],"../assets/uploads/".$_FILES["add_image"]["name"]);
        header("location: ../pages/plantation.php");
    }
?>