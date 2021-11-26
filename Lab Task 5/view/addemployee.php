<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <?php 
        include "navigation.php";

    ?>
   

 <form action="../controller/createemployee.php" method="POST" enctype="multipart/form-data">
    <table>
        <fieldset allign="center" style="height: 320px; width: 400px;"> 
            <legend><b><h2>Add Employee</h2></b> </legend>
  <label for="username">User Name:</label><br>
  <input type="text" id="username" name="username"><br>
  <label for="phonenumber">Phone Number:</label><br>
  <input type="number" id="phonenumber" name="phonenumber"><br>
  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password"><br>
  <label for="email">E-mail:</label><br>
  <input type="text" id="text" name="email"><br>
 

  <label for="image">Image :</label><br>
  <input type="file" name="image"><br><br>
  <label for="yearlyincome">yearlyincome:</label><br>
  <input type="text" id="text" name="yearlyincome"><br>
  <input type="submit" name = "addemployee" value="Add">
  <input type="reset">

  </fieldset> 
  </table>


</form>
 <?php
require '../color.php';

?> 

</body>
</html>

