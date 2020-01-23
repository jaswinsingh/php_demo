<?php
session_start();
if (!isset($_SESSION["login"]) || $_SESSION["login"] !== true) {
header("Location: login.php");
exit;
}

echo var_dump($_SESSION);  ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<img src="" alt="">
    <p>Full name -<?php echo $_SESSION['fname'],' ',$_SESSION['lname'] ?></p>
    <p> <?php echo "<img style=\"height:200px;width:200px;\"  src=".$_SESSION["image"].">" ;?></p>
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
