<?php
function makeconnection()
{
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'bloodbank';

$cn = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
    if(!$cn){
        die("Database connection failed: " . mysqli_connect_error());
    }
  return $cn;
}

?>