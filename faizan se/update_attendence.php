<!DOCTYPE html>
<html>
<head>
<meta name="author" content="Muhammad Faizan">

<title>Update Attendance</title>
</head>
<body>
<?php include 'menu_slider_bar.php'; ?>
<?php include 'css_VD.php';?>
    <div class="FormHeadingContainer">
        <h1>Update Attendance</h1>
        <form action="submit_update_attendence.php" method="POST">
         <div class="form-group">
                <label for="attendanceID" class="formLabel">Attendance ID</label>
                        <select name="attendanceID" id="attendanceID" required>
             <option value="" hidden>Select Your Current Attendence Id</option>
             <?php include 'php_conec.php'?>
            <?php
            $sql="SELECT AttendanceID FROM attendance";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
            while ($row=mysqli_fetch_assoc($result)){
                    echo '<option value="'.$row["AttendanceID"].'">'.$row["AttendanceID"].'</option>';
                }
            }
            mysqli_close($conn);
            ?>
        </select>
              <label for="studentID" class="formLabel">Student ID</label>
             <select name="studentID" id="studentID" required>
                <option value="" hidden>Select Your Current Student Id</option>
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
                <label for="classID" class="formLabel">Class ID</label>
                <select name="classID" id="classID" required>
                <option value="" hidden>Select Your Current Class Id</option>
            <?php include 'php_conec.php'?>
                <?php
         $sql="SELECT ClassID FROM class";
            $result=mysqli_query($conn,$sql);
            if (mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_assoc($result)){
                    echo '<option value="'.$row["ClassID"].'">'.$row["ClassID"].'</option>';
                }
            }
            mysqli_close($conn);
          ?>
        </select>
                <label for="attendanceDate" class="formLabel">Attendance Date</label>
                <input type="date" id="attendanceDate" name="attendanceDate"  required>
                <label for="attendanceStatus" class="formLabel">Attendance Status</label>
                <select id="attendanceStatus" name="attendanceStatus" required>
                    <option value="" hidden>Select Status</option>
                    <option value="Present">Present</option>
                    <option value="Absent">Absent</option>
                    <option value="Late">Late</option>
                </select>
                <input type="submit" value="Update">
        </form>
    </div>
</body>
</html>
<!--done!-->
