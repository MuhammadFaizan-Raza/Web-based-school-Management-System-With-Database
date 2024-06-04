<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Muhammad Faizan">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>View Teacher</title>
</head>
<body>
<?php include 'menu_slider_bar.php'; ?>
<?php include 'css_VD.php'; ?>
  <div class="FormHeadingContainer">
    <h2> View Teachers Record</h2>
      <form action="submit_view_teacher.php" method="POST">
      <label  class="formLabel" for="teacherID">Teacher ID:</label>
         <select name="teacherID" id="teacherID" required>
            <?php include 'php_conec.php'?>
            <?php
          $sql ="SELECT TeacherID FROM teacher";
          $result= mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0) {
                while ($row=mysqli_fetch_assoc($result)){
                    echo '<option value="'.$row["TeacherID"]. '">' .$row["TeacherID"].'</option>';
                }
      }
            mysqli_close($conn);
            ?>
        </select>

    <label class="formLabel" for="full-name">Full Name:</label>
        <input  type="text" id="full-name" name="fullName" placeholder="E.g:Muhammad Faizan" required>
      <input type="submit" value="View">
    </form>
  </div>
</body>
</html> 
<!--Done!-->
