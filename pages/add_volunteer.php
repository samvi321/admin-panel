<?php
    require '../includes/connect.php';
    include '../includes/security.php';
    if(!isset($_SESSION['email'])){
        header('location: login.php');
    }
            include '../includes/header.php';
        ?>
        <div class="row justify-content-center my-4">
            <div class="col-lg-5 mb-4">
                <div class="card-wrapper mb-4">
                    <div class="light-card bg-light" style="width:32rem;">
                        <div class="card-header text-center" style="height: 100px; font-size: 40px;">Add new volunteer profile</div>
                        <div class="card-body">
                            <form action="../includes/add_volunteer_script.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col">
                                        <label for="id">Id</label>
                                        <input type="text" name="add_id" class="form-control" id="id" placeholder="Id" required>
                                    </div>
                                    <div class="col">
                                        <label for="name">Name</label>
                                        <input type="text" name="add_name" class="form-control" id="name" placeholder="Name" required>
                                    </div>
                                </div><br>
                                <div class="form-group">
                                    <label for="occupation">Occupation</label>
                                    <input type="text" name="add_occupation" class="form-control" id="occupation" placeholder="Occupation" required>
                                </div><br>
                                <div class="form-group">
                                    <label for="age">Age</label>
                                    <input type="text" name="add_age" class="form-control" id="age" placeholder="age" required>
                                </div><br>
                                <div class="form-group">
                                    <label for="add_image">Upload Image</label>
                                    <input type="file" name="add_image" class="form-control" id="image"  size="20" onchange="check_extension(this.value,'upload');" required >
                                </div><br>
                                <div class="row">
                                    <div class="col">           
                                        <a href="volunteer.php" class="btn btn-danger mr-4">CANCEL</a>
                                    </div>
                                    <div class="col">
                                        <button class="btn btn-primary" type="submit" id="upload" name="addbtn">ADD</button>
                                    </div>
                                </div>
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
        <script src="../assets/js/image_format.js"></script>
    </body>
</html>