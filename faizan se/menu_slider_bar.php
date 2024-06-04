<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">  
  <title>FAIZAN Menu</title>
  <style>
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family:  sans-serif;
    }
    .OuterMostHolder{
      height: 100%;
      width: 300px;
      position: fixed;
    }
    .OuterMostHolder .SideBarBtn{
      position: absolute;
      left: 8px;
      top: 10px;
      background: #333;
      color: #fff;
      height: 45px;
      width: 45px;
      z-index: 9999;
      border-radius: 5px;
      cursor: pointer;
    }
    .OuterMostHolder .SideBarBtn i{
      position: absolute;
      font-size: 23px;
      color: #fff;
    }
    #sidebar{
      position: fixed;
      background: #00ABE4;
      height: 100%;
      width: 270px;
      overflow: hidden;
      left: -270px; 
    }
    #btn:checked ~ #sidebar{
      left: 0;
    }
    #sidebar .title{
      line-height: 65px;
      text-align: center;
      background: #333;
      font-size: 25px;
      font-weight: 600;
      color: #f2f2f2;
      border-bottom: 1px solid #222;
    }
    #sidebar .navOptionsList{
      width: 100%;
      height: 100%;
      list-style: none;
    }
    #sidebar .navOptionsList li{
      padding-left: 40px;
      line-height: 50px;
      border-bottom: 1px solid #fff;
      
    }
    #sidebar .navOptionsList li:hover{
      
      box-shadow: 0 0px 10px 3px #fff;
    }
    #sidebar .navOptionsList li a{
      color: #f2f2f2;
      text-decoration: none;
      font-size: 18px;
      font-weight: 500;
      height: 100%;
      width: 100%;
      display: block;
    }
    #sidebar .navOptionsList li a i{
      margin-right: 20px;
    }
    .SideBarBtn .fa-bars{
     padding:25%;
    }
    span{
      margin-top:155px;
      display:block;
      font-size:13px;
      font-weight:bold;
      text-align:center;
    }
  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
</head>
<body>
  <div class="OuterMostHolder">
    <input type="checkbox" id="btn" hidden>
    <label for="btn" class="SideBarBtn">
      <i class="fas fa-bars"></i>
    </label>
    <nav id="sidebar">
      <div class="title">Admin Panel</div>
      <ul class="navOptionsList">
        <li><a href="./dashBoard_admin.php"><i class="fas fa-home"></i>Dashboard</a></li>
        <li><a href="Manage_Students_Options.php"><i class="fa-solid fa-users"></i>Manage Students</a></li>
        <li><a href="Manage_teacher_Options.php"><i class="fas fa-stream"></i>Manage Teachers</a></li>
        <li><a href="Manage_Subject_Options.php"><i class="fa-solid fa-book"></i>Manage Subjects</a></li>
        <li><a href="Manage_Attendence_Options.php"><i class="fas fa-address-book"></i>Manage Attendence</a></li>
        <li><a href="Manage_Grade_options.php"><i class="fas fa-sliders-h"></i>Manage Marks</a></li>
        <li><a href="Manage_Accounts_Options.php"><i class="fas fa-cog"></i>Manage Accounts</a></li>
        <li><a href="About-Us.php"><i class="fa-regular fa-address-card"></i>About us</a></li>
        <span>&copy; Muhammad Faizan 2021F-093</span>      
      </ul>
    </nav>
  </div>
</body>
</html>
