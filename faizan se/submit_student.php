<?php include 'php_conec.php'?>
<?php
session_start();
$fullName=$_POST['full_name'];
$birth=$_POST['date_of_birth'];
$gender= $_POST['gender'];
$address= $_POST['address'];
$contactNumber=$_POST['phone'];
$email=$_POST['email'];
$guardianName=$_POST['guardian_name'];
  $guardianContact=$_POST['guardian_contact'];
$classID=$_POST['classID'];
$admissionDate=$_POST['admission_date'];
$uname=$_POST['username'];
$pswd=$_POST['password'];  
$sql="INSERT INTO login(UserName,Password,UserType) VALUES('$uname','$pswd','student')";
mysqli_query($conn,$sql);
$sql="INSERT INTO student (FullName,DateOfBirth,Gender,Address,ContactNumber,Email,GuardianName,GuardianContact,ClassID,AdmissionDate)
     VALUES ('$fullName', '$birth','$gender','$address','$contactNumber','$email','$guardianName','$guardianContact','$classID','$admissionDate')";
if (mysqli_query($conn,$sql)) {
  echo '<h1 style="text-align: center; font-size:48px;">'."Registeration Successfully ".'</h1>';
  exit;
} else {
  echo "Registeration Failure for user: ".$fullName;
  exit;
}
mysqli_close($conn);
?>
<!--Done!-->