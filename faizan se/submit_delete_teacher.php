
<?php
session_start();
include 'php_conec.php';
$Id= $_POST['teacherID'];
 $fullName=$_POST['fullName'];
$sql="DELETE FROM teacher where TeacherID='$Id' AND  FullName='$fullName'";
if(mysqli_query($conn,$sql)){
    echo "successfully deleted!! ";
    exit;
} else{
    echo "Operation Fail!!";
     exit;}
     mysqli_close();
?>
 
<!--done!-->
