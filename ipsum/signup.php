
<!DOCTYPE html>
<html>
<head>

<title >SIGNUP</title>
</head>
<body style="background-image:url('signup.jpg');background-size:cover;
  background-repeat:none;">
<form name="myForm" method='post' action='senior1.php'>
<fieldset>
<legend style="text-align: center">LOGIN</legend>
<pre>
  <p style='font-size: 0.5cm;text-align: center;color:white'>You are just one step away from getting started! Sign up now!</p>
<input type="text" style="position:relative;left:35%;width: 10cm; height: 1cm"name="fname"placeholder="First Name" id="a1" required><br>
<input type="text" style="position:relative;left:35%;width: 10cm; height: 1cm"name="lname"placeholder="Last Name" id="a2" required><br>

<input type="number" placeholder="Mobile Number" style="position:relative;left:35%;width: 10cm; height: 1cm"name="mn" id="b" required></input><br>
<p id='e2'style="position:relative;left:35%;color: white"></p>
<input type="email" placeholder="email" style="position:relative;left:35%;width: 10cm; height: 1cm"name="em" id="c" required><br>
<p id='e3'style="position:relative;left:35%;color: white"></p>
<input placeholder="Password" type="password"style="position:relative;left:35%;width: 10cm; height: 1cm" name="pass" id="d" required></input><br>
<p id='e4' style="position:relative;left:35%;color:white"></p>
<input type="password" name="cpass" placeholder="Confirm Password" style="position:relative;left:35%;width: 10cm; height: 1cm" id="e" required><br><br>
<p id='e5'style="position:relative;left:35%;color:white"></p>
<input type="button" name="sub" style="position:relative;left:35%;width: 10cm; height: 1cm" value='SIGN UP' onclick='val()' id='button'>
</pre>
</fieldset>
</form>
<form>

<p style="font-size:0.5cm;text-align: center;color:white">Already a member? Click the login button!</p>
<button style="position:relative;left:35%;width: 10cm; height: 1cm"><a href='login.php'>LOGIN</a></button>
</fieldset>
</form>
<script>
function val()
{
  var flag1=0;
  var flag2=0;
  var flag3=0;
  var a1=document.getElementById('a1').value;
  var a2=document.getElementById('a2').value;
  var b=document.getElementById("b").value;
var c=document.getElementById("c").value;
var d=document.getElementById("d").value;
var e=document.getElementById('e').value;
if(b<10)
{
  document.getElementById('e2').innerHTML="enter a valid mobile no";
  flag1=1;

}
else
{
    document.getElementById('e3').innerHTML="";
    flag1=0;

}
if(d.length<6)
{
  document.getElementById('e4').innerHTML="password should contain minimum 6 characters"; 
  flag2=1;
}
else
{
  document.getElementById('e4').innerHTML="";
  flag2=0;
}
if(d!=e)
{
document.getElementById('e5').innerHTML="password and confirm password are not same";
flag3=1;
}
else
{
  document.getElementById('e5').innerHTML="";
  flag3=0;
}
if((flag1==0) && (flag2==0) && (flag3==0))
{
  document.getElementById('button').type='submit';
 }
}
</script>  
</body>

</form>




