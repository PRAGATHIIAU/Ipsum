<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'project');
$fn=$_POST['fn'];
$ln=$_POST['ln'];
$regno=$_POST['regno'];
$year=$_POST['year'];
$pass=$_POST['pass'];
$pass1=$_POST['pass1'];
$sem=$_POST['sem'];
$dept=$_POST['dept'];
$em=$_POST['em'];
$s="select * from registration where em='$em';";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1)
{ header("refresh:0.01;url=registerpage.php");
echo '<script>alert("USER ALREADY EXIST")</script>';

}
else if(strlen($pass)<6)
{
	header("refresh:0.01;url=registerpage.php");
echo '<script>alert("PASSWORD SHOULD CONTAIN ATLEAST 6 CHARACTERS")</script>';
}
else if($pass!==$pass1)
{
	header("refresh:0.01;url=registerpage.php");
echo '<script>alert("PASSWORD AND CONFIRM PASSWORD IS NOT SAME")</script>';

}
else
{
$reg="insert into registration(fn,ln,regno,year,pass,sem,dept,em) values('$fn','$ln','$regno',$year,'$pass',$sem,'$dept','$em')";
$h=mysqli_query($con,$reg);
if ($h) {
     $_SESSION['name']=$fn;
     header("location: loggedhome.php");

	     	}
else {
    echo mysqli_error($link);
}
}


?>