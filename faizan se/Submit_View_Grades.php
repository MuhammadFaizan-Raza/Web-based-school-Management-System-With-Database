<?php
include 'menu_slider_bar.php';
include 'css_VD.php';
include 'php_conec.php';
$grade_id=$_POST['grade_id'];
$subject_id=$_POST['subject_id'];
$student_id=$_POST['student_id'];
$sql="SELECT * FROM grade WHERE GradeID='$grade_id' AND SubjectID='$subject_id' AND StudentID='$student_id'";
$result=mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    echo '<table>';
    echo '<tr><th>Grade ID</th><th>Subject ID</th><th>Student ID</th><th>Grade</th><th>Grade Date</th></tr>';
    
while($row=mysqli_fetch_assoc($result)) {
        echo '<tr>';
       echo '<td>'.$row['GradeID'].'</td>';
         echo '<td>'.$row['SubjectID'].'</td>';
           echo '<td>'.$row['StudentID'].'</td>';
        echo '<td>'.$row['Grade'].'</td>';
          echo '<td>'.$row['GradeDate'].'</td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo "No attendance records found.";
}
mysqli_close($conn);
?>
<!--Done!-->