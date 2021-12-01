<?php

echo "<h1>Ans 103</h1>";

function bicoeff($n , $k){
    $res = 1;

    if ($k > $n - $k) {
        $k = $n - $k;
    }
    for ($i=0; $i < $k ; ++$i) { 
        $res *= ($n - $i);
        $res /= ($i + 1) ;
    }

    return $res;
}

function pascalT($n){

    for ($l=0; $l < $n ; $l++) { 
        
        for ($i=0; $i <= $l ; $i++) { 
            echo "".bicoeff($l , $i)." ";
        }
        echo "<br>";
    }
}

$n = 10;
echo "<center><strong>";
pascalT($n);
echo "</center></strong>";

?>
<style>
    h1{
        text-align: center;
        font-family: 'Franklin Gothic', 'Arial Narrow', Arial, sans-serif;
    }
</style>