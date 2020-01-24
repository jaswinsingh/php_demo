
 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if (isset($_POST["phone"])) {
      // code...

     echo "phone no  ".$_POST["phone"];
     $_SESSION['phn']=$_POST["phone"];
   }
  ?>
</body>
</html>
