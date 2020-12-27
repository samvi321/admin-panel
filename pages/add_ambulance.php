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
                        <div class="card-header text-center" style="height: 100px; font-size: 40px;">Add ambulance profile</div>
                        <div class="card-body">
                            <form action="../includes/add_ambulance_script.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="vehicle_number">Vehicle Number</label>
                                    <input type="text" name="add_vehicle_number" class="form-control" id="vehicle_number" placeholder="Vehicle number" required>
                                </div><br>
                                <div class="form-group">
                                    <label for="contact_number">Contact Number</label>
                                    <input type="text" name="add_contact_number" class="form-control" id="contact_number" placeholder="contact Number" required>
                                </div><br>
                                <div class="form-group">
                                    <label for="add_image">Upload Image</label>
                                    <input type="file" name="add_image" class="form-control" id="image"  size="20" onchange="check_extension(this.value,'upload');" required >
                                </div><br>
                                <div class="row">
                                    <div class="col">           
                                        <a href="ambulance.php" class="btn shadow mr-4">CANCEL</a>
                                    </div>
                                    <div class="col">
                                        <button class="btn shadow" type="submit" id="upload" name="addbtn">ADD</button>
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