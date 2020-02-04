<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="" method="post">
      <input type="email" name="email" value="">
      <input type="submit" name="upload" value="Submit">
    </form>


    </body>
    </html>
<?php
include 'mysql.php';
if (isset($_POST["upload"])) {
  $email=$_POST['email'];
  $mailquerry="select question from loginuser where email= '".$email."'";
  $result = mysqli_query($conn, $mailquerry);
  $row= mysqli_fetch_assoc($result);
  echo $row['question'];
}
 ?>
