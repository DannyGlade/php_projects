<?php

echo "<h1>Ans 102</h1>";
$n= 10;
echo "<center><strong>";
for ($i=0; $i < $n ; $i++) { 
    for ($j=0; $j < $i ; $j++) { 
        echo "*";
    }
    echo "<br>";
}
echo "</center></strong>";

?>
<style>
    h1{
        text-align: center;
        font-family: 'Franklin Gothic', 'Arial Narrow', Arial, sans-serif;
    }
</style>