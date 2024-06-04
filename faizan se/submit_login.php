<?php
session_start();
$userType=$_POST['userType'];
$username= $_POST[$userType .'Username'];
    $password=$_POST[$userType. 'Password'];
$dbname ="school_db";
$con=new mysqli("localhost","root","",$dbname) or die('Unable to connect to the database');
mysqli_select_db($con,$dbname) or die('Cannot select database');
$sql="SELECT * FROM login WHERE Username='$username' AND Password='$password'  AND UserType ='$userType'";
$result =mysqli_query($con,$sql);
if($result && mysqli_num_rows($result)> 0){
$row =mysqli_fetch_array($result);
    if($userType=="teacher")
        header("Location: student_dashboard.php");
    else
        header("Location: dashBoard_admin.php");
    
    exit();}
     else{
    echo '<p style="color: red; font-size: 26px;">'."Invalid login credentials.". '</p>';
echo '<p>Click <a href="'."index_loginPage.php" .'">here</a> to try again log in.</p>';
    exit();
}
mysqli_close($con);
?>
<!--done!->