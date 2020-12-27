<?php
    require 'connect.php';
    include 'security.php';
    if(isset($_POST['addbtn']))
    {
        $id = $_POST['add_id'];
        $name = $_POST['add_name'];
        $occupation = $_POST['add_occupation'];
        $age = $_POST['add_age'];
        $image = ($_FILES["add_image"]["name"]);
        $tmp = ($_FILES["add_image"]["tmp_name"]);
        $sql = "INSERT INTO volunteer (id,name,occupation,age,image) VALUES('$id','$name','$occupation','$age','$image')";
        $result = mysqli_query($conn,$sql) or die("qeury failed.");
        move_uploaded_file($_FILES["add_image"]['tmp_name'],"../assets/uploads/".$_FILES["add_image"]["name"]);
        header("location: ../pages/volunteer.php");
    }
?>