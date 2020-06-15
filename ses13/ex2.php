<?php
$A = $_GET['n1text'];
if ($A >= 20 && $A <=65 ){
    echo "Adult";
}
elseif ($A >=13 && $A<=16){
    echo "tennager";
} elseif ($A>65){
    echo "Senior";
}
?>
