
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <form class="" action="" method="post">
       <label>Enter Username</label>
       <input type="text" name="username" value="" placeholder="USERNAME">
       <label>Enter Password</label>
       <input type="password" name="password" value="" placeholder="PASSWORD">
       <input type="text" name="" value="">
       <input type="submit" name="upload" value="Login">
       <a href="forgot.php">Forgot password</a>
     </form>
   </body>
   </html>
   <?php
   include 'mysql.php';
   if (isset($_POST['upload'] )) {
     $user=$_POST["username"];
     $password=$_POST["password"];

     $checkuser='select userid as user from loginuser where password ="'.$password.'"';
     $result = mysqli_query($conn, $checkuser);
     $row= mysqli_fetch_assoc($result);
     if($user==$row['user'])
     echo "welcome ".$user;
     else {
       echo "sorry try again";
     }
   }

    ?>
