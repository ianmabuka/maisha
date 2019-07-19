<?php

$_SESSION["username"]="";
$_SESSION["usertype"]="";
$_SESSION['loginstatus']="";
    session_start();
    session_destroy();
    header("location:adminlogin.php");
?>