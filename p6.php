<?php
session_start();
if (!isset($_SESSION["login"]) || $_SESSION["login"] !== true) {
header("Location: login.php");
exit;
}

header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=document_name.doc");
 if (isset($_SESSION['image'])) {
  echo "<img src=".$_SESSION["image"].">".nl2br("\r\n") ;
}

if (isset($_SESSION['fname'])) {
echo "Name :".$_SESSION['fname'],' ',$_SESSION['lname'].nl2br("\r\n");
}

if (isset($_SESSION['marks']))
{
  $ids2=($_SESSION['marks']);
  $Length=count($_SESSION['marks']);
  echo "<table class=\"tab\">";
  echo "<tr> <th>Subjects</th><th>Marks</th><tr>";
  for ($i = 0; $i < $Length; $i++) //DISPLAY ARRAY IN HTML TABLE FORM
   {
     echo "<tr>";
      foreach($ids2[$i] as $value)
      {
        echo "<td>";
        echo $value;
        echo "</td>";
      }
     echo "</tr>";
   }
   echo "</table>";
}


if (isset($_SESSION['phn']))
  echo "Contact-no : ".$_SESSION['phn'].nl2br("\r\n");

if (isset($_SESSION['email']))
  echo "Email : ".$_SESSION['email'].nl2br("\r\n");



 ?>
