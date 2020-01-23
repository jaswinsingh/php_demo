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
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,700&display=swap" rel="stylesheet">
    <title></title>
  </head>
  <body>
      <a class="link logout" href="logout.php">logout</a>
    <form name="form1" method="post" action="p2.php" class="form" enctype="multipart/form-data">
      <label>Select an image to  upload</label>
      <input type="file" name="file" required>
      <input type="submit" name="upload">

    </form>
    <div class="pagination">
      <a href="q1.php">1</a>
      <a href="q2.php">2</a>
      <a href="q3.php">3</a>
      <a href="q4.php">4</a>
      <a href="q5.php">5</a>
      <a href="q6.php">6</a>
    </div>
  </body>
</html>
