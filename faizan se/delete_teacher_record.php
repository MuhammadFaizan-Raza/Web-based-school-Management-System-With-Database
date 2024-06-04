<!DOCTYPE html>
<html>
<head>
<meta name="author" content="Muhammad Faizan">
  <title>Delete Student Record</title>
</head>
<body> 
<?php include 'menu_slider_bar.php'; ?>
<?php include 'css_VD.php'; ?>
  <div class="FormHeadingContainer">
    <h2>Delete Teacher Record</h2>
    <form action="submit_delete_teacher.php" method="POST">
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

    <label    class="formLabel" for="full-name">Full Name:</label>
      <input type="text" id="fullName" name="fullName" placeholder="E.g:Muhammad Faizan" required>
      <input type="submit" value="Delete">
    </form>
  </div>
</body>
</html>
<!--Done!-->