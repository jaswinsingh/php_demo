<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script type="text/javascript">
    function concat()
    {
        // used to concat first name and last name in full name
        var first=document.getElementById("fName").value;
        var last=document.getElementById("lName").value;
        document.getElementById("full").value=first.concat(" ",last);
    }

    function checkalpha(inputtxt)
    {
      //used to check the value is alphabet in First Name and Last Name
        var letters = /^[a-zA-Z]*$/;
        var valid= !letters.test(inputtxt.value)
        if(valid)
        {
          alert('alphabets only');
        }
    }

    function addCountryCode() {
      //USED TO APPEND +91 IN PHONE NUMBER
      var tel= document.getElementById('pno');
      var phn_pattern=/^\+91[0-9]{10}$/;
      var valid=phn_pattern.test(tel.value)
      if (!valid) {
        alert("invalid format");
        // alert("correct");
      }}

    </script>
    <link rel="stylesheet" href="formstyle.css">
    <title></title>
  </head>
  <body>
    <h2></h2>
    <form name="form1" method="post" action="displayfifth.php" enctype="multipart/form-data">
      First Name - <input id="fName" type="text" name="fName" value="" placeholder="First name" onchange="checkalpha(document.form1.fName) ;"required>
      <br>
      Last Name - <input id="lName" type="text" name="lName" value="" placeholder="Last name" onchange="concat(), checkalpha(document.form1.lName);"required>
      <br>
      Full Name - <input  id="full" type="text" name="fullName" value="" disabled>
      <br>
      <input type="file" name="file" >
      <br>
      <textarea name="comments" rows="8" cols="40"></textarea>
      <br>
      <input type="text" id="pno" name="phone" value="" maxlength="13" placeholder="Enter Ph-no "onchange="addCountryCode()">
      <br>
      <input type="text" id="mail" name="email" value="" placeholder="Enter E-mail" onchange="checkmail()">
      <br>
      <input type="submit" name="upload" value="Submit">
    </form>
  </body>
</html>
