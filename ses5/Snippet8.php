<?php
$num2 = 0;
echo "the multiplication  15*24 is <br>";
function multiply(){
    $num1=15;
    $num2=24;
    $num2= $num1*$num2;
    echo $num2;
}
multiply();
echo "<br>";
echo "The value of the local varriable on exiting the function is <br>";
echo $num2;
?>