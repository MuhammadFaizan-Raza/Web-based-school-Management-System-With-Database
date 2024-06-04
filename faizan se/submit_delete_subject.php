<?php
session_start();
include 'php_conec.php';
$Id= $_POST['subject-id'];
$subName=$_POST['subjectName'];
$sql="DELETE FROM subject where SubjectID='$Id' AND  SubjectName='$subName'";
if(mysqli_query($conn,$sql) ){
    echo "successfully deleted !!";
    exit;}
else{
    echo "Operation Fail!!";
    exit;}
    mysqli_close();
?>
<!--done!-->
 

