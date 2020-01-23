<?php
session_start();
if (!isset($_SESSION["login"]) || $_SESSION["login"] !== true) {
header("Location: login.php");
exit;
}
 ?>

<html>
<body>


Hello <?php echo $_POST["fName"]," ",$_POST["lName"];
$_SESSION['fname']=$_POST["fName"];
$_SESSION['lname']=$_POST["lName"];

 ?>
</body>
</html>
