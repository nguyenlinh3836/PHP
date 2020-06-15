<?php

$luongcoban = 4500;
$DA = $luongcoban*0.02;
$HRA = $luongcoban*0.05;
$thue1 = 250;
$thue2 = 500;
$thue3 = 700;

if($luongcoban<5000 and $luongcoban>4000){
        echo "thue = $thue1" . "<br>";
        $lungrong = $luongcoban + $DA + $HRA - $thue1;
}else if($luongcoban<6000 and $luongcoban>5000){
        echo "thue = $thue2" . "<br>";
        $lungrong = $luongcoban + $DA + $HRA - $thue2;
}else if ($luongcoban>6000){
    echo "thue = $thue3"."<br>";
    $lungrong = $luongcoban + $DA + $HRA - $thue3;
}
echo "tro cap quyen so huu $DA"."<br>";
echo "tro cap tien thue nha $HRA"."<br>";
echo "luong rong $lungrong";
?>
