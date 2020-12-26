<?php 
    session_start();
    require '../includes/connect.php';
    if(!isset($_SESSION['email'])){
        header('location: login.php');
    }
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <title>Admin</title>
    </head>
    <body>
        <?php
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
                                        <button type="submit" name="edit_btn" class="btn btn-success">EDIT</button>
                                    </form>
                                    </td>
                                    <td>
                                        <form action="../includes/delete.php" method="post">
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
        ?> 
        <!-- jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="../assets/js/datatable.js"></script>
    </body>
</html>