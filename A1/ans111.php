<?php
function findmax($a,$b,$c){
    if($a > $b){
        if($a > $c){
            echo "<br> A = ".$a." is Maximum";
        }
    }
    else if($b > $c){
        echo "<br> B = ".$b." is Maximum";
    }
    else{
        echo "<br> C = ".$c." is Maximum";
    }
}
echo "<h1>Ans 111</h1>";

echo "<center><strong>";
?>
<form action="#" method="post">
    <p>Enter Three Values To Find Largest Value</p>
    <label for="valA">Enter the value of A: </label>
    <input type="number" name="valA" id="valA">
    <br>
    <label for="valB">Enter the value of B: </label>
    <input type="number" name="valB" id="valB">
    <br>
    <label for="valC">Enter the value of C: </label>
    <input type="number" name="valC" id="valC">
    <br>
    <input type="submit" value="Find" name="fnd">
</form>
<?php
if(isset($_POST['fnd'])){
    $a = $_POST['valA'];
    $b = $_POST['valB'];
    $c = $_POST['valC'];

    findmax($a,$b,$c);

}
echo "</center></strong>";
?>
<style>
    h1{
        text-align: center;
        font-family: 'Franklin Gothic', 'Arial Narrow', Arial, sans-serif;
    }
</style>