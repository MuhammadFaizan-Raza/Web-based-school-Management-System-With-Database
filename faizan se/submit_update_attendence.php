<?php
    include 'php_conec.php';
    $attendanceID=$_POST["attendanceID"];
    $studentID=$_POST["studentID"];
$classID=$_POST["classID"];
$attendanceDate=$_POST["attendanceDate"];
$attendanceStatus=$_POST["attendanceStatus"];
$sql="UPDATE attendance SET AttendanceDate='$attendanceDate',AttendanceStatus='$attendanceStatus'  WHERE AttendanceID='$attendanceID' AND StudentID='$studentID' AND ClassID='$classID'";
    if (mysqli_query($conn, $sql)) {
        echo "Attendance updated successfully";
}else {
        echo "Error updating attendance: " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>
<!--done!-->
 