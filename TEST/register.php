<?php
$hn = '127.0.0.1';
$un = 'root';
$pw = '';
$db = 'databaseacc';
$connection = new mysqli($hn,$un,$pw,$db);
if($connection->connect_errno)die("Fatal Error");
echo '
      <h3>Register form</h3>
      <pre>
      <form method = post action="register.php">
      <input type = "text" name = "fullname" placeholder="Full name"><br>
      <input type = "email" name = "email" placeholder="Email"><br>
      <input type = "text" name = "username" placeholder="Username"><br>
      <input type = "password" name = "password" placeholder="Password"><br>
      <input type = "submit" name = "submit" placeholder="Register"><br>
</pre>';

if(isset($_POST['submit'])){
    $fn = mysqli_real_escape_string($connection, $_POST['fullname']);
    $em = mysqli_real_escape_string($connection, $_POST['email']);
    $un = mysqli_real_escape_string($connection, $_POST['username']);
    $pw = hash('sha512', $_POST['password']);
    $query = "INSERT INTO users (fullname,email,username,password) VALUE" . "('$fn','$em','$un','$pw')";
    $result=$connection->query($query);
    setcookie("user",$un,$fn);
}





















