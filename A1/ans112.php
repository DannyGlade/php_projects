<?php

echo "<h1>Ans 112</h1>";

echo "<center><strong>";
?>
<?php
echo "<br><br>Numeric Array";
$Pokemon = array("Pikachu", "Charmender", "Dragonite");
echo "<br>I would like to catch " . $Pokemon[0] . ", " . $Pokemon[1] . " and " . $Pokemon[2] . ".";
?>
<?php
echo "<br><br>Associate Array";
$age = array("Darshan"=>"19", "Raj"=>"18", "Gaurav"=>"17");
echo "<br>Darshan is " . $age['Darshan'] . " years old.";
?>
<?php
echo "<br><br>MultiDimentional Array";
$cars = array
  (
  array("TATA",22,18),
  array("TESLA",15,13),

  );
echo "<br>".$cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".\n";
echo "<br>".$cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".\n";
?>
<?php
echo "</center></strong>";
?>
<style>
    h1{
        text-align: center;
        font-family: 'Franklin Gothic', 'Arial Narrow', Arial, sans-serif;
    }
</style>