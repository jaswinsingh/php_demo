
<html>
<body>

 <?php
  if (isset($_POST["fName"])&&isset($_POST["lName"])) {
echo "Hello ".$_POST["fName"]," ",$_POST["lName"];
$_SESSION['fname']=$_POST["fName"];
$_SESSION['lname']=$_POST["lName"];
}


 ?>
</body>
</html>
