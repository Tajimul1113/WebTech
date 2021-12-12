<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Change profile pic|FundBD</title>
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
    <form action=""  onsubmit="return v2()" >
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
      
        <form method="POST" action="">
          <fieldset >
            <legend> <b>CHANGE Profile Picture </b></legend>
              <table align="center">
                <tr>
                  <td>
                    <input type="file" id="img" name="img" accept="image/*">
                    
                  </td>
                  <td>
                    <input type="submit" value="Upload" name="submit">
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
    </form>

    <!-- .................................Footer Close..................... -->

 

</body>
</html>