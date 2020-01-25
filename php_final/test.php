<?php
session_start(); 
$user="admin";
$pass="admin";
if (isset($_POST["username"]) && isset($_POST["password"])) {
  if ($_POST["username"] === $user && $_POST["password"] === $pass) {
    $_SESSION["login"] = true;
    header("Location: try.php");
    exit;
    }
        // Wrong login - message
        else {echo "<h1>invalid details<h1>";}
}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="" method="post">
      <input type="text" name="username" value="">
        <input type="text" name="password" value="">
        <input type="submit" name="submit" value="submit">
    </form>

  </body>
</html>
