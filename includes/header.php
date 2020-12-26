<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a href="../pages/index.php" class="navbar-brand">Admin Panel</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myMenu">
        <ul class="navbar-nav ml-auto">
        <?php
            if(isset($_SESSION['email'])){
        ?>
                <li class="nav-item"><a href="../pages/cart.php" class="nav-link">Cart</a></li>
                <li class="nav-item"><a href="../pages/contact.php" class="nav-link">Settings</a></li>
                <li class="nav-item"><a href="../pages/logout.php" class="nav-link">Logout</a></li>
                <li class="nav-item"><a href="../pages/logout.php" class="nav-link"><?php echo $_SESSION['email']; ?></a></li>
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