<!DOCTYPE html>
<html lang="en">
<head>
<meta name="author" content="Muhammad Faizan">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>Update Student</title>
</head>
  <body>
<?php include 'menu_slider_bar.php'; ?>
<?php include 'css_Update_Register.php';?>
  <div class="FormHeadingContainer">
    <h1>Update Student</h1> 
    
    <form action="submit_update_student.php" method="post">
    <label for="studentID">Student ID:</label>
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

          <label for="userID">User ID:</label>
          <select name="userID" id="userID" required>
          <option value="" hidden>Your Current User ID</option>
            
          <?php include 'php_conec.php'?>
            <?php
            $sql="SELECT UserID FROM login";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
                while ($row=mysqli_fetch_assoc($result)) {
                    echo '<option value="'.$row["UserID"].'">'.$row["UserID"].'</option>';
                }
            }
            mysqli_close($conn);
            ?>
        </select>
          
      <label for="lastName">Full Name:</label>
      <input type="text" id="fullName" name="fullName" placeholder="Your Updated Full Name" required>
  <label for="dob">Date of Birth:</label>
      <input type="date" id="dob" name="date_of_birth" placeholder="Updated D.O.B" required>
          <label for="gender">Gender:</label>
      <select id="gender" name="gender"  required>
      <option value="">Select Gender</option>
        <option value="male">Male</option>
            <option value="female">Female</option>
       <option value="other">Other</option>
      </select>
          <label for="username">Username: </label>
     <input type="text" id="username" name="username" placeholder="Updated User Name"required>
      <label for="password">Password: </label>
          <input type="password" id="password" name="password" placeholder="Updated Password" required>
      <label for="address">Address:</label>
      <input type="text" id="address" name="address" placeholder="Updated Address" required>
      <label for="contactNumber">Contact Number:</label>
  <input type="tel" id="contactNumber" name="phone" placeholder="Updated Contact Number" required>
      <label for="email">Email:</label>
              <input type="email" id="email" name="email" placeholder="Updated Email" required>
      <label for="guardianName">Guardian/Parent Name:</label>
      <input type="text" id="guardianName" name="guardian_name" placeholder="Updated Guardian Name" required>
             <label for="guardianContact">Guardian/Parent Contact:</label>
      <input type="tel" id="guardianContact" name="guardian_contact" placeholder="Updated Guardian Contact" required>
      
      <label for="admissionDate">Admission Date:</label>
     <input type="date" id="admissionDate" name="admission_date" placeholder="Updated Admission Date" required>
      <div class="BtnContainer">
        <button class="button" type="submit">Register</button>
     </div>
    </form>
  </div>
</body>
</html>
<!--done!-->