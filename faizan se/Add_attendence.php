<!DOCTYPE html>
<html>
<head>
  <meta name="author" content="Muhammad Faizan">
    <title>Add Attendance</title>
</head> 
<body>
    <?php include 'menu_slider_bar.php'; ?>
<?php include 'css_VD.php';?>
    <div class="FormHeadingContainer">
        <h1>Add Attendance</h1>
        <form action="submit_Add_Attendence.php" method="POST">
            <label class="formLabel" for="studentID">Student ID</label>
        <select name="studentID" id="studentID" required>
              <option value="" hidden>Your Current student ID</option>
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
        
            <label for="classID" class="formLabel">Class ID</label>
            <select name="classID" id="classID" required>
      <option value="" hidden>Select ClassID</option>
            <?php include 'php_conec.php'?>
                <?php
         $sql="SELECT ClassID FROM class";
        $result=mysqli_query($conn,$sql);
            if (mysqli_num_rows($result)>0) {
                            while($row=mysqli_fetch_assoc($result)) {
                    echo '<option value="'.$row["ClassID"].'">'.$row["ClassID"].'</option>';
 }
            }
            mysqli_close($conn);
          ?>
        </select> 
          
            <label class="formLabel" for="attendanceDate">Attendance Date</label>
            <input type="date" id="attendanceDate" name="attendanceDate" required>
            <label class="formLabel" for="attendanceStatus">Attendance Status</label>
            <select id="attendanceStatus" name="attendanceStatus" required>
                <option value="Present">Present</option>
                <option value="Absent">Absent</option>
            </select>
            <input type="submit" value="Add Attendence">
        </form>
    </div>
</body>
</html>
<!--done!-->