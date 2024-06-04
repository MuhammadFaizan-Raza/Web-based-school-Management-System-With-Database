<?php include 'php_conec.php'?>
<?php
$studentID=$_POST['studentID'];
$user=$_POST['userID']; 
$fullName= $_POST['fullName'];
$dob=$_POST['date_of_birth'];
   $gender=$_POST['gender'];
$userName=$_POST['username'];
    $pswd=$_POST['password'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$guardian_name=$_POST['guardian_name'];
$guardian_contact=$_POST['guardian_contact'];

$admission_date=$_POST['admission_date'];
$sql="UPDATE login SET UserName='$userName',Password='$pswd', UserType='student' WHERE UserID='$user'";
mysqli_query($conn,$sql);
$sql="UPDATE student SET FullName='$fullName',DateOfBirth='$dob',Gender='$gender',Address	='$address',ContactNumber='$phone',Email='$email',GuardianName='$guardian_name',GuardianContact='$guardian_contact',    AdmissionDate='$admission_date'  WHERE studentID='$studentID' ";
    $result=mysqli_query($conn,$sql);
if ($result && mysqli_affected_rows($conn)>0){
        echo "Table updated successfully. ";
    } 
else{
    echo "No rows found with the given student ID and user ID. Error updating table: ".mysqli_error($conn);
}
mysqli_close($conn);
?>
<!--Done!-->
