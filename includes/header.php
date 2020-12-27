
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <link rel="stylesheet" href="../assets/css/style.css">
        <title>Wild World</title>
    </head>
    <body>
<nav class="navbar navbars navbar-expand-lg navbar-dark bg-dark sticky-top">
    <?php
        if(isset($_SESSION['email'])){
    ?>
            <a href="../pages/index.php" class="navbar-brand">Logged in as: <?php echo $_SESSION['email']; ?></a>
    <?php
        } 
        else {
    ?>
            <a href="../pages/index.php" class="navbar-brand">Admin Panel</a>
    <?php 
        }
    ?>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myMenu">
        <ul class="navbar-nav ml-auto">
        <?php
            if(isset($_SESSION['email'])){
        ?>
                <li class="nav-item dropdown bg-dark">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   Panels
                  </a>
                  <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="../pages/admin.php">Admin</a>
                    <a class="dropdown-item" href="../pages/animal.php">Animal</a>
                    <a class="dropdown-item" href="../pages/plantation.php">Plantation</a>
                    <a class="dropdown-item" href="../pages/volunteer.php#">Volunteers</a>
                    <a class="dropdown-item" href="../pages/ambulance.php">Ambulance</a>
                  </div>
                </li>
                <li class="nav-item"><a href="../pages/logout.php" class="nav-link active">Logout</a></li>
        <?php
            } 
            else {
        ?>
                <li class="nav-item"><a href="../pages/signup.php" class="nav-link">SignUp</a></li>
                <li class="nav-item"><a href="../pages/login.php" class="nav-link">Login</a></li>
        <?php 
            }
        ?>
        </ul>
    </div>
</nav>