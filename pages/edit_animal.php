<?php
    session_start();
    require '../includes/connect.php';
    if(!isset($_SESSION['email'])){
        header('location: login.php');
    }
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="../assets/css/style.css">
        <title>SignUp</title>
    </head>
    <body>
        <?php
            include '../includes/header.php';
        ?>
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card-wrapper mb-4">
                    <div class="light-card bg-light" style="width:32rem; height:32rem;">
                        <div class="card-header text-center" style="height: 100px; font-size: 40px;">Edit Animal Profile</div>
                        <div class="card-body">
                            <?php
                                if(isset($_POST['edit_btn'])){
                                    $id = $_POST['edit_id'];
                                    $sql = "SELECT * FROM animal WHERE id = '$id'";
                                    $result = mysqli_query($conn,$sql) or die("qeury failed.");
                                    foreach($result as $row){
                            ?> 
                            <form action="../includes/edit_animal_script.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
                                <div class="row">
                                    <div class="col">
                                        <label for="species">Species</label>
                                        <input type="text" name="edit_species" class="form-control" value="<?php echo $row['species']; ?>" id="species" placeholder="Species" required>
                                    </div>
                                    <div class="col">
                                        <label for="groups">Group</label>
                                        <input type="text" name="edit_group" class="form-control" value="<?php echo $row['groups']; ?>" id="groups" placeholder="Group" required>
                                    </div>
                                </div><br>
                                <div class="form-group">
                                    <label for="streetORwild">Street/Wild</label>
                                    <input type="text" name="edit_streetORwild" class="form-control" value="<?php echo $row['streetORwild']; ?>" id="streetORwild" placeholder="Street/Wild" required>
                                </div><br>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <input type="text" name="edit_description" class="form-control" value="<?php echo $row['description']; ?>" id="description" placeholder="description" required>
                                </div><br>
                                <div class="row">
                                    <div class="col">
                                        <label for="adoption">Adoption</label>
                                        <input type="text" name="edit_adoption" class="form-control" value="<?php echo $row['adoption']; ?>" id="adoption" placeholder="Yes/No" required>
                                    </div>
                                    <div class="col">
                                        <label for="aged">Aged</label>
                                        <input type="text" name="edit_aged" class="form-control" value="<?php echo $row['aged']; ?>" id="aged" placeholder="Yes/No" required>
                                    </div>
                                </div><br>
                                <div class="form-group">
                                    <label for="image">Upload Image</label>
                                    <input type="file" name="edit_image" class="form-control" value="<?php echo $row['image']; ?>" id="image"  size="20" onchange="check_extension(this.value,'upload');" required>
                                </div><br>
                                <div class="row">
                                    <div class="col">           
                                        <a href="animal.php" class="btn btn-danger mr-4">CANCEL</a>
                                    </div>
                                    <div class="col">
                                        <button class="btn btn-primary" type="submit" id="upload" name="updatebtn">UPDATE</button>
                                    </div>
                                </div>
                            </form>
                            <?php
                                    }
                                }
                            ?> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script src="../assets/js/image_format.js"></script>
    </body>
</html>