
<?php

session_start();
include 'menu_slider_bar.php';
include 'css_VD.php';
include 'php_conec.php';
$subjectID=$_POST['subject-id'];
$SubName=$_POST['subjectName'];
   $sql="SELECT * FROM subject WHERE  SubjectID= '$subjectID' AND SubjectName='$SubName' ";
   $retval=mysqli_query( $conn, $sql);
   if(! $retval ) 
             die('Could not get data: '.mysql_error());{
            echo "<table>"; 
        echo "<tr>"; 
        echo "<th> Subject ID </th>"; 
        echo "<th> Subject Name </th>";
            echo "<th> Class ID</th>";
    echo "<th> Teacher ID </th>";
        echo "</tr>";  
while($row=mysqli_fetch_array($retval, MYSQLI_NUM)) {   
	echo "<tr>"; 
                echo "<td>".$row[0]. "</td>"; 
                echo "<td>".$row[1]."</td>"; 
                echo "<td>".$row[2]."</td>"; 
                echo "<td>".$row[3]. "</td>"; 
            echo "</tr>"; 
			}
			echo "</table>"; 
	  }
      mysqli_close($conn);
?>
<!--done!-->
