<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<?php
// define variables and set to empty values
$fname = $lname = $bday = $email = $pnum = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = test_input($_POST["fname"]);
    $lname = test_input($_POST["lname"]);
    $gender = test_input($_POST["gender"]);
    $bday = test_input($_POST["bday"]);
    $pnum = test_input($_POST["pnum"]);
    $email = test_input($_POST["email"]);
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<div class="text-center">
    <h1>Ans 207</h1>
</div>
<div class="container-fluid card w-25">
    <h3 class="card-title text-center text-primary">Student Form</h3>
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

        <br>
        <input type="submit" value="Submit" name="sub" class="btn btn-primary">
    </form>
</div>
<br>
<div class="container-fluid card w-25 text-center">
    <div class="card-body">
        <h3 class="text-success">Data Submit Complete</h3>
        <p>
            <?php
            echo "Hello " . $fname . " " . $lname . " (" . $gender . ") We will send your Admisssion Confirmation to your given email address "
                . $email . " and Messege to your Number " . $pnum . " <br> Have a Great Day!... ";
            ?>
        </p>

    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>