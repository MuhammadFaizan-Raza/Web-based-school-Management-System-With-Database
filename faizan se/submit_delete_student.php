    <?php include 'php_conec.php'?>
<?php
session_start();
$Id= $_POST['student-id'];
$fullName=$_POST['fullName'];
$sql="DELETE FROM student where StudentID='$Id' AND  FullName='$fullName'";
if(mysqli_query($conn,$sql) ){
    echo "successfully deleted !!";
    exit;}
else{
    echo "Operation Fail!!";
    exit;}
    mysqli_close();
?>
<!--done!-->
