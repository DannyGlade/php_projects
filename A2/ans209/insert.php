<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<!-- Nav bar -->
<div class="navbar navbar-expand navbar-dark bg-dark">
    <div class="container-fluid">
        <h1 class="navbar-brand">Ans 209</h1>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="insert.php">Add</a>
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
<br>
<div class="container-fluid card w-25">
    <h4 class="card-title text-center text-primary">Employee Registraion Form</h4>
    <div id="Empty" class="text-danger">
        <p>*Please Enter The Blank Field.</p>
    </div>
    <style type="text/css">
        #Empty {
            display: none;
        }
    </style>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="fname" class="form-label">First Name: </label>
        <input type="text" name="fname" class="form-control">

        <label for="lname" class="form-label">last Name: </label>
        <input type="text" name="lname" class="form-control">

        <label for="gender" class="form-label">Gender:</label>
        <div class="gender form-control">
            <input type="radio" name="gender" value="Male" class="form-check-input"> Male
            <input type="radio" name="gender" value="Female" class="form-check-input"> Female
        </div>

        <label for="bday" class="form-label">Birthdate: </label>
        <input type="date" name="bday" class="form-control">

        <label for="pnum" class="form-label">Phone Num: </label>
        <input type="text" name="pnum" class="form-control">

        <label for="email" class="form-label">Email: </label>
        <input type="email" name="email" class="form-control">

        <label for="addr" class="form-label">Address: </label>
        <textarea name="addr" class="form-control"></textarea>


        <br>
        <input type="submit" value="Submit" name="sub" class="btn btn-primary">
        <input type="reset" value="Reset" class="btn btn-secondary">
    </form>
</div>
<br>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

<?php

$fname = $lname = $gender = $bday = $pnum = $email = $addr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = test_input($_POST["fname"]);
    $lname = test_input($_POST["lname"]);
    $gender = test_input($_POST["gender"]);
    $bday = test_input($_POST["bday"]);
    $pnum = test_input($_POST["pnum"]);
    $email = test_input($_POST["email"]);
    $addr = test_input($_POST["addr"]);
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

//Data insert strats here
require_once("connection.php");

if (isset($_POST['sub'])) {

    if (empty($fname) || empty($lname) || empty($gender) || empty($bday) || empty($pnum) || empty($email)) {
        echo "
        <style type='text/css'>
            #Empty{
                display: block;
            }
        </style>";
    } else {
        $insertQ = " INSERT INTO `emp`( `fname`, `lname`, `gender`, `bday`, `pnum`, `email`, `addr`) VALUES ('$fname','$lname','$gender','$bday','$pnum','$email','$addr')";

        $result = mysqli_query($con, $insertQ);

        if ($result) {
            header("location:home.php");
        } else {
            echo "Check The Query...";
        }
    }
}

?>