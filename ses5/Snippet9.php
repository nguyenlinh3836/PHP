<?php
$var1=36;
$var2=34;
function multiply(){
    global $var1, $var2;
$var2 = $var1 * $var2;
echo  $var2;
}
echo "The value =  <br>";
multiply();
?>