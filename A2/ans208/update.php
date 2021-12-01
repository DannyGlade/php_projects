<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<!-- Nav bar -->
<div class="navbar navbar-expand navbar-dark bg-dark">
    <div class="container-fluid">
        <h1 class="navbar-brand">Ans 208</h1>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="insert.php">Add</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="update.php">Update</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="delete.php">Delete</a>
            </li>
        </ul>
    </div>
</div>
<!-- Nav bar ends -->
<?php
error_reporting(0);

require_once("connection.php");
$tsid = $_GET['getsid'];
$getQ = "SELECT * FROM `stud` WHERE `sid` = '" . $tsid . "'";
$result = mysqli_query($con, $getQ);

while ($row = mysqli_fetch_assoc($result)) {
    $sid = $row['sid'];
    $fname = $row['fname'];
    $lname = $row['lname'];
    $gender = $row['gender'];
    $bday = $row['bday'];
    $pnum = $row['pnum'];
    $email = $row['email'];
    $addr = $row['addr'];
}
?>

<div class="container">
    <div class="row">
        <div class="col-lg-4 m-auto">
            <div class="card mt-5">
                <div class="card-title mb-0">
                    <h3 class="bg-success text-white text-center py-3 mb-0"> Update Student Data</h3>
                </div>
                <div class="card-body">
                    <form action="update.php?sid=<?php echo $sid ?>" method="post">

                        <label for="sid" class="form-label">SID: </label>
                        <input type="text" name="sid" class="form-control" value="<?php echo $sid ?>" disabled>

                        <label for="fname" class="form-label">First Name: </label>
                        <input type="text" name="fname" class="form-control" value="<?php echo $fname ?>">

                        <label for="lname" class="form-label">last Name: </label>
                        <input type="text" name="lname" class="form-control" value="<?php echo $lname ?>">

                        <label for="gender" class="form-label">Gender:</label>
                        <div class="gender form-control">
                            <input type="radio" name="gender" value="Male" <?php if($gender=="Male"){ echo "checked='true'"; } ?> class="form-check-input"> Male
                            <input type="radio" name="gender" value="Female" <?php if($gender=="Female"){ echo "checked='true'"; } ?> class="form-check-input"> Female
                        </div>

                        <label for="bday" class="form-label">Birthdate: </label>
                        <input type="date" name="bday" class="form-control" value="<?php echo $bday ?>">

                        <label for="pnum" class="form-label">Phone Num: </label>
                        <input type="text" name="pnum" class="form-control" value="<?php echo $pnum ?>">

                        <label for="email" class="form-label">Email: </label>
                        <input type="email" name="email" class="form-control" value="<?php echo $email ?>">

                        <label for="addr" class="form-label">Address: </label>
                        <textarea name="addr" class="form-control"><?php echo $addr ?></textarea>
                        <br>
                        <input type="submit" name="update" value="Update" class="btn btn-success">

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php

require_once("connection.php");

if (isset($_POST['update'])) {
    $sid = $_GET['sid'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $bday = $_POST['bday'];
    $pnum = $_POST['pnum'];
    $email = $_POST['email'];
    $addr = $_POST['addr'];

    $updateQ = "UPDATE `stud` SET `fname`='$fname',`lname`='$lname',`gender`='$gender',`bday`='$bday',`pnum`='$pnum',`email`='$email',`addr`='$addr' WHERE `sid` = '$sid'";

    $result = mysqli_query($con, $updateQ);

    if ($result) {
        header("location:home.php");
    } else {
        echo "Please Check The Query!...";
    }
}
?>