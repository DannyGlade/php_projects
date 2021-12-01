<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<div class="text-center">
    <h1>Ans 204 Page_2</h1>
</div>
<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$bday = $_POST['bday'];
$email = $_POST['email'];

?>

<div class="container-fluid card w-25 text-center">
    <div class="card-body">
        <h3 class="text-success">Data Submit Complete</h3>
        <p>
            <?php
            echo "Hello " . $fname . " " . $lname . " We will send Congratulations to your given email address "
                . $email . " on your BirthDay at " . $bday . " <br> Have a Great Day!... ";
            ?>
        </p>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>