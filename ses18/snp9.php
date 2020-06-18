<?php
$server = "";
$username = "root";
$password = "";
$connect = mysqli_connect("$server", $username, $password);
if ($connect_mysql) {
    echo "the connection <br>";
} else {
    die("unable the connect <br>");
}
$mysql_db = mysqli_select_db($connect_mysql, "USER");
if ($mysql_db) {
    echo "<BR><BR> connected to the database";
} else {
    die("unable the connected to the database");
}
$sql_delete=("DELATE FROM USER_CONTACT WHERE USER_ID = '101'");
$result = mysqli_query($connect_mysql,$sql_delete);
if ($result){
    echo "delete: $result<br>";
}
else{
    echo "records not found";
    printf("error message: %s\n",mysqli_error($connect_mysql));
}
?>