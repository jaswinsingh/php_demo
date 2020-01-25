<?php session_start(); /* Starts the session */
if(!isset($_SESSION['Username']))
{
header("location:login.php");
exit;
}
?>

Congratulation! You have logged into password protected page. <a href="logout.php">Click here</a> to Logout
