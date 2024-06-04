<!DOCTYPE html>
<html> 
<head>
  <meta name="author" content="Muhammad Faizan">
  <title>School Login Page</title>
  <style>
    body{
      background-image:url("./SE_bg_FAIZAN.png");
    background-size:cover;
       background-repeat:no-repeat;
       background-position: 100vw;
      margin:0;
      padding:0;}    
    .ContainerOfAllForms{
        position:absolute;
        top:50%;
            left:50%;
        transform:translate(-50%,-50%);
    }
    .EachLoginForm{
      background-color:#FFFFFF;
      padding: 40px  ;
           border-radius:5px;
      display:none;
      width:400px;
  }
    #IDaForm.SelectedBtnClass,
    #IDsForm.SelectedBtnClass,
    #IDtForm.SelectedBtnClass{
      display: block;
    }
    h1{
      text-align:center;
      color:#00ABE4;
    }
    .FormEachElement{
      margin-bottom:20px;
      text-align:left;
    }
    .FormEachElement label{
      display:block;
       margin-bottom:5px;
      color:#00ABE4;
      font-weight:bold;
    }
    .FormEachElement input[type="text"],
    .FormEachElement input[type="password"]{
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
       border-radius: 3px;
    }
    .FormEachElement button{
      display: block;
      width: 100%;
      padding: 10px;
      background-color: #00ABE4;
      color: #FFFFFF;
      border: none;
      border-radius: 3px;
      font-weight: bold;
       cursor: pointer;
    }
    .TypeOfLoginBtnContainer{
      margin-bottom: 20px;
      text-align: center;      
      text-align: center;
      position: absolute;
      top: 19%;
      left: 50%;
      transform: translate(-50%,-50%);
        width:35%;
    }
    .TypeOfLoginBtnContainer button{
         padding: 5px 10px;
      margin: 0 5px;
      background-color: #00ABE4;
      color: #FFFFFF;
      border: none;
      border-radius: 3px;
      font-weight: bold;
      cursor: pointer;
      width: 30%;
    }
    .TypeOfLoginBtnContainer button.SelectedBtnClass{
          background-color: #FFFFFF;
      color: #00ABE4;
    }    
  </style>
</head>
<body>
  <div class="TypeOfLoginBtnContainer">
         <button id="IDaBtn" class="SelectedBtnClass">Admin</button>
  <button id="IDsBtn">Student</button>
      <button id="IDtBtn">Teacher</button>
   </div>
<div class="ContainerOfAllForms">
<div class="EachLoginForm" id="IDaForm">
      <h1>Admin Login</h1>
      <form action="submit_login.php" method="POST">
        <input type="hidden" name="userType" value="admin"><!--php per bhejny k liyay k konsi userType select hoi!--> 
  <div class="FormEachElement">
          <label for="adminUsername">Username</label>
          <input type="text" id="adminUsername" name="adminUsername" placeholder="E.g:Muhammad Faizan" required>
      </div>
          <div class="FormEachElement">
          <label for="adminPassword">Password</label>
            <input type="password" id="adminPassword" name="adminPassword" placeholder="Enter your password" required>
          </div>
    <div class="FormEachElement">
            <button type="submit">Login</button>
          </div>
     </form>
      </div>
      <div class="EachLoginForm" id="IDsForm">
    <h1>Student Login</h1>
      <form action="submit_login.php" method="POST">
        <input type="hidden" name="userType" value="student">
        <div class="FormEachElement">
          <label for="studentUsername">Username</label>
          <input type="text" id="studentUsername" name="studentUsername" placeholder="E.g:Muhammad Faizan" required>
        </div>
        <div class="FormEachElement">
  <label for="studentPassword">Password</label>
          <input type="password" id="studentPassword" name="studentPassword" placeholder="Enter your password" required>
          </div>
          <div class="FormEachElement">
      <button type="submit">Login</button>
        </div>
      </form>
    </div>    
    <div class="EachLoginForm" id="IDtForm">
      <h1>Teacher Login</h1>
      <form action="submit_login.php" method="POST">
                   <input type="hidden" name="userType" value="teacher">
        <div class="FormEachElement">
          <label for="teacherUsername">Username</label>
    <input type="text" id="teacherUsername" name="teacherUsername" placeholder="E.g:Muhammad Faizan" required>
        </div>
      <div class="FormEachElement">
          <label for="teacherPassword">Password</label>
          <input type="password" id="teacherPassword" name="teacherPassword" placeholder="Enter your password" required>
          </div>
        <div class="FormEachElement">
          <button type="submit">Login</button>
        </div>
      </form>
    </div>
  </div>
  <script>
    const IDaBtn=document.getElementById('IDaBtn');
    const IDsBtn=document.getElementById('IDsBtn');
    const IDtBtn=document.getElementById('IDtBtn');
    const IDaForm=document.getElementById('IDaForm');
    const IDsForm=document.getElementById('IDsForm');
    const IDtForm=document.getElementById('IDtForm');
    const heading=document.querySelector('.EachLoginForm h1');//first element return karaiga jo under given hoga
    IDaBtn.addEventListener('click',function(){
      IDaBtn.classList.add('SelectedBtnClass');//class remove or add horahi selectedBtnClass
      IDsBtn.classList.remove('SelectedBtnClass');
           IDtBtn.classList.remove('SelectedBtnClass');
      IDaForm.classList.add('SelectedBtnClass');
      IDsForm.classList.remove('SelectedBtnClass');
      IDtForm.classList.remove('SelectedBtnClass');
      heading.textContent='Admin Login';
    });
    IDsBtn.addEventListener('click',function(){
      IDaBtn.classList.remove('SelectedBtnClass');
  IDsBtn.classList.add('SelectedBtnClass');
      IDtBtn.classList.remove('SelectedBtnClass');
      IDaForm.classList.remove('SelectedBtnClass');
        IDsForm.classList.add('SelectedBtnClass');
          IDtForm.classList.remove('SelectedBtnClass');
      heading.textContent='Student Login';});
    IDtBtn.addEventListener('click',function(){
      IDaBtn.classList.remove('SelectedBtnClass');
   IDsBtn.classList.remove('SelectedBtnClass');
      IDtBtn.classList.add('SelectedBtnClass');
      IDaForm.classList.remove('SelectedBtnClass');
        IDsForm.classList.remove('SelectedBtnClass');
      IDtForm.classList.add('SelectedBtnClass');
      heading.textContent='Teacher Login';
    });
  </script>
</body>
</html>

<!--Done!-->