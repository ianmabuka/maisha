<?php
session_start();
include("function.php"); //Establishing connection with our database
 
$error = ""; //Variable for storing our errors.
if(isset($_POST["submt"]))
{
if(empty($_POST["t1"]) || empty($_POST["t2"]))
{
$error = "Both fields are required.";
}else
{
// Define $username and $password
$email=$_POST['t1'];
$password=$_POST['t2'];
 
 
//Check username and password from database
$sql="SELECT *FROM donarregistration WHERE email='$email' and pwd='$password'";
$result=mysqli_query($db,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
 
//If username and password exist in our database then create a session.
//Otherwise echo error.
 
if(mysqli_num_rows($result) ==1)
{
$_SESSION['email'] = $login_user;
$_SESSION["email"] = $email;// Initializing Session
    
header("location:home.php"); // Redirecting To Other Page
}else
{
$error = "Incorrect email or password.";
}
 
}
}
 
?>
