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
                        <div class="card-header text-center" style="height: 100px; font-size: 40px;">Edit Admin Profile</div>
                        <div class="card-body">
                            <?php
                                if(isset($_POST['edit_btn'])){
                                    $id = $_POST['edit_id'];
                                    $sql = "SELECT * FROM admin WHERE id = '$id'";
                                    $result = mysqli_query($conn,$sql) or die("qeury failed.");
                                    foreach($result as $row){
                            ?> 
                            <form action="../includes/edit_script.php" method="post">
                                <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
                                <div class="row">
                                    <div class="col">
                                        <label for="fname">First Name</label>
                                        <input type="text" name="edit_fname" class="form-control" value="<?php echo $row['first_name']; ?>" id="fname" placeholder=" Enter first name" required>
                                    </div>
                                    <div class="col">
                                        <label for="lname">Last Name</label>
                                        <input type="text" name="edit_lname" class="form-control" value="<?php echo $row['last_name']; ?>" id="lname" placeholder="Enter last name" required>
                                    </div>
                                </div><br>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" name="edit_user" class="form-control" value="<?php echo $row['email']; ?>" id="user" aria-describedby="emailHelp" placeholder="Enter email address" required>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" class="form-control" value="<?php echo $row['password']; ?>" id="password" placeholder="Enter password" required>
                                    </div>
                                    <div class="col">
                                        <label for="cpassword">Confirm Password</label>
                                        <input type="password" name="cpassword" class="form-control" value="<?php echo $row['password']; ?>" id="cpassword" placeholder="Confirm password" required>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col">           
                                        <a href="admin.php" class="btn btn-danger mr-4">CANCEL</a>
                                    </div>
                                    <div class="col">
                                        <button class="btn btn-primary" type="submit" name="updatebtn">UPDATE</button>
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
        <?php
            include '../includes/footer.php';
        ?>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script src="../assets/js/signup.js"></script>
    </body>
</html>