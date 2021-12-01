<?php

function findlnt($str){
    $len =  str_word_count($str);

    echo "<br> Length of Given String \"".$str."\" is ".$len;
}

echo "<h1>Ans 201</h1>";

echo "<center><strong>";
?>
<form action="#" method="post">
    <label for="val">Enter the Sentence Want: </label>
    <input type="text" name="txt" id="txt">
</form>
<?php

if(isset($_POST['txt'])){
    $str = $_POST['txt'];

    findlnt($str);
}

echo "</center></strong>";
?>
<style>
    h1{
        text-align: center;
        font-family: 'Franklin Gothic', 'Arial Narrow', Arial, sans-serif;
    }
</style>