<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="author" content="Muhammad Faizan">
     <meta charset="UTF-8">
             <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>Update Teacher</title>
</head> 
<body>
<?php include 'menu_slider_bar.php';?>
<?php include 'css_Update_Register.php';?>
<div class="FormHeadingContainer">
    <h1>Teacher Update</h1>
         <form action="submit_update_teacher.php" method="post">
      <label for="teacherID">Teacher ID:</label>        
         <select name="teacherID" id="teacherID" required>
      <option value="" hidden>Select Teacher ID</option>
            
         <?php include 'php_conec.php'?>
            <?php
            $sql ="SELECT TeacherID FROM teacher";
            $result= mysqli_query($conn, $sql);
            if(mysqli_num_rows($result)>0) {
                while ($row=mysqli_fetch_assoc($result)){
                    echo '<option value="'.$row["TeacherID"]. '">' .$row["TeacherID"].'</option>';
                }
            }
            mysqli_close($conn);
            ?>
        </select>
        

         <label for="userID">User ID:</label>
                <select name="userID" id="userID" required>
      <option value="" hidden>Select User ID</option>

            <?php include 'php_conec.php'?>
            <?php
            $sql ="SELECT UserID FROM login";
            $result= mysqli_query($conn, $sql);
            if(mysqli_num_rows($result)>0) {
                while($row= mysqli_fetch_assoc($result)){
                    echo '<option value="'.$row["UserID"].'">'.$row["UserID"].'</option>';
                }
            }
            mysqli_close($conn);
            ?>
        </select>
              <label for="fullName">Full Name:</label>
    <input type="text" id="fullName" name="fullName" placeholder="Your Updated Full Name" required>
        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
                   <option value="">Select Gender</option>
            <option value="male">Male</option>
                   <option value="female">Female</option>
        <option value="other">Other</option>
        </select>
        <label for="dateOfBirth">Date of Birth:</label>
        <input type="date" id="dateOfBirth" name="dateOfBirth" placeholder="Updated Date of Birth" required>
    <label for="username">Username: </label>
      <input type="text" id="username" name="username" placeholder="Updated User Name"required>
  <label for="password">Password: </label>
      <input type="password" id="password" name="password" placeholder="Updated Password" required>
    <label for="preferSubject">Preferred Subject:</label>
        <input type="text" id="preferSubject" name="preferSubject" placeholder="Updated Preferred Subject" required>        
        <label for="experienceYears">Experience (in years):</label>
               <input type="number" id="experienceYears" name="experienceYears" placeholder="Updated Experience (inyears)" required>        
        <label for="email">Email:</label>
          <input type="email" id="email" name="email" placeholder="Updated Email" required>        
        <label for="contactNumber">Contact Number:</label>
        <input type="tel" id="contactNumber" name="contactNumber" placeholder="Updated Contact Number"      required>        
      <label for="lastQualification">Last Qualification:</label>
        <input type="text" id="lastQualification" name="lastQualification" placeholder="Updated Last        Qualification" required>

        <div class="BtnContainer">
                  <button class="button" type="submit">Update</button>
        </div>
          </form>
</div>
</body>
</html>
<!--done!-->