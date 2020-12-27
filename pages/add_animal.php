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
                        <div class="card-header text-center" style="height: 100px; font-size: 40px;">Add new animal profile</div>
                        <div class="card-body">
                            <form action="../includes/add_animal_script.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col">
                                        <label for="species">Species</label>
                                        <input type="text" name="add_species" class="form-control" id="species" placeholder="Species" required>
                                    </div>
                                    <div class="col">
                                        <label for="groups">Group</label>
                                        <input type="text" name="add_group" class="form-control" id="groups" placeholder="Group" required>
                                    </div>
                                </div><br>
                                <div class="form-group">
                                    <label for="streetORwild">Street/Wild</label>
                                    <input type="text" name="add_streetORwild" class="form-control" id="streetORwild" placeholder="Street/Wild" required>
                                </div><br>
                                <div class="form-group">
                                    <label for="description">description</label>
                                    <input type="text" name="add_description" class="form-control" id="description" placeholder="Description" required>
                                </div><br>
                                <div class="row">
                                    <div class="col">
                                        <label for="adoption">Adoption</label>
                                        <input type="text" name="add_adoption" class="form-control" id="adoption" placeholder="Yes/No" required>
                                    </div>
                                    <div class="col">
                                        <label for="aged">Aged</label>
                                        <input type="text" name="add_aged" class="form-control" id="aged" placeholder="Yes/No" required>
                                    </div>
                                </div><br>
                                <div class="form-group">
                                    <label for="add_image">Upload Image</label>
                                    <input type="file" name="add_image" class="form-control" id="image"  size="20" onchange="check_extension(this.value,'upload');" required >
                                </div><br>
                                <div class="row">
                                    <div class="col">           
                                        <a href="animal.php" class="btn shadow mr-4">CANCEL</a>
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