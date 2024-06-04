<?php
  include 'menu_slider_bar.php';
include 'php_conec.php';
$grade_id=$_POST['grade_id'];
$subject_id=$_POST['subject_id'];

$student_id=$_POST['student_id'];
$grade=$_POST['grade'];
$grade_date=$_POST['grade_date'];
$sql="INSERT INTO grade (GradeID,SubjectID,StudentID,Grade,GradeDate) VALUES ('$grade_id','$subject_id','$student_id','$grade','$grade_date')";
if (mysqli_query($conn,$sql)) {
    echo 'Grades added successfully.!!';
} else {
    echo 'Error in Adding Grades: ' . mysqli_error($conn);
}
mysqli_close($conn);
?>
<!--Done!-->
