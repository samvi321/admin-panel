<?php
   require 'connect.php';
   include 'security.php';
    if(isset($_POST['updatebtn']))
    {
        $id = $_POST['edit_id'];
        $name = $_POST['edit_name'];
        $occupation = $_POST['edit_occupation'];
        $age = $_POST['edit_age'];
        $image = $_FILES["edit_image"]['name'];
        $tmp = $_FILES["edit_image"]["tmp_name"];
        $sql = "UPDATE volunteer SET name='$name', occupation='$occupation', age='$age', image='$image' WHERE id='$id'";
        $result = mysqli_query($conn,$sql) or die("qeury failed.");
        move_uploaded_file($_FILES["edit_image"]['tmp_name'],"../assets/uploads/".$_FILES["edit_image"]['name']);
        header("location: ../pages/volunteer.php");    
    }
?>