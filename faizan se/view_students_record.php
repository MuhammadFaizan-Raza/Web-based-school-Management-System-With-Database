<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
  <meta name="author" content="Muhammad Faizan">
    <title>View Student</title>
</head>
<body>
<?php include 'menu_slider_bar.php'; ?>
<?php include 'css_VD.php'; ?>
  <div class="FormHeadingContainer">
    <h2> View Student Record</h2>
    <form action="submit_view_student.php" method="POST">
      <label class="formLabel" for="student-id">Student ID:</label>
         <select name="student-id" id="student-id" required>
            <?php include 'php_conec.php'?>
            <?php
            $sql ="SELECT StudentID FROM student";
            $result= mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0) {
                while ($row=mysqli_fetch_assoc($result)){
                    echo '<option value="'.$row["StudentID"]. '">' .$row["StudentID"].'</option>';
                }
      }
            mysqli_close($conn);
            ?>
        </select>

   <label class="formLabel" for="fullName">Full Name:</label>
      <input  type="text" id="fullName" name="fullName" placeholder="E.g:Muhammad Faizan" required>
      <input type="submit" value="View">
    </form>
  </div>
</body>
</html>  
<!--Done!-->