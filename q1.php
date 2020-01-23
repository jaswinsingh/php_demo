<?php
session_start();
if (!isset($_SESSION["login"]) || $_SESSION["login"] != true) {
header("Location: login.php");
exit;
}
 ?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <script src="java.js?v=1"></script>
      <link rel="stylesheet" href="style.css">
      <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,700&display=swap" rel="stylesheet">
      <title></title>
    </head>
    <body>
        <a class="link logout" href="logout.php">logout</a>
      <form name="form1" method="post" action="p1.php" class="form">
        First Name - <input id="fName" type="text" name="fName" value="" placeholder="First name" onkeyup="checkalpha(document.form1.fName),checkerror(document.getElementById('fname')) ;"required>
        <p id="fname" >*Only alphabet allowed</p>

        Last Name - <input id="lName" type="text" name="lName" value="" placeholder="Last name" onchange="concat();" onkeyup="checkalpha(document.form1.lName),checkerror(document.getElementById('lname'));"required>
        <p id="lname">*Only alphabet allowed</p>

        Full Name - <input  id="full" type="text" name="fullName" value="" disabled>


        <input type="submit" name="submit" >

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
