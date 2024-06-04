<!DOCTYPE html>
<html>
  <head>
  
  <title>View Attendance</title>
</head>
<body>
<?php include 'menu_slider_bar.php'; ?>
<?php include 'css_VD.php';?>
    <div class="container">
        <h1>View Attendance</h1>
        <table>
        <thead>
                <tr>
                    <th>Attendance ID</th>
                    <th>Student ID</th>
            <th>Class ID</th>
                    <th>Attendance Date</th>
                    <th>Attendance Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                     include 'php_conec.php';
                     $sql="SELECT * FROM attendance";
                     $result=mysqli_query($conn, $sql);
                     while ($row=mysqli_fetch_assoc($result)) {
                         echo '<tr>';
                         echo '<td>' . $row['AttendanceID'] . '</td>';
                            echo '<td>' . $row['StudentID'] . '</td>';
                         echo '<td>' . $row['ClassID'] . '</td>';
                         echo '<td>' . $row['AttendanceDate'] . '</td>';
                         
                         echo '<td>' . $row['AttendanceStatus'] . '</td>';
                         echo '</tr>';
                     }
                     mysqli_close($conn);
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<!--done!-->
