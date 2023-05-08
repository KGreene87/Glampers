<?php

$host ="Localhost";
$user= 'KGreene';
$password = 'Sesame80';
$database ="Glampers";

// $connect = new mysqli($host, $user, $password, $database);

//if($connect->error)
//  die("Failed to connect with database");

// echo "Database connected";
//$connect->close();

$connect= new mysqli($host, $user, $password, $database);
if (! $connect)
die ("Failed to connect with database");
echo "Database connected";

return $mysqli;
?>

