<?php include 'php_conec.php';
 $subjectID=$_POST['subjectID'];
    $subjectName=$_POST['subjectName'];
$classID=$_POST['classID'];
$teacherID=$_POST['teacherID'];
$sql="INSERT INTO subject (SubjectID,SubjectName,ClassID,TeacherID) VALUES ('$subjectID','$subjectName','$classID','$teacherID')";
    if (mysqli_query($conn,$sql)) {
        echo "Subject added successfully!";
    }else {
       echo "Duplicate subjectID or Error: ".$sql."<br>".mysqli_error($conn);
 }
    mysqli_close($conn);
?>
<!--done!-->

