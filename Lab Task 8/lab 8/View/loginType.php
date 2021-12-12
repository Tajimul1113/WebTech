<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FundBD | Login Type</title>
  <link rel="shortcut icon" href="../assets/icon.png">
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
            <img src="../assets/imgpsh_fullsize.png" alt="" srcset=""width="200" height="80">
          </td>
          
        </tr>
      </table>
      <table align="center">
        <tr>
          <td>
            <ul>
  <li><a href="../index.php">Home</a></li>
  <li><a href="../loginType.php">Login</a></li>
  <li><a href="../regType.php">Registration</a></li>
  <li><a href="../aboutUS.php">About Us</a></li>
          </td>
        </tr>
      </table>
    </fieldset>
  
    <!-- .................................Header Close..................... -->
    <!-- .................................Main Content..................... -->
    <fieldset>
      
      
        <form action="../view/Employee/employeeLogin.php" method="post">
          <fieldset>
            <legend>Login as</legend>
            <br>
            <input type="radio" name="loginType"value="Admin" checked>
            <label class="Admin">Admin</label>
            <input type="radio" name="loginType" value="Employee">
            <label class="Employee">Employee</label>
            <input type="radio" name="loginType" value="Donner">
            <label class="Donner">Donner</label>
            <input type="radio" name="loginType" value="Applicant">
            <label class="Applicant">Applicant</label>
            <br>
            <br>
            <input type="submit" name="submit" value="Go">
          
          </fieldset>
        </form>
      
        <br><br>
    </fieldset>
    <!-- .................................Main Content..................... -->
    <!-- .................................Footer Start..................... -->
    <fieldset>
      <p align="center">copyright	&#169;2021</p>
    </fieldset>
  
  <!-- .................................Footer Close..................... -->

</body>
</html>