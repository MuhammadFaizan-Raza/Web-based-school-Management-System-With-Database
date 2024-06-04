<?php
                $db_user='root';
                $db_pass="";
                $db='school_db';//test
                $conn=mysqli_connect('localhost',$db_user,$db_pass) or die('Unable to connect database');
                mysqli_select_db($conn,$db)or die("cannot connect database practice");
                if(! $conn ) {
                    die('Could not connect: ' . mysql_error());
                    }
                   
?>
