<?php
    
    require_once('../../Model/Employee/employeeModel.php');
    session_start();
    $userName = $_SESSION['username'];
    $user = getUserByUsername($userName); 


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FundBD | Profile</title>
  <link rel="shortcut icon" href="../../assets/icon.png">
  <style>  
  body {
background:   lightyellow; url("../assets/icon.png") no-repeat fixed center; 
}
</style>
  <style>
.btn-group .button {
  background-color: #4CAF50; /* Green */
  border: 1px solid green;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  cursor: pointer;
  width: 150px;
  display: block;
}

.btn-group .button:not(:last-child) {
  border-bottom: none; /* Prevent double borders */
}

.btn-group .button:hover {
  background-color: #3e8e41;
}
</style>
 
   
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
</head>
<body>
  <!-- ...............................Header Start....................... -->
  
    <fieldset>
      <table align="center">
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
  <li><a href="./employeeDashboard.php">Dashboard</a></li>
  <li><a href="./employeeNotification.php">Notification</a></li>
   
            
          </td>
        </tr>
      </table>
      <table align="right">
        <tr>
            <td>
              <a href="../../controller/logout.php">Logout</a>
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
              <div class="btn-group">
  <button class="button"><a href="./viewProfile.php">View profile</a></button>
  <button class="button"><a href="./employeeUpdateProfile.php">Update Profile</a></button>
  <button class="button"><a href="./employeeChangeProfilePic.php">Change Profile Picture</button>
  <button class="button"><a href="./employeeChangePassword.php">Change Password</a></button>
  <button class="button"><a href="./employeeDonateMoney.php">Donate Money </a></button>
  <button class="button"><a href="./searchApplicantList.php">Search Applicant List</a></button>
  <button class="button"><a href="./searchForDonnationList.php">Search Donnation List</a></button>
  <button class="button"><a href="./employeeDeleteAccount.php">Delete Account</a></button>
  <button class="button"><a href="./rechargeMoneyFromBankAccount.php">Recharge money from bank account</a></button>
  <button class="button"><a href="./employeeNoticeBoard.php">See Notice</a></button>
  <button class="button"><a href="./sendMessageToAdmin.php">Send message to ADMIN</a></button>
</div
             
              
               
  
            </ul>
          </td>
          <td>
            <fieldset>
              <legend>Profile</legend>
              <img src="../../assets/user.png" alt="" width="100" height="100"><br>
              <a href="employeeChangeProfilePic.php">Change Profile pic</a>
              <table>
                <tr>
                <td>Name &nbsp;&nbsp;</td>
                  <td>:<?php echo $user[0]['name'];?></td>
                </tr>
              </table>
              <hr>
              <table>
                <tr>
                <td>Email &nbsp;&nbsp;</td>
                  <td>:<?php echo $user[0]['email'];?></td>
                </tr>
              </table>
              <hr>
              <table>
                <tr>
                <td>Gender &nbsp;&nbsp;</td>
                  <td>:<?php echo $user[0]['gender'];?></td>
                </tr>
              </table>
              <hr>
              <table>
                <tr>
                <td>Date of Birth &nbsp;&nbsp;</td>
                  <td>:<?php echo '9 August 2000';?></td>
                </tr>
              </table>
              <hr>
              <a href="./employeeUpdateProfile.php">Edit Profile</a><br><br>
            </fieldset>
          </td>
        </tr>
      </table>
    </fieldset>
    <!-- .................................Main Content..................... -->
    <!-- .................................Footer Start..................... -->
    <fieldset>
      <p align="center">copyright	&#169;2021</p>
    </fieldset>

    <!-- .................................Footer Close..................... -->
</body>
</html>

