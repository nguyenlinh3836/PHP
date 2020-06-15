<?php
$sal = $_GET['sal'];
echo "Salary before bonus: $";
echo $sal."<br>";
if($sal > 850)
{
    $bonus = $sal * .1;
    echo "Bonus : $$bonus"."<br>";
    $sal= $sal + $bonus;
    echo "Total salary : $$sal";
}

?>
