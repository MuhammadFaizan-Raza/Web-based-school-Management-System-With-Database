 <!DOCTYPE html>
 <html> 
<head>
<meta name="author" content="Muhammad Faizan">
    <title>Add Subject</title>
</head>
<body>
<?php include 'menu_slider_bar.php'; ?>
<?php include 'css_VD.php'?>   
<div class="FormHeadingContainer">
        <h2>Add Subject</h2>
        <form action="Submit_Add_Subject.php" method="post">
            <label class="formLabel"  for="subjectID">Subject ID:</label>
            <input type="text" id="subjectID" name="subjectID" placeholder="Enter Subject ID" required>
              <label class="formLabel" for="subjectName">Subject Name:</label>
     
     
     
              <input type="text" id="subjectName" name="subjectName" placeholder="Enter Subject Name"  required>
        <label class="formLabel" for="classID">Class ID:</label>
                <select name="classID" id="classID" required>
      <option value="" hidden>Select ClassID</option>
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
            <label class="formLabel" for="teacherID">Teacher ID:</label>
                    <select name="teacherID" id="teacherID" required>
        <?php include 'php_conec.php'?>
            <?php
            $sql="SELECT TeacherID, FullName FROM teacher";
                $result=mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0){
                while ($row=mysqli_fetch_assoc($result)){
                    echo '<option value="' . $row["TeacherID"] . '">' . $row["FullName"] . '</option>';
                }
             }
                mysqli_close($conn);
            ?>
        </select>
                <input type="submit" value="Add Subject">
        </form>
    </div>
</body>
</html>
<!--done!-->