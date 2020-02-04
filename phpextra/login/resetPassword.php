<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>
    <?php include 'heading.html'; ?>
    <div class="logincontent">
      <div class="login">

    <form class="form loginform"action="" method="post">
      Enter your new password :-
      <input type="password" name="pass1" value="" placeholder="enter your password">
      <input type="password" name="pass2" value="" placeholder="re-enter your pasword">
      <input type="submit" name="upload" value="Submit">


<?php
session_start();
include 'mysql.php';
if (isset($_POST["upload"]))
{
  $pass1=$_POST['pass1'];
  $pass2=$_POST['pass2'];
  if ($pass1==$pass2)
  {
    $updatePasword="UPDATE loginuser SET password =\"".$pass1."\" where email = \"".$_SESSION['email']."\"";
    if (mysqli_query($conn, $updatePasword))
     echo "Password updated successfully";
    else
     echo "Error updating record: " . mysqli_error($conn);

  }
  else {
  echo "Password mismatch !";
  }
}

 ?>
</form>
</div>
</div>
</body>
</html>
