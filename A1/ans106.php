<?php
error_reporting(0);
function findfibbo($l){
    $n1 = 0;
    $n2 = 1;

    echo "".$n1." ".$n2." ";
    for($i = 0 ; $i < $l-2 ; $i++){
        $n3 = $n1 + $n2;
        echo "".$n3." ";
        $n1 = $n2;
        $n2 = $n3;
    }
}
echo "<h1>Ans 106</h1>";

echo "<center><strong>";
?>
<form action="#" method="post">
    <label for="val">Enter the length Of Fibbonacci Series You Want: </label>
    <input type="number" name="val" id="val">
</form>
<?php

if(isset($_POST['val'])){
    $n = $_POST['val'];

    findfibbo($n);
}

echo "</center></strong>";
?>
<style>
    h1{
        text-align: center;
        font-family: 'Franklin Gothic', 'Arial Narrow', Arial, sans-serif;
    }
</style>