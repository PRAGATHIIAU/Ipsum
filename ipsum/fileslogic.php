
<?php
$i=1;

$department= (isset($_POST['department']) ? $_POST['department'] :NULL);
$name=(isset($_POST['name']) ? $_POST['name'] :NULL);
$semester=(isset($_POST['sem']) ? $_POST['sem'] :NULL);
$subject=(isset($_POST['subject']) ? $_POST['subject'] :NULL);
$scode=(isset($_POST['scode']) ? $_POST['scode'] :NULL);
$teacher=(isset($_POST['teacher']) ? $_POST['teacher'] :NULL);
$date=(isset($_POST['date']) ? $_POST['date'] :NULL);
$conn = mysqli_connect('localhost', 'root', '', 'project');

$files=NULL;

if($name!=NULL)
{
    $sql="SELECT * FROM pdf where name='$name'";
}
else if($teacher!=NULL){
    $sql="SELECT * FROM pdf where teacher='$teacher' and department='$department' and sem=$semester";
}
    
else if($date!=NULL){
    $sql="SELECT * FROM pdf where dat='$date' and department='$department' and sem=$semester";
}
else{
    $sql="SELECT * FROM pdf where department='$department' and sem=$semester and subject='$subject'";
}

$result = mysqli_query($conn, $sql);

if($result){
$files = mysqli_fetch_all($result, MYSQLI_ASSOC);
if (isset($_GET['np'])) {
    $np = $_GET['np'];

    $sl = "SELECT * FROM pdf WHERE np='$np'";
    $specific = mysqli_query($conn, $sl);

    $file = mysqli_fetch_assoc($specific);
    $filepath = 'uploads/' . $file['np'];
if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $file['np']));
        readfile('uploads/' . $file['np']);
        exit;
    }
}
    }
?>






