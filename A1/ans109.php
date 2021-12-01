<?php
function chkprime($n){
    $count = 0;
    for( $i = 1 ; $i <= $n ; $i++ ){
        if( $n%$i == 0 ){
            $count++;
        }
    }
    if($count == 2 ){
        echo "<br>".$n." is a Prime Number.";
    }
    else{
        echo "<br>".$n." is Not a Prime Number.";
    }
}
echo "<h1>Ans 109</h1>";

echo "<center><strong>";
?>
<form action="#" method="post">
    <label for="val">Enter the value You Want to Check for Prime Number: </label>
    <input type="number" name="val" id="val">
</form>
<?php
if(isset($_POST['val'])){
    $n = $_POST['val'];

    chkprime($n);
}
echo "</center></strong>";
?>
<style>
    h1{
        text-align: center;
        font-family: 'Franklin Gothic', 'Arial Narrow', Arial, sans-serif;
    }
</style>