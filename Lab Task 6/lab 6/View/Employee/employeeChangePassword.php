<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Change Password|FoundBD</title>
  <link rel="shortcut icon" href="../../assets/icon.png">
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
  <li><a href="./viewProfile.php">Profile</a></li>
  <li><a href=" ./employeeNotification.php">Notification</a></li>
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
      <form method="post" action="../../controller/Employee/employeeChangePassword.php" >
        <fieldset>
        
            <legend><b>Employee Password Change</b></legend><br>
        
        
            <label>Current Password :  </label>
            <input type="password" id="currentPass" name="currentPass" ><br>
            
        
            
            <label>New Password : </label>
            <input type="password" id="newPass" name="newPass"name="newPass" onkeyup="validation()"/><br><br>
            <tr>
              <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
              <td id="security" align="center"></td>
            </tr>
            <label>Retype New Password : </label>
            <input type="password" id="retypePass" name="retypePass" onkeyup="match()"/><br>
            <hr><br>
            <tr>
              <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
              <td id="ifmached" align="center"></td>
            </tr>
      
        
            <input type="submit" name="submit" id="submit" value="Update">
            
            <input type="submit" name="cancel" id="cancel" value="Cancel"><br><br>
        </fieldset>
        </form>
    </fieldset>
    <fieldset>
    <!-- .................................Main Content..................... -->
    <!-- .................................Footer Start..................... -->
    <fieldset>
      <p align="center">Copyright &#169;2021</p>
    </fieldset>
  </form>
  <!-- .................................Footer Close..................... -->
  
  
  
  
 
</body>
</html>