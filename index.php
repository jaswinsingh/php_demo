<?php
session_start();
 $user='Admin';
 $password='Admin';
 if ($_POST['Username']==$user && $_POST['Password']==$password) {
         $_SESSION['username']=$user;
         header("location:q1.php");
   }

else {
    header("location:login.php");
}

if (isset($_POST['logout']))
{
  session_destroy();
  header("location:login.php");
}
 ?>
