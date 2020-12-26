<?php
    require '../includes/security.php';
    require '../includes/connect.php';
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
            include '../includes/common_js.php';
        ?>
    </body>
</html>