<?php
    require 'connect.php';
    include 'security.php';
    if(isset($_POST['addbtn']))
    {
        $species = $_POST['add_species'];
        $groups = $_POST['add_group'];
        $streetORwild = $_POST['add_streetORwild'];
        $adoption = $_POST['add_adoption'];
        $description = $_POST['add_description'];
        $aged = $_POST['add_aged'];
        $image = ($_FILES["add_image"]["name"]);
        $tmp = ($_FILES["add_image"]["tmp_name"]);
        $sql = "INSERT INTO animal (species,groups,streetORwild,adoption,description,aged,image) VALUES('$species','$groups','$streetORwild','$adoption','$description','$aged','$image')";
        $result = mysqli_query($conn,$sql) or die("qeury failed.");
        move_uploaded_file($_FILES["add_image"]['tmp_name'],"../assets/uploads/".$_FILES["add_image"]["name"]);
        header("location: ../pages/animal.php");
    }
?>