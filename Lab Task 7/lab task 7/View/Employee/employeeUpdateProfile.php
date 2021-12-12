<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Update Profile|FundBD</title>
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
          <!-- ...............................Header Close....................... -->



          <!-- .................................Main Content..................... -->
    <fieldset>
  <form method="post" action="../../controller/Employee/employeeUpdateProfileCheck.php" >
    <fieldset>
    
        <legend><b>Employee Profile Update</b></legend><br>
    
  
        <label>Name : </label>
        <input type="text" id="name" name="name" ><br>
        <hr><br>

        <label>Address : </label>
        <input type="text" id="address" name="address" ><br>
        <hr><br>
    
        <label>Email :</label>
        <input type="text" id="email" name="email" ><br>
        <hr><br>
    
        <label>User Name : </label>
        <input type="text" id="uname" name="username" ><br>
        <hr><br>
    
        <label>Password :  </label>
        <input type="password" id="pword" name="password" ><br>
        <hr><br>
    
        <label>Confirm Password : </label>
        <input type="password" id="conpword" name="confirmPassword" ><br>
        <hr><br>
    
        <label>Occupation :</label>
        <input type="text" id="occupation" name="occupation" ><br>
        <hr><br>
    
       
    
        <fieldset>
    
        <legend>Gender</legend>
    
        
    
        <input type="radio" name="gender" value="Male">
        <label class="male">Male</label>
    
        <input type="radio" name="gender" value="Female">
        <label class="female">Female</label>
    
        <input type="radio" name="gender" value="Other">
        <label class="other">Other</label>
    
        </fieldset>
    
        <hr>
    
    
    
    <fieldset>
    
    <legend>Date Of Birth</legend>
    
    
    
    <input type="text" id="date" name="date" size="5"> /
    <input type="text" id="month" name="month" size="5"> /
    <input type="text" id="year" name="year" size="6"><i> (dd/mm/yyyy)</i>
    
    
    </fieldset>
    
    
    
        <hr>
		<fieldset>
    
        <legend>Yearly Income</legend>
    
        
    
        <input type="radio" name="Yearly Income" value="Below 10000">
        <label class="Below 10000">Below 10000</label>
    
        <input type="radio" name="Yearly Income" value="10000 to 50000">
        <label class="10000 to 50000">10000 to 50000</label>
    
        <input type="radio" name="Yearly Income" value="More Than 50000">
        <label class="More Than 100000">More Than 100000</label>
    
        </fieldset>
    
        <hr>
    
        <input type="submit" name="submit" id="submit" value="Update">
        
       
    </fieldset>
    </form>
</fieldset>
<fieldset>
    <!-- .................................Main Content..................... -->

    <!-- .................................Footer Start..................... -->
    <fieldset>
      <p align="center">Copyright	&#169;2021</p>
    </fieldset>
    <!-- .................................Footer Close..................... -->
  </form>

</body>
</html>