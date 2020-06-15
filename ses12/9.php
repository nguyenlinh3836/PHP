<?php
$counter =0;
while ($counter<5){
    $counter++;
    if($counter==3)
    {
        echo "Continue the loop<br>";
        continue;
    }
    echo "$counter<br>";
}
echo "The loop ends here";
?>
