<?php
session_start();
$user="admin";
$pass="admin";
if (isset($_POST["username"]) && isset($_POST["password"])) {
  if ($_POST["username"] === $user && $_POST["password"] === $pass) {
    $_SESSION["login"] = true;
    header("Location: q1.php");
    exit;
    }
        // Wrong login - message
        // else {echo "<h1>invalid details<h1>";}
}

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,700&display=swap" rel="stylesheet">
    <title></title>
  </head>
  <body>
    <form class="form" action="" method="post">
      <label>Enter Username</label>
      <input type="text" name="username" value="" placeholder="USERNAME">
      <label>Enter Password</label>
      <input type="password" name="password" value="" placeholder="PASSWORD">
      <input type="submit" name="upload" value="Login">
    </form>
  </body>
</html>
