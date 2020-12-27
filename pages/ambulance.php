<?php
    require '../includes/connect.php';
    include '../includes/security.php';
    if(!isset($_SESSION['email'])){
        header('location: login.php');
    }
            include '../includes/header.php';
            $sql = "SELECT * FROM ambulance";
            $result = mysqli_query($conn,$sql) or die("query failed.");
        ?> 
        <div class="container-fluid my-4">
            <div class="card mb-4">
                <div class="card-header"><h2>Ambulances Table</h2>
                    <form action="add_ambulance.php" method="post" enctype="multipart/form-data">
                        <button type="submit" name="add_btn" class="btn btn-info">ADD</button>
                    </form>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Vehicle number</th>
                                    <th scope="col">Contact number</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">EDIT</th>
                                    <th scope="col">DELETE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    if(mysqli_num_rows($result) > 0){
                                        while($row = mysqli_fetch_assoc($result)){
                                ?>
                                <tr>
                                    <th scope="row"><?php  echo $row['id']; ?></th>
                                    <td><?php  echo $row['vehicle_number']; ?></td>
                                    <td><?php  echo $row['contact_number']; ?></td>
                                    <td><?php echo '<img src="../assets/uploads/'.$row['image'].'" width="100px" height="100px" alt="image"></td>'; ?>
                                    <td>
                                        <form action="edit_ambulance.php" method="post">
                                        <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" name="edit_btn" class="btn btn-success">EDIT</button>
                                    </form>
                                    </td>
                                    <td>
                                        <form action="../includes/delete_ambulance.php" method="post">
                                        <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" name="deletebtn" class="btn btn-danger">DELETE</button>
                                        </form>
                                    </td>
                                </tr>
                                <?php
                                        }
                                    }
                                    else{
                                        echo "No Record Found";
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <?php
            include '../includes/footer.php';
            include '../includes/common_js.php';
        ?>
        <script src="../assets/js/datatable.js"></script>
        <script src="../assets/js/image_format.js"></script>
    </body>
</html>