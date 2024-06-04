<!DOCTYPE html>
<html>
  <head>
  <meta name="author" content="Muhammad Faizan">

  <title>Student Registration</title>
</head>
<body>
<?php include 'menu_slider_bar.php'; ?>
<?php include 'css_Update_Register.php'; ?> 
<div class="FormHeadingContainer">
      <h1>Student Registration</h1>
    <form action="submit_student.php" method="post">
      <label for="fullName">Full Name:</label>
        <input type="text" id="fullName" placeholder="E.g:Muhammad Faizan" name="full_name" required>
      <label for="dob">Date of Birth:</label>
    <input type="date" id="dob" name="date_of_birth" required>
      <label for="gender">Gender:</label>
      <select id="gender" name="gender" required>
        <option value="" hidden>Select Gender</option>
          <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
      </select>
        <label for="username">Username: </label>
          <input type="text" id="username" name="username" required>
        <label for="password">Password: </label>
        <input type="password" id="password" name="password" required>
  <label for="address">Address:</label>
        <input type="text" id="address" name="address" required>
      <label for="contactNumber">Contact Number:</label>
    <input type="tel" id="contactNumber" name="phone" required>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      <label for="guardianName">Guardian/Parent Name:</label>
     <input type="text" id="guardianName" name="guardian_name" required>
      <label for="guardianContact">Guardian/Parent Contact:</label>
    <input type="tel" id="guardianContact" name="guardian_contact" required>
    <label for="classID">Class ID:</label>        
         <select name="classID" id="classID" required>
      <option value="" hidden>Enter ClassID</option>
            
         <?php include 'php_conec.php'?>
            <?php
            $sql ="SELECT ClassID FROM class";
            $result= mysqli_query($conn,$sql);

            if(mysqli_num_rows($result)>0) {
                while ($row=mysqli_fetch_assoc($result)){
                    echo '<option value="'.$row["ClassID"]. '">' .$row["ClassID"].'</option>';
                }
      }
            mysqli_close($conn);
            ?>
        </select>

          <label for="admissionDate">Admission Date:</label>
      <input type="date" id="admissionDate" name="admission_date" required>
    <div class="BtnContainer">
        <button class="button" type="submit">Register</button>
      </div>
    </form>
      </div>
</body>
</html>
<!--done!-->