<?php
    require '../includes/connect.php';
    include '../includes/security.php';
    if(!isset($_SESSION['email'])){
        header('location: login.php');
    }
            include '../includes/header.php';
            $sql = "SELECT * FROM admin";
            $result = mysqli_query($conn,$sql) or die("query failed.");
        ?> 
        <div class="container-fluid my-4">
            <div class="card mb-4">
                <div class="card-header">Admin Table</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">FirstName</th>
                                    <th scope="col">LastName</th>
                                    <th scope="col">EmailId</th>
                                    <th scope="col">Password</th>
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
                                    <td><?php  echo $row['first_name']; ?></td>
                                    <td><?php  echo $row['last_name']; ?></td>
                                    <td><?php  echo $row['email']; ?></td>
                                    <td><?php  echo $row['password']; ?></td>
                                    <td>
                                        <form action="edit.php" method="post">
                                        <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" name="edit_btn" class="btn shadow">EDIT</button>
                                    </form>
                                    </td>
                                    <td>
                                        <form action="../includes/delete.php" method="post">
                                        <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" name="deletebtn" class="btn shadow">DELETE</button>
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
    </body>
</html>