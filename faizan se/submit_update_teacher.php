<?php include 'php_conec.php'?>
<?php
$teacherID=$_POST['teacherID'];
      $user=$_POST['userID']; 
$fullName= $_POST['fullName'];
$gender=$_POST['gender'];
$dob=$_POST['dateOfBirth'];
$userName=$_POST['username'];
$pswd=$_POST['password'];
$prefer=$_POST['preferSubject']; 
     $experience=$_POST['experienceYears'];
$email=$_POST['email'];
$phone=$_POST['contactNumber'];
$qualification=$_POST['lastQualification'];
$sql="UPDATE login SET UserName='$userName',Password='$pswd',UserType='teacher' WHERE UserID='$user'";
mysqli_query($conn, $sql);
$sql="UPDATE teacher SET FullName='$fullName',DateOfBirth='$dob',Gender='$gender',PreferSubject	='$prefer',ContactNumber='$phone', Email='$email',ExperienceYears='$experience',LastQualification='$qualification'  WHERE TeacherID='$teacherID' ";
$result=mysqli_query($conn, $sql);
if($result){
        echo "Table updated successfully. ";
} else{
    echo "No rows found or Error updating table: ". mysqli_error($conn);
}
mysqli_close($conn);
?>
<!--Done!-->