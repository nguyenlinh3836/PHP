<?php
require_once 'login.php';
$conn = new mysqli($hn,$un,$pw,$db);
if ($conn -> connect_errno) die("Erorr");

$query = "SELECT * FROM customers";
$result = $conn -> query($query);
if(!$result) die("Fatal error");

$row = $result -> num_rows;
for ($i =0; $i < $row; $i++)
{
    $rows = $result -> fetch_array(MYSQLI_ASSOC);

    echo 'NAME'. $rows['name']. '<br>';
    echo 'ISBN'. $rows['isbn']. '<br>';
}
