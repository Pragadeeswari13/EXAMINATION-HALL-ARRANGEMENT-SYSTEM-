<?php
session_start();
$uname=$_SESSION['uname'];
if($_SESSION['uname']=="")
{
header("location:index.php");
}

?>