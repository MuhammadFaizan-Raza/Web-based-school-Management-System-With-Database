<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
  <meta name="author" content="Muhammad Faizan">
    <title>View Subjects</title>
</head>
<body>
<?php include 'menu_slider_bar.php'; ?>
<?php include 'css_VD.php'; ?>
  <div class="FormHeadingContainer">
    <h2> View Subjects</h2>
    <form action="submit_view_subjects.php" method="POST">
      <label class="formLabel" for="subject-id">Subject ID:</label>
         <select name="subject-id" id="subject-id" required>
            <?php include 'php_conec.php'?>
        <?php
            $sql ="SELECT SubjectID FROM subject";
            $result= mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0) {
             while ($row=mysqli_fetch_assoc($result)){
                    echo '<option value="'.$row["SubjectID"].'">'.$row["SubjectID"].'</option>';
                }
      }
            mysqli_close($conn);
            ?>
        </select>
   <label class="formLabel" for="subjectName">Subject Name:</label>
      <input  type="text" id="subjectName" name="subjectName" placeholder="E.g:Softawre Engineering" required>
      <input type="submit" value="View">
    </form>
  </div>
</body>
</html>   
<!--Done!-->