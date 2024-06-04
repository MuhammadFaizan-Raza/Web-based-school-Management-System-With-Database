<!DOCTYPE html>
<html> 
<head>
    <title>View Grades</title>
</head>
<body>
<?php include 'menu_slider_bar.php'; ?>
<?php include 'css_VD.php'; ?>
    <div class="FormHeadingContainer">
        <h1>View Grades</h1>
        <form action="Submit_View_Grades.php" method="POST">
            <label class="formLabel" for="grade_id">Grade ID:</label>
        
            <select name="grade_id" id="grade_id" required>
                <option value="" hidden>Select Grade ID</option>
            <?php include 'php_conec.php'?>
                <?php
         $sql="SELECT SubjectID FROM subject";
                $result=mysqli_query($conn,$sql);
            if (mysqli_num_rows($result)>0){
                        while($row=mysqli_fetch_assoc($result)){
                    echo '<option value="'.$row["SubjectID"].'">'.$row["SubjectID"].'</option>';}
            }
            mysqli_close($conn);
          ?>
        </select>
                <label class="formLabel" for="subject_id">Subject ID:</label>
                <select name="subject_id" id="subject_id" required>
                <option value="" hidden>Select Subject ID</option>
            <?php include 'php_conec.php'?>
                <?php
         $sql="SELECT SubjectID FROM subject";
                $result=mysqli_query($conn,$sql);
            if (mysqli_num_rows($result)>0){
                        while($row=mysqli_fetch_assoc($result)){
                    echo '<option value="'.$row["SubjectID"].'">'.$row["SubjectID"].'</option>';}
            }
            mysqli_close($conn);
          ?>
        </select>
        <label class="formLabel" for="student_id">Student ID:</label>
        <select name="student_id" id="student_id" required>
              <option value="" hidden>Select student ID</option>
            <?php include 'php_conec.php'?>
            <?php
            $sql="SELECT StudentID FROM student";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
                while ($row=mysqli_fetch_assoc($result)){
                    echo '<option value="'.$row["StudentID"].'">'.$row["StudentID"].'</option>';
                }
            }
            mysqli_close($conn);
            ?>
        </select>
            <input type="submit" value="View Marks">
        </form>
    </div>
</body>
</html>
<!--Done-->