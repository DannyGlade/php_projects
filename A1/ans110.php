<?php

function chkarmstrong($N){
    $sN = strval($N);
    $lN = strlen($sN);

    $tN = $N;
    for( $i = 1 ; $i <= $lN ; $i++ ){
        $sA[$i-1] = $tN%10;
        $tN /= 10;
    }
    for( $i = $lN ; $i >= 1 ; $i-- ){
        echo " ".$sA[$i - 1]."<sup>".$lN."</sup> *";
    }

    $tT = 0;
    foreach ($sA as $val) {
        $cube = 1;
        for($i = 1 ; $i <= $lN ; $i++ ){
            $cube *= $val;
        }
        $tT += $cube;
    }
    echo " = ".$tT;

    if($tT == $N){
        echo "<br>".$N." is Armstrong Number.";
    }else{
        echo "<br>".$N." is Not Armstrong Number.";
    }
}
echo "<h1>Ans 110</h1>";

echo "<center><strong>";
?>
<form action="#" method="post">
    <label for="val">Enter the value You Want to Check for Armstrong Number: </label>
    <input type="number" name="val" id="val">
</form>
<?php
if(isset($_POST['val'])){
    $n = $_POST['val'];

    chkarmstrong($n);
}
echo "</center></strong>";
?>
<style>
    h1{
        text-align: center;
        font-family: 'Franklin Gothic', 'Arial Narrow', Arial, sans-serif;
    }
</style>