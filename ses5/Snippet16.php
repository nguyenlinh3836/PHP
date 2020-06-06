<?php
if(isset($_COOKIE['Name']))
{
    $last = $_COOKIE['Name'];
    echo  "welcom back<br> your name is".$last;
}
else{
    echo "welcom to our site";
}
?>