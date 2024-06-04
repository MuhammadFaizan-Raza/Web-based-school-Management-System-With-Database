<!DOCTYPE html>
<html>
 <head>
 <meta name="author" content="Muhammad Faizan">

    <title>Update Grades</title>
</head>
<body>
<?php include 'menu_slider_bar.php'; ?>
<?php include 'css_VD.php'; ?>
    <div class="FormHeadingContainer">
        <h1>Update Grades</h1>
        <form action="submit_update_grades.php" method="POST">
            <label class="formLabel" for="grade_id">Grade ID:</label>
            <select name="grade_id" id="grade_id" required>
                <option value="" hidden>Select Grade ID</option>
            <?php include 'php_conec.php'?>
                <?php
         $sql="SELECT SubjectID FROM subject";
                $result=mysqli_query($conn,$sql);
            if (mysqli_num_rows($result)>0) {
                        while($row=mysqli_fetch_assoc($result)) {
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
            if (mysqli_num_rows($result)>0) {
                        while($row=mysqli_fetch_assoc($result)) {
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
                while ($row=mysqli_fetch_assoc($result)) {
                    echo '<option value="'.$row["StudentID"].'">'.$row["StudentID"].'</option>';
                }
            }
            mysqli_close($conn);
            ?>
        </select>
            <label class="formLabel" for="grade">Grade:</label>
            <input type="text" id="grade" name="grade" placeholder="Enter New Grade">
            <label class="formLabel"   for="grade_date">Grade Date:</label>
            <input type="text" id="grade_date" name="grade_date" placeholder="Enter New Grade date">
            <input type="submit" value="Update Grades">
        </form>
    </div>
</body>
</html>
<!--Done!-->