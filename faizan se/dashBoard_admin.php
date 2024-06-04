<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body{
            font-family: Arial, sans-serif;
            background-image:url("./SE_bg_FAIZAN.png");
            background-size:cover;
            margin: 0;
            padding: 20px;
        }
        .dashboardContainer{
            max-width: 1200px;
            margin: 0 auto;
            background-color: #FFFFFF;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .dashboardContainer h1{
          font-size:60px;
          text-align: center;
            margin-bottom: 20px;
            color: #00ABE4;
        }
        .OptionsOfDashboard a{
            display: block;
            text-align: center;
            color: #FFFFFF;
            text-decoration: none;
            border-radius: 5px;
            padding: 50px 20px ;
            margin-top:40px;
        }
    </style>
</head>
<body>
    <div class="dashboardContainer">
        <h1>Dashboard</h1>
        <div class="OptionsOfDashboard">
                <a style="background-color: #37474F;" href="Manage_Students_Options.php">
                    <i class="fas fa-users fa-3x"></i>
                    <span>Manage Students</span>
                </a>
                <a style="background-color: #069ed1a8;;" href="Manage_teacher_Options.php">
                    <i class="fas fa-chalkboard-teacher fa-3x"></i>
                    <span>Manage Teachers</span>
                </a>
                <a style="background-color: #607D8B;" href="Manage_Subject_Options.php">
                    <i class="fas fa-book fa-3x"></i>
                    <span>Manage Subjects</span>
                </a>
                <a style="background-color: #069ad1a8;;" href="Manage_Attendence_Options.php">
                    <i class="far fa-calendar-alt fa-3x"></i>
                    <span>Manage Attendance</span>
                </a>
                <a  style="background-color: #90A4AE;" href="Manage_Grade_options.php">
                    <i class="fas fa-chart-line fa-3x"></i>
                    <span>Manage Marks</span>
                </a>
                <a  style="background-color: #B0BEC5; " href="Manage_Accounts_Options.php">
                    <i class="fas fa-user-cog fa-3x"></i>
                    <span>Manage Accounts</span>
                </a>
        </div>
    </div>
</body>
</html>
