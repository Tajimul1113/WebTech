<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FundBD | donner login</title>
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
      <form method="post" action="../../controller/Employee/employeeLoginCheck.php"> 
        <fieldset>
          <legend>Login as Employee</legend>
          
            <table align="center">
              <tr>
                  <td>User Name</td>
                  <td>:<input type="text" name="username" id="userName" onkeyup="userNameValidation()"></td>
              </tr>
              <tr>
                <td></td>
                <td id="userNameErorr">

                </td>
              </tr>
              <tr>
                  <td>Password </td>
                  <td>:<input type="password" name="password" id="password" onkeyup="passwordValidation()"></td>
              </tr>
              <tr>
                <td></td>
                <td id="passwordErorr">

                </td>
              </tr>
            </table>  
              <hr>
            <table align="center">
              <tr>
                <td><input type="checkbox" name="rememberMe" id="">Remember Me</td>
              </tr>
              <tr>
                <td>
                  <input type="submit" name="submit" value="Submit">
                  <a href="./donnerForgotPassword.php"> Forget password?</a>
                </td>
                
              </tr>
            
                
            </table>  
              
            
        </fieldset>
      </form>
    </fieldset>  
    <!-- .................................Main Content..................... -->
    <!-- .................................Footer Start..................... -->
    <fieldset>
      <p align="center">copyright &#169;2021</p>
    </fieldset>
 
    <!-- .................................Footer Close..................... -->


     
</body>
</html>