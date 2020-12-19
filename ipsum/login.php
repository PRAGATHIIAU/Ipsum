<?php session_start()?>
<!DOCTYPE html>
<html>
<head>

<title>Login</title>
</head>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="login.css">
<title>Login</title>
</head>
<body>
<form method="POST">
<fieldset>
<pre>
<img src="user.png" height="50px" width="50px" ><input type="text" placeholder="EMAIL" name="em" id="c" style="height:43px;width:8cm;" required><br><br><br><br>
<img src="lock.png" height="50px" width="55px" ><input placeholder="PASSWORD" type="PASSWORD" name="pass" id="d" style="height:43px;width:8cm;" required></input><br><br>
      <button type="submit" class="b">LOGIN</button>
</pre>
</fieldset>
</form>
 
</body>


<?php
if (isset($_POST['em'])){
$email=$_POST['em'];}
if (isset($_POST['pass'])){
$password=$_POST['pass'];}
$flag=0;

$dbhost="localhost";
$dbusername="root";
$dbpassword="";
$dbname="project";
$link=mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname);
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else
{
	echo "<p>Connected successfully.   </p>";
}

if (isset($_POST['em'])){
    $sql = "SELECT * from registration where em='$email'";
}
if(isset($_POST['em'])){
    $h=mysqli_query($link, $sql);
$file = mysqli_fetch_assoc($h);
if ($file) {
     if($file['pass']==$password)
     {
     	$_SESSION['name']=$file['fn'];
     	echo "<script type='text/javascript'>location.replace('loggedhome.php')</script>";
     	echo "ji";
     }
     else
     	{ 
     		echo "password mismatch";
     		echo $file['pass'];

     	}
    }
else {
    echo mysqli_error($link);
}
}

?>

</fieldset>
</form>
<script>
</script>  
</body>

</form>

