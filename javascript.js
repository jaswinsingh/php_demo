function checkmail()
{
  //used to check email syntax
  mail= document.getElementById("mail").value;
  var pattern =/^([a-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,5})([\.a-z]{2,5})?$/;
  if (!(pattern.test(mail)))
    alert("enter valid email");
}

function concat()
{
    // used to concat first name and last name in full name
    var first=document.getElementById("fName").value;
    var last=document.getElementById("lName").value;
    document.getElementById("full").value=first.concat(" ",last);
}

/*function checkalpha(inputtxt)
{
  //used to check the value is alphabet in First Name and Last Name
    var letters = /^[a-zA-Z]*$/;
    // var inputtxt =document.getElementById("fName");
    var valid= letters.test(inputtxt.value);
    if(!(valid))
    { alert("hello");
      inputtxt.classList.add("ivalid");
      inputtxt.classList.remove("valid");
    }
    else
    {
        alert("hello");
        inputtxt.classList.add("valid");
        inputtxt.classList.remove("ivalid");
      }

}*/

function addCountryCode()
{
  //USED TO APPEND +91 IN PHONE NUMBER
  var tel= document.getElementById('pno');
  tel.value="+91"+tel.value;
}
