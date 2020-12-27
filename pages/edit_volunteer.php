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
                        <div class="card-header text-center" style="height: 100px; font-size: 40px;">Edit Volunteer Profile</div>
                        <div class="card-body">
                            <?php
                                if(isset($_POST['edit_btn'])){
                                    $id = $_POST['edit_id'];
                                    $sql = "SELECT * FROM volunteer WHERE id = '$id'";
                                    $result = mysqli_query($conn,$sql) or die("qeury failed.");
                                    foreach($result as $row){
                            ?> 
                            <form action="../includes/edit_volunteer_script.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
                                <div class="row">
                                    <div class="col">
                                        <label for="name">Name</label>
                                        <input type="text" name="edit_name" class="form-control" value="<?php echo $row['name']; ?>" id="name" placeholder="Name" required>
                                    </div>
                                    <div class="col">
                                        <label for="occupation">Occupation</label>
                                        <input type="text" name="edit_occupation" class="form-control" value="<?php echo $row['occupation']; ?>" id="occupation" placeholder="Occupation" required>
                                    </div>
                                </div><br>
                                <div class="form-group">
                                    <label for="age">Age</label>
                                    <input type="text" name="edit_age" class="form-control" value="<?php echo $row['age']; ?>" id="age" placeholder="Age" required>
                                </div><br>
                                <div class="form-group">
                                    <label for="image">Upload Image</label>
                                    <input type="file" name="edit_image" class="form-control" value="<?php echo $row['image']; ?>" id="image"  size="20" onchange="check_extension(this.value,'upload');" required>
                                </div><br>
                                <div class="row">
                                    <div class="col">           
                                        <a href="volunteer.php" class="btn btn-danger mr-4">CANCEL</a>
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
        <?php
            include '../includes/footer.php';
            include '../includes/common_js.php';
        ?>
        <script src="../assets/js/image_format.js"></script>
    </body>
</html>