<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<div class="text-center">
    <h1>Ans 203 Page_2</h1>
</div>

<?php
$user = $_POST['uname'];
$pass = $_POST['pswd'];

if ($user == "Darshan" and $pass == "1234") {
?>
    <div class="container-fluid card w-25 text-center">
        <div class="card-body">
            <h3>Hello User :
                <?php
                echo $user;
                ?>
            </h3>
        <?php
    } else {
        echo "<h5>Sorry Your Credentials Don't match....</h5>";
    }
        ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>