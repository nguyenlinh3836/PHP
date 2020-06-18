<?php
$db_name = 'mysql';
if (!mysqli_connect('127.0.0.1','root','')){
    echo "could not connect to mysql";
    exit();
}
$sql = "show table from $db_name";
$connect_mysql=mysqli_connect('127.0.0.1','root','');
$result=mysqli_query($connect_mysql,$sql);
if(!$result)
    $result=mysqli_query($sql);
    echo "the table from database: <br>";
    if ($result){
     echo"DB error<br>";
     echo 'my sql error: '. mysqli_error();
     exit();
    }
    while($rows = mysqli_fetch_row($result)){
echo "table: {$rows[0]}<br>";
    }
    ?>