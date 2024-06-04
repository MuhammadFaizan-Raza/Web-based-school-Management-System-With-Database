<?php
$fullname=$_POST['fullname'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$subject=$_POST['subject'];
$experience=$_POST['experience'];
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$qualification=$_POST['qualification'];
$usertype='teacher';
$dbname="school_db";
$con=new mysqli("localhost", "root", "", $dbname) or die('Unable to connect to the database');
mysqli_select_db($con, $dbname) or die('Cannot select database');
$sql="INSERT INTO login (Username, Password,UserType) VALUES('$username', '$password','$usertype')";
mysqli_query($con, $sql);
$sql="INSERT INTO teacher (FullName, Gender, DateOfBirth, PreferSubject, ExperienceYears, Email, ContactNumber, LastQualification)
        VALUES ('$fullname', '$gender', '$dob', '$subject', $experience, '$email', '$contact', '$qualification')";
if (mysqli_query($con, $sql)) {
        echo "Data inserted successfully.";
} else {
echo "Error inserting data: " . mysqli_error($con);
}
mysqli_close($con);
?>
<!--Done!-->