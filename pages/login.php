<?php
    session_start();
    require '../includes/connect.php';
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
        <title>login</title>
    </head>
    <body>
        <?php
            include '../includes/header.php';
        ?> 
        <div class="card-wrapper mb-4">
            <div class="light-card bg-light" style="width:28rem; height:30rem;">
                <div class="card-header text-center" style="height: 100px; font-size: 40px;">Login</div>
                <?php
                    if(isset($_SESSION['status']) && $_SESSION['status'] != ''){
                        echo '<h2 class="bg-danger text-white">'.$_SESSION['status'].'</h2>';
                        unset($_SESSION['status']);
                } 
                ?>
                <div class="card-body">
                    <form action="../includes/login_submit.php" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" name="user" class="form-control" id="user" aria-describedby="emailHelp" placeholder="Enter email address" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" required>
                        </div><br>
                        <button name="login" class="btn btn-primary btn-block">Login</button>
                    </form>
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
    </body>
</html>