<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="author" content="Muhammad Faizan">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Teacher Registration Form</title>
  </head>
<body>
<?php include 'menu_slider_bar.php'; ?>
<?php include 'css_Update_Register.php'; ?> 
  <div class="FormHeadingContainer">
    <h1>Teacher Registration Form</h1>
  <form action="teacher_registeration_submit.php" method="post">
          <label for="firstname">Full Name:</label>
         <input type="text" id="fullname" placeholder="E.g:Muhammad Faizan" name="fullname" required>
           <label for="gender">Gender:</label>
      <select id="gender" name="gender" required>
            <option value="">Select Gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
     <option value="other">Other</option>
      </select>
        <label for="dob">Date of Birth:</label>
          <input type="date" id="dob" name="dob" required>
     <label for="subject">Preferred Subject:</label>
          <input type="text" id="subject" name="subject" required>
          <label for="experience">Teaching Experience (years):</label>
        <input type="number" id="experience" name="experience" required>
     <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password:</label>
          <input type="password" id="password" name="password" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    <label for="contact">Contact Number:</label>
            <input type="tel" id="contact" name="contact" required>
        <label for="qualification">Last Qualification:</label>
        <input type="text" id="qualification" name="qualification" required>
     <div class="BtnContainer">
        <button class="button" type="submit">Register</button>      
    </form>
    </div>
</body>
</html>
<!--done!-->