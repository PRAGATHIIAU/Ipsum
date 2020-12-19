<?php
$department= (isset($_POST['department']) ? $_POST['department'] : '');
$name=(isset($_POST['name']) ? $_POST['name'] : '');
$semester=(isset($_POST['sem']) ? $_POST['sem'] : '');
$subject=(isset($_POST['subject']) ? $_POST['subject'] : '');
$scode=(isset($_POST['scode']) ? $_POST['scode'] : '');
$teacher=(isset($_POST['teacher']) ? $_POST['teacher'] : '');
$date=(isset($_POST['date']) ? $_POST['date'] : '');

$filename=(isset($_FILES['document']['name']) ?$_FILES['document']['name'] : '');
$destination = 'uploads/' . $filename;
$extension = pathinfo($filename, PATHINFO_EXTENSION);
$file =(isset($_FILES['document']['tmp_name']) ?$_FILES['document']['tmp_name'] : '');
$size = (isset($_FILES['document']['size']) ?$_FILES['document']['size']: '');



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
if (move_uploaded_file($file, $destination)) {
	           
$sql = "INSERT INTO pdf(department, name, sem, subject, scode, teacher,dat,np) VALUES('$department','$name',$semester,'$subject','$scode','$teacher','$date','$filename')";
$h=mysqli_query($link, $sql);
if ($h) {
     echo "Uploaded Successfully!";
    }
else {
    echo mysqli_error($link);
}
}
?>