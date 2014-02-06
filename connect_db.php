<?php
// Create connection

$con=mysqli_connect("localhost","user","password","database");
// Check connection
if (mysqli_connect_errno($con)){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


try{
$gbd = new PDO('mysql:host=localhost;dbname=database', 'user', 'password');
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}


?>