
<?php
include 'php_conec.php';
$subID=$_POST['subjectID'];
      $subname=$_POST['subjectName']; 
$classid= $_POST['classID'];
$teacherid=$_POST['teacherID'];
$sql="UPDATE subject SET SubjectName='$subname',ClassID='classid',TeacherID='$teacherid' WHERE SubjectID='$subID' "; 
if(mysqli_query($conn, $sql)){
        echo "Table updated successfully!!";
} else{
    echo "No row found or Error updating table: ". mysqli_error($conn);
}
mysqli_close($conn);
?> 
<!--Done!--> 