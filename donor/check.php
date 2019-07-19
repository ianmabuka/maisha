<?php
include('function.php');
session_start();
$user_check=$_SESSION['email'];
 
$sql = mysqli_query($db,"SELECT email FROM donarregistration WHERE email='$user_check' ");
 
$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);
 
$login_user=$row['email'];
 
if(!isset($user_check))
{
header("Location:index.php");
}
?>