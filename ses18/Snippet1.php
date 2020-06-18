<?php
$connect_mysql=mysqli_connect('127.0.0.1','root','z',customers);
$mysqli_db=mysqli_select_db($connect_mysql,"curret");
if (!$mysqli_db){
    die("connect fail");
}
else{
    echo "ok";
}
?>