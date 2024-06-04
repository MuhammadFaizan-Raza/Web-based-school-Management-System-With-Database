<?php
if (!empty($_POST['present'])) {
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'school_db';
    $con = mysqli_connect('localhost', $db_user, $db_pass, $db_name);
    if (!$con) {
        die('Unable to connect to the database');
    }
    $attendance = $_POST['present'];
    foreach ($attendance as $rollno) {
        $sql = "INSERT INTO attendance (StudentID) VALUES ('$rollno')";
        $result = mysqli_query($con, $sql);
        if (!$result) {
            echo "Operation Failure, please try again";
            exit;
        }
    }
    echo "Attendance saved successfully";
} else {
    echo '<p style="color: #00ABE4; text-align:center; font-size:48px;">Attendance data received!!</p>';
}
?>
