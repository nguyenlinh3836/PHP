<?php
$server ="127.0.0.1";
$username="root";
$password="";
$connect = mysqli_connect("$server",$username,$password,'USER');
if ($connect_mysql){
    echo "the connection <br>";
}
else{
    die("unable the connect <br>");
}
$mysql_db=mysqli_select_db("$connect_mysql","USER");
if ($mysql_db){

    echo "connect to the database <br>";
}
$sql_table = "CREATE TABLE USER_CONTACT("."USER_ID INT NOT NULL PRIMARY KEY, "."USER_NAME CHAR(25) NOT NULL , "."USER_EMAIL_ID CHAR(25) NOT NULL ".")";

if (mysqli_query($connect_mysql,$sql_table)){
    echo " table created<br>";
}
else{
    die("unnable created table");
}
?>