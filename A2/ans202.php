<?php

function greetuser($str){   

    echo "<br> Hello There! ... ".$str." Welcome!...";
}

echo "<h1>Ans 202</h1>";

echo "<center><strong>";
?>
<form action="#" method="post">
    <label for="val">Enter Your Name: </label>
    <input type="text" name="txt" id="txt">
</form>
<?php

if(isset($_POST['txt'])){
    $str = $_POST['txt'];

    greetuser($str);
}

echo "</center></strong>";
?>
<style>
    h1{
        text-align: center;
        font-family: 'Franklin Gothic', 'Arial Narrow', Arial, sans-serif;
    }
</style>