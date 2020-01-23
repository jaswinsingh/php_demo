<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style media="screen">
    /* styling of content */
      table, tr, td,th{
        border: 2px solid black;
         border-collapse: collapse;
         padding: 5px;
         margin:30px;
      }
      img{
        height: 300px;
        width: 300px;
        display: block;
         margin:30px;
      }
    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php

if (isset($_POST[upload]))
{
  // USED TO DISPLAY IMAGE FROM SERVER
  $file_name = $_FILES['file']['name'];
  $file_type = $_FILES['file']['type'];
  $file_size = $_FILES['file']['size'];
  $file_tem_loc = $_FILES['file']['tmp_name'];
  $file_store = "upload/".$file_name;
  move_uploaded_file($file_tem_loc,$file_store);
  echo "<img src =".$file_store.">";
  echo "Hello ".$_POST["fName"]," ",$_POST["lName"];
}
// DISPLAY SUBJECT MARKS IN FORM OF TABLE
if ($_POST['comments']!="")
{
$x=$_POST['comments'];
$x=preg_replace('/[\r\n]+/', "\n", $x); //REGULAR EXPRESSION USED TO ELIMINATE EXTRA LINE BREAK
$ids = explode("\n",$x);//DIVINDING INPUT STRING INTO ARRAY
$ids2=array();
foreach ($ids as $dat)
  {
    $ids2[] = explode("|", $dat);//DIVINDING INPUT STRING INTO 2D ARRAY
  }
$arrayLength = count($ids2);
echo "<table>";
echo "<tr> <th>Subjects</th><th>Marks</th><tr>";
for ($i = 0; $i < $arrayLength; $i++) //DISPLAY ARRAY IN HTML TABLE FORM
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
 echo nl2br("\r\nphone no  ".$_POST["phone"]);


   if (isset($_POST[upload]))
  {
    $access_key = '8a06741ebfab93a994bdcaa59eebc248';

    // getting email address email
    $email_address = $_POST['email'];
    // Initialize CURL:
    $ch = curl_init('http://apilayer.net/api/check?access_key='.$access_key.'&email='.$email_address.'');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // Store the data:
    $json = curl_exec($ch);
    curl_close($ch);
    // echo var_dump($json);

    $validationResult = json_decode($json, true);

    if (($validationResult['format_valid']) && ($validationResult['smtp_check']) && ($validationResult['score'])>0.5)
    {
      echo nl2br("\n Welcome ".$_POST["email"]);
    }
    else
    {
      echo nl2br("\n Hello spam");
     }

  }
  ?>
