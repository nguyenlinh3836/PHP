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
$mysql_db=mysqli_select_db($connect_mysql,"USER");
if ($mysql_db){
    echo "<BR><BR> connected to the database";
}
else{
    die("unable the connected to the database");
}
$sql_disp= ("SELECT * FROM USER_CONTACT;");
echo "<BR><BR> records from the USER_CONTACT: <BR>";
$result = mysqli_query($connect_mysql,$sql_disp);
while ($rows = sqlite_fetch_array($result)){
    echo "$rows[USER_ID]";
    echo "$rows[USER_NAME]";
    echo "$rows[USER_EMAIL_ID]<BR>";
}
?>