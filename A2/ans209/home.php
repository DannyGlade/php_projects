<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/10cf85d80f.js" crossorigin="anonymous"></script>
<!-- Nav bar -->
<div class="navbar navbar-expand navbar-dark bg-dark">
    <div class="container-fluid">
        <h1 class="navbar-brand">Ans 209</h1>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" href="home.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="insert.php">Add</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="update.php">Update</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="delete.php">Delete</a>
            </li>
        </ul>
    </div>
</div>
<!-- Nav bar ends -->
<?php
require_once("connection.php");
$viewQ = "SELECT * FROM `emp`";
$result = mysqli_query($con, $viewQ);
?>
<div class="contaner-fluid">
<h3 class="text-center text-primary">Employee DataBase</h3>
    <div class="row">
        <div class="col m-auto ms-4 me-4">
            <div class="card mt-5">
                <table class="table table-dark table-hover table-bordered table-striped border border-secondary rounded-pill">
                    <tr>
                        <th>EID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Gender</th>
                        <th>Birthdate</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>

                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {

                        $eid = $row['eid'];
                        $fname = $row['fname'];
                        $lname = $row['lname'];
                        $gender = $row['gender'];
                        $bday = $row['bday'];
                        $pnum = $row['pnum'];
                        $email = $row['email'];
                        $addr = $row['addr'];
                    ?>
                        <tr>
                            <td><?php echo $eid ?></td>
                            <td><?php echo $fname ?></td>
                            <td><?php echo $lname ?></td>
                            <td><?php echo $gender ?></td>
                            <td><?php echo $bday ?></td>
                            <td><?php echo $pnum ?></td>
                            <td><?php echo $email ?></td>
                            <td><?php echo $addr ?></td>
                            <td><a href="update.php?geteid=<?php echo $eid ?>" class="text-success"><i class="fas fa-edit"></i></a></td>
                            <td><a href="delete.php?geteid=<?php echo $eid ?>" class="text-danger"><i class="fas fa-times"></i></a></td>
                        </tr>
                    <?php
                    }
                    ?>
                    <tr>
                        <td colspan="10" class="text-center"><a href="insert.php" class="btn btn-primary">Add New Field  <i class="fas fa-plus"></i></a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>