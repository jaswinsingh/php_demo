<?php
include 'session.php';

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css?v=1">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,700&display=swap" rel="stylesheet">
    <title></title>
  </head>
  <body>
      <?php include 'heading.html'; ?>
      <div class="formcontent">
        <div class="form">
    <form name="form1" method="post" action="" class="">
      <p style="width:400px;">Enter the marks in format, English|80. One subject in each line.</p>
      <textarea class="textarea" name="comments" rows="8" cols="40"></textarea>
      <input type="submit" name="upload" >
    </form>
  </div>

<div class="displayPHP">
  <?php include 'p3.php'; ?>
</div>
</div>
<div class="footer">
    <div class="pagination">
      <a href="q1.php">1</a>
      <a href="q2.php">2</a>
      <a href="q3.php">3</a>
      <a href="q4.php">4</a>
      <a href="q5.php">5</a>
      <a href="q6.php">6</a>
    </div>
      </div>
  </body>
</html>
