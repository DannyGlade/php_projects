<?php
error_reporting(0);
echo "<h1>Ans 105</h1>";

echo "<center><strong>";
?>
<form method="post">
    <label for="A">Enter Value Of A: </label>
    <input type="text" name="A" id="A">
    <br>
    <label for="B">Enter Value Of B: </label>
    <input type="text" name="B" id="B">

    <p>1.Addition 2.Substraction 3.Multiplication 4.Division</p>

    <label for="option">Choose Your Option: </label>
    <select name="option" id="opt">
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
        <option value=4>4</option>
    </select>
    <br>
    <input type="submit" name="sub" value="Calculate">

</form>
<?php

$a = intval($_POST['A']);
$b = intval($_POST['B']);

$d = intval($_POST['option']);

if(isset($_POST['sub'])){
switch ($d) {
    case 1:
        $c = $a + $b;
        echo $c;
        break;

    case 2:
        $c = $a - $b;
        echo $c;
        break;

    case 3:
        $c = $a * $b;
        echo $c;
        break;

    case 4:
        $c = $a / $b;
        echo $c;
        break;
    default:
        echo "enter Valid Input";
        break;
    }
}
echo "</center></strong>";
?>
<style>
    h1{
        text-align: center;
        font-family: 'Franklin Gothic', 'Arial Narrow', Arial, sans-serif;
    }
</style>