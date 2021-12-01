<?php
function eveorodd($n){
    if($n == 0){
        echo "<br>".$n." is Zero";
    }
    elseif($n%2 == 0){
        echo "<br>".$n." is Even";
    }else{
        echo "<br>".$n." is Odd";
    }
    
}
echo "<h1>Ans 108</h1>";

echo "<center><strong>";
?>
<form action="#" method="post">
    <label for="val">Enter the value You Want to Check: </label>
    <input type="number" name="val" id="val">
</form>
<?php
if(isset($_POST['val'])){
    $n = $_POST['val'];

    eveorodd($n);
}
echo "</center></strong>";
?>
<style>
    h1{
        text-align: center;
        font-family: 'Franklin Gothic', 'Arial Narrow', Arial, sans-serif;
    }
</style>