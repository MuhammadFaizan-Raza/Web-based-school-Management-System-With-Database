<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Mark Attendance</title>
  <style type="text/css">

table {
      width: 1000px;
      margin: 0 auto;
      margin-top: 50px;
      border-collapse: collapse;
    }
    input[type="submit"] {
        padding: 9px 20px;
        background-color: #55c2da;
        font-weight:bold;
        border:none;
        color:#333;
        margin:30px 0 0 950px;
    }
    input[type="submit"]:hover{
        background-color: #2590a8a8;
        
    }
    th{
        border: 5px solid black;
        text-align:center;
    }
    td{
        border:3px solid #00ABE4;       
        text-align:center;

    }
    body {
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
}
.headingcol {
	color: #F00;
}
.bodyfont {
	font-family: "Times New Roman", Times, serif;
}-
.bodyfont1 {
	font-family: "Times New Roman", Times, serif;
}
div#part_1 {
	border-color:#2A0000;
	border-style:ridge;
	background-color:#00ABE4;
	color:#FFF;
	
}

div#part_2 { 
    border-color:#2A0000;
	background-color:#00ABE4;
	color:#FFF }

body {
	background-color: #E9F1FA;
}

</style>

</head>
<body>
  <div id="main-page">
    <div id="part_1">
      <p class="main_para" id="intro"><strong>School Management Portal</strong></p>
    </div>
    <div id="part_2">
<p class="main_para" id="intro_1"><strong>Attendance</strong></p>
    </div>



    <form action="Submit_Attendence.php" method="POST">
      <table>
        <tr>
          <th>STUDENT</th>
          <th>ROLL-NO</th>
          <th>CLASS-ID</th>
          <th>DATE</th>
          <th>STATUS</th>
        </tr>
        <?php
        $db_name = 'school_db';
        $con = mysqli_connect('localhost', 'root','' ) or die('Unable to connect to the database.');
mysqli_select_db($con, $db_name) or die('Not select database.');
        $sql = "SELECT FullName, StudentID,ClassID FROM student";
        $result = mysqli_query($con, $sql) or die('Error in fetching student data.');

            while ($row = mysqli_fetch_assoc($result)) {
                      echo "<tr>";
          echo "<td>{$row['FullName']}</td>";
          echo "<td>{$row['StudentID']}</td>";
          echo "<td>{$row['ClassID']}</td>";
          echo "<td> <input type='date' name='date[]'></td>";
          echo "<td><input type='checkbox' name='status[]' value='{$row['StudentID']}'></td>";
          echo "</tr>";
        }
        mysqli_close($con);
        ?>
      </table>
      <input type="submit" name="submit" value="Submit">
    </form>
  </div>
</body>
</html>
