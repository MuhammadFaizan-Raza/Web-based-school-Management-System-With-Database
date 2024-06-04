 <!DOCTYPE html>
<html> 
<head>
<meta name="author" content="Muhammad Faizan">
       <title>Update Subject</title>
</head>
<body>
<?php include 'menu_slider_bar.php'; ?>

<?php include 'css_VD.php'?>   
<div class="FormHeadingContainer">
            <h2>Subject Updation</h2>
        <form action="submit_update_subject.php" method="post">
            <label class="formLabel"  for="subjectID">Subject ID:</label>
            
            <select name="subjectID" id="subjectID" required>
                <option value="" hidden>Select Current ID</option>
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
        <label class="formLabel" for="subjectName">Subject Name:</label>
            <input type="text" id="subjectName" name="subjectName" placeholder="New Subject Name" required>
               <input type="submit" value="Update">
        </form>
    </div>
</body>
</html>
<!--done!-->
