<?php
$connect = mysqli_connect("127.0.0.1","root","");
if ($result = mysqli_query($connect,"select * from Employee"))
{
    $rows = mysqli_affected_rows($result);
echo "the table contain: $rows rows.<br>";
}
?>