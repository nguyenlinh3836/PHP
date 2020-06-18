<?php
$connect = mysqli_connect("127.0.0.1","root","");
$result = mysqli_query($connect_mysql, "Select * from Employee");
$rows = $result->num_rows;
echo "the table contain $rows rows.<br>";
mysqli_close($connect_mysql);
echo "the connection to the database has been closed: <br>";
?>