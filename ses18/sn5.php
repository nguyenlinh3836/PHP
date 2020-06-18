<?php
$result = mysqli_query($connect_mysql,"select * from Employee");
while ($rows = mysqli_fetch_row($result)){
    printf("%s(%s)\n",$rows[0],$rows[1]);
}
?>