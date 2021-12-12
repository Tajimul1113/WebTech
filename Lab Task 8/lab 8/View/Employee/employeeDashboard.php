<?php
    
    require_once('../../Model/Employee/employeeModel.php');
    session_start();
    $userName = $_SESSION['username'];
    $user = getUserByUsername($userName); 


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
<style>
.item1 { grid-area: header; }
.item2 { grid-area: menu; }
.item3 { grid-area: main; }
.item4 { grid-area: right; }
.item5 { grid-area: footer; }

.grid-container {
  display: grid;
  grid-template-areas:
    'header header header header header header'
    'menu main main main right right'
    'menu footer footer footer footer footer';
  grid-gap: 10px;
  background-color: yellow;
  padding: 10px;
}

.grid-container > div {
  background-color: green;
  text-align: center;
  padding: 10px 0;
  font-size: 20px;
}
</style>
</head>


  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee Dashboard</title>
  <link rel="shortcut icon" href="../../assets/icon.png">
<style>

  .appDatabtn{
    background-color: yellowgreen;
    border-radius: 13%;
    height: 48px;
    width: 120px;
  }
  .appDatabtn:hover {
    background-color: darkgreen;
  }
  
  
  
  </style>
  <style>
  .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button2 {background-color: red;} /* Blue */
</style>


  
  
  
   

<body>

  <style>  
  body {
background:   darkgreen; url("../assets/icon.png") no-repeat fixed center; 
}
</style>

  <!-- ...............................Header Start....................... -->
  
    <fieldset>
      <table align="Left">
        <tr>
          <td>
           

 

            <img src="../../assets/imgpsh_fullsize.png" alt="" srcset=""width="200" height="80">
          </td>
          
        </tr>
      </table>
      <table align="center">
        <tr>
          <td>
             <ul>
  <li><a href= "./employeeDashboard.php">Dashboard</a></li>
  <li><a href="./viewProfile.php">Profile</a></li>
  <li><a href="./employeeNotification.php">Notification</a></li>
   
  </li>
</ul>        
          </td>
        </tr>
      </table>
        <table align="center">
                <tr>
                <td><h2>Logged in as :</h2>  </td>
                  <td><?php echo $user[0]['email'];?></td> 
                </tr>
              </table>
      <table align="right">
          <tr>
              <td>
                <button class="button button2"><a href="../../controller/logout.php">Logout</a></button>
                 
              </td>
          </tr>

      </table>
    </fieldset>
    <!-- .................................Header Close..................... -->


    

    <!-- .................................Main Content..................... -->
    <fieldset>
      <table align="center" width="1000">
        <tr>
          <td>
            <h3>Account</h3>
            <hr>
            <ul>

  <div class="grid-container">
  <div class="item1"> <li><a href="./viewProfile.php">View profile</a></div>
  <div class="item2"><li><a href="./employeeUpdateProfile.php">Update Profile</a></div>
  <div class="item3"><li><a href="./employeeChangeProfilePic.php">Change Profile Picture</a></div>  
  <div class="item4"> <li><a href="./employeeChangePassword.php">Change Password</a></div>
  <div class="item5"><li><a href="./employeeDonateMoney.php">Donate Money</a></li></div>
  <div class="item6"><li><a href="./searchApplicantList.php">Search Applicant List</a></li></div>
  <div class="item7"><li><a href="./employeeDeleteAccount.php">Delete Account</a></li></div>
  <div class="item8"><li><a href="./rechargeMoneyFromBankAccount.php">Recharge money from bank account</a></li></div>
  <div class="item9"><li><a href="./employeeNoticeBoard.php">See Notice</a></li></div>
  <div class="item10"><li><a href="./sendMessageToAdmin.php">Send message to ADMIN</a></li>
</div>
   
</div>
               
               
               
               
              
               
               
               

               
               
            </ul>
          </td>
        </tr>
      </table>
    </fieldset>
    <!-- .................................Main Content..................... -->
    <!-- .................................Footer Start..................... -->
    <fieldset>
      <p align="right">copyright	&#169;2021</p>
    </fieldset>

    <!-- .................................Footer Close..................... -->
</body>
</html>