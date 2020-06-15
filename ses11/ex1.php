<?php
$A = $_GET['n1text'];
$B = $_GET['n2text'];
if($A>0 && $A <= 250 && $B == 1){
    $C = $A*5/100 + $A;
    echo "your point is $C";
    }
elseif ($A>0 && $A <= 250 && $B == 2)
{
    $C = $A*10/100+ $A;
    echo "your point is $C";
}
elseif ($A>=251 && $A<500 && $B == 1 ){
    $C = $A*7.5/100 + $A;
    echo "your point is $C";
}
elseif ($A>=251 && $A<500 && $B == 2){
    $C = $A*12.5/100;
    echo "your point is $C";
}
elseif ($A>=501 && $A<=750 && $B == 1){
    $C = $A*10/100 + $A;
    echo "your point is $C";
}
elseif ($A>=501 && $A<=750 && $B == 2){
    $C = $A*15/100 + $A;
    echo "your point is $C";
}
elseif ($A >=751 && $A<=1000 && $B == 1 ){
    $C = $A*12.5/100 + $A;
    echo "your point is $C";
}elseif ($A >=751 && $A<=1000 && $B == 2 ){
    $C = $A*17.5/100 + $A;
    echo "your point is $C";
}
?>
