<?php 

$host = "localhost";
$user = "root";
$pass = "";
$name = "banking_system";

$conn = mysqli_connect($host, $user, $pass, $name);

if(!$conn){
    die("Unable to connect to the database due to the following error --> ".mysqli_connect_error());
}

?>
