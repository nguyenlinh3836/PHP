<?php

$server = "127.0.0.1";
$username = "root";
$password = "";
$connect = mysqli_connect("$server", $username, $password,'USER');
if ($connect_mysql) {
    echo "the connection <br>";
} else {
    die("unable the connect <br>");
}
$db="user";
$mysql_db=mysqli_select_db($connect_mysql,$db);
if ($mysql_db){
echo "<BR><BR> connected to the database";
}
else{
    die("unable the connected to the database");
}
$sql_insert =" INSERT TO user_contact(user_id,user_name,user_email_id)values(101,'du','dotrongdu@gmail')";
$result= mysqli_query($connect_mysql,$sql_insert);
if ($result){

    echo "<BR><BR> the recond have beens added to the table";
}
else{
    echo "unable to insert records";
    mysqli_error();
}
?>