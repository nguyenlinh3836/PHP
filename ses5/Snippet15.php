<?php
$Month = 86400 + time();
setcookie('Name','jerry',$Month);
echo "the cookie has been set.";
?>