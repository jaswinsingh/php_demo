
<?php
session_start();
if (!isset($_SESSION["login"]) || $_SESSION["login"] !== true) {
header("Location: login.php");
exit;
}
 ?>
 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

     echo "phone no  ".$_POST["phone"];
     $_SESSION['phn']=$_POST["phone"];
  ?>
</body>
</html>
