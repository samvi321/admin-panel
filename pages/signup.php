<?php
    require '../includes/security.php';
    require '../includes/connect.php';
            include '../includes/header.php';
        ?> 
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card-wrapper mb-4">
                    <div class="light-card bg-light" style="width:32rem; height:32rem;">
                        <div class="card-header text-center" style="height: 100px; font-size: 40px;">Register</div>
                        <div class="card-body">
                            <form action="../includes/signup_script.php" method="post">
                                <div class="row">
                                    <div class="col">
                                        <label for="fname">First Name</label>
                                        <input type="text" name="fname" class="form-control" id="fname" placeholder=" Enter first name" required>
                                    </div>
                                    <div class="col">
                                        <label for="lname">Last Name</label>
                                        <input type="text" name="lname" class="form-control" id="lname" placeholder="Enter last name" required>
                                    </div>
                                </div><br>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" name="user" class="form-control" id="user" aria-describedby="emailHelp" placeholder="Enter email address" required>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" required>
                                    </div>
                                    <div class="col">
                                        <label for="cpassword">Confirm Password</label>
                                        <input type="password" name="cpassword" class="form-control" id="cpassword" placeholder="Confirm password" required>
                                    </div>
                                </div><br>
                                <button name="signup" class="btn btn-primary btn-block" id="signup">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            include '../includes/footer.php';
            include '../includes/common_js.php';
        ?>
        <script src="../assets/js/signup.js"></script>
    </body>
</html>