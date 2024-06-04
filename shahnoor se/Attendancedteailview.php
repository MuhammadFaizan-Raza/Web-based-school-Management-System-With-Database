<!DOCTYPE html>
<html lang="en">
<head>
<style type="text/css">
body, td, th {
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
  margin:0;
}
div#part_1 {
	border-color: #2A0000;
	border-style: ridge;
	background-color: #00ABE4;
	color: #FFF;
}

div#part_2 {
	border-color: #2A0000;
	background-color: #00ABE4;
	color: #FFF;
}

body {
	background-color: #E9F1FA;
}

table {
	border-collapse: collapse;
	width: 100%;
  margin-top:90px;
}

th, td {
	padding: 8px;
	text-align: center;
	border-bottom: 1px solid #ddd;
}

th {
  text-align:center;
	background-color: #2ABFFF;
	color: #FFF;
}


tr:hover {
	background-color: #ddd;
}

</style>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Shahnoor</title>
</head>
<body>
   
<div id="main-page">
<div id="part_1">
<p class="main_para" id="intro"><strong>School Management Portal</strong></p>
</div>
<div id="part_2">
<p class="main_para" id="intro_1"><strong>Attendance</strong></p>
</div> 
</body>
</html>
<?php
$username = "root";
$password = "";
$dbname = "school_db";
$conn = mysqli_connect('localhost', $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = 'SELECT AttendanceID, StudentID, ClassID, AttendanceDate, AttendanceStatus FROM attendance';
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    echo "<table>
            <tr>
              <th>Attendance ID</th>
              <th>Student ID</th>
              <th>Class ID</th>
              <th>Date</th>
              <th>Status</th>
            </tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
            <td>{$row['AttendanceID']}</td>
            <td>{$row['StudentID']}</td>
            <td>{$row['ClassID']}</td>
            <td>{$row['AttendanceDate']}</td>
            <td>{$row['AttendanceStatus']}</td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "<p>No attendance data found.</p>";
}

// Close the connection
mysqli_close($conn);
?>
