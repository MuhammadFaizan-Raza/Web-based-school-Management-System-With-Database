
<?php
session_start();
include 'menu_slider_bar.php';
include 'css_VD.php';
include 'php_conec.php';
$studentID=$_POST['student-id'];
$fullName=$_POST['fullName'];
   $sql="SELECT * FROM student WHERE  StudentID= '$studentID' AND FullName ='$fullName' ";
   $retval=mysqli_query( $conn, $sql);
   if(! $retval ) 
         die('Could not get data: ' . mysql_error());{
        echo "<table>"; 
        echo "<tr>"; 
        echo "<th> ID </th>"; 
        echo "<th> Name </th>";
               echo "<th> Date of Birth</th>";
        echo "<th> Gender </th>";
        echo "<th> Address </th>";
         echo "<th> ContactNumber </th>";
        echo "<th> Email </th>";
        echo "<th> GuardianName </th>";
        echo "<th> GuardianContact </th>";
        echo "<th> ClassID </th>";
        echo "<th> AdmissionDate </th>";
        echo "</tr>";  
   while($row=mysqli_fetch_array($retval, MYSQLI_NUM)) {   
	echo "<tr>"; 
                echo "<td>".$row[0]. "</td>"; 
                echo "<td>".$row[1]."</td>"; 
                echo "<td>".$row[2]."</td>"; 
                echo "<td>".$row[3]. "</td>"; 
                echo "<td>".$row[4]. "</td>"; 
                  echo "<td>".$row[5] . "</td>"; 
                echo "<td>".$row[6]. "</td>"; 
                echo "<td>".$row[7]."</td>"; 
                echo "<td>".$row[8]."</td>";
                echo "<td>".$row[9]. "</td>";
                echo "<td>".$row[11]."</td>";  

            echo "</tr>"; 
			}
			echo "</table>"; 
	  }
      mysqli_close($conn);
?>
<!--done!-->
