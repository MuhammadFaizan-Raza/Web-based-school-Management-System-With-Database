<?php include 'php_conec.php';
 $subjectID=$_POST['studentID']; 
    $classid=$_POST['classID'];
$DateOfAttendence=$_POST['attendanceDate'];
$status=$_POST['attendanceStatus'];
$sql="INSERT INTO attendance (StudentID,ClassID,AttendanceDate,AttendanceStatus) VALUES ('$subjectID','$classid','$DateOfAttendence','$status')";
    if (mysqli_query($conn,$sql)) {
        echo "Attendence added successfully!";
    }else {
       echo "Duplicate subjectID or Error: ".$sql."<br>".mysqli_error($conn);
 }
    mysqli_close($conn);
?>
<!--done!-->

