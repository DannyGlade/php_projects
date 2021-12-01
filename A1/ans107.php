<?php

function findfacto($l){
    $fact = 1;
    for($i = 1 ; $i <= $l ; $i++ ){
        echo "".$i." * ";
        $fact *= $i;
    }

    echo "<br>Factorial of ".$l." is ".$fact;
}

echo "<h1>Ans 107</h1>";

echo "<center><strong>";

?>
<form action="#" method="post">
    <label for="val">Enter the value Of Factorial You Want: </label>
    <input type="number" name="val" id="val">
</form>
<?php

if(isset($_POST['val'])){
    $n = $_POST['val'];

    findfacto($n);
}
echo "</center></strong>";
?>
<style>
    h1{
        text-align: center;
        font-family: 'Franklin Gothic', 'Arial Narrow', Arial, sans-serif;
    }
</style>