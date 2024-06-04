<?php
include 'menu_slider_bar.php';
include 'php_conec.php';
$grade_id=$_POST['grade_id'];
    $subject_id=$_POST['subject_id'];
$student_id=$_POST['student_id'];
$grade=$_POST['grade'];
$grade_date=$_POST['grade_date'];
$query="UPDATE grade SET Grade='$grade', GradeDate='$grade_date' WHERE GradeID='$grade_id' AND SubjectID='$subject_id' AND StudentID='$student_id'";
$result=mysqli_query($connection, $query);

if($result) {
    echo "Grades updated successfully.!!";}
    else {
    echo "Error updating grades: ".mysqli_error($connection);
}
mysqli_close($connection);
?>
 <!--Done!-->