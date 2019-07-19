<?php
session_start();
include("loginfunction.php"); //Establishing connection with our database
 
$error = ""; //Variable for storing our errors.
if(isset($_POST["submt"]))
{
if(empty($_POST["t1"]) || empty($_POST["t2"]))
{
$error = "Both fields are required.";
}else
{
// Define $username and $password
$adm_user=$_POST['t1'];
$password=$_POST['t2'];
 
 
//Check username and password from database
$sql="SELECT *FROM users WHERE username='$adm_user' and pwd='$password'";
$result=mysqli_query($db,$sql);
$feed=mysqli_num_rows($result);
$data=mysqli_fetch_array($result);
    
mysqli_close($db);
 
//If username and password exist in our database then create a session.
//Otherwise echo error.
 
if($feed>0)
{
$_SESSION["username"] = $adm_user;
$_SESSION["usertype"] = $data[2];// Initializing Session
    
header("location:index.php"); // Redirecting To Other Page
}else
{
$error = "Incorrect email or password.";
}
 
}
}
 
?>
