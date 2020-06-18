
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
$sql_update  = ("UP DATE USER_CONTACT SET USER_NAME = 'david' WHERE USER_ID='102'");
$result=mysqli_query($connect_mysql,$sql_update);
if ($result) {
    echo "records update: $result<br>"
}else{
    echo "unable update to records: <br>";
    printf("error message: %s\n",mysqli_error($connect_mysql));
}
?>