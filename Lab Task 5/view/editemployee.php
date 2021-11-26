<?php 

require_once '../controller/employeeinfo.php';
$user = fetchdonner($_GET['id']);


 include "navigation.php";



 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <form action="../controller/updateemployee.php" method="POST" enctype="multipart/form-data">
  <fieldset style="height: 350px; width: 400px;"> 
            <legend><b>Edit Employee</b> </legend>
  <label for="username">User Name:</label><br>
  <input value="<?php echo $user['username'] ?>" type="text" id="username" name="username"><br>
  <label for="phonenumber">Phone number:</label><br>
  <input value="<?php echo $user['phonenumber'] ?>" type="number" id="phonenumber" name="phonenumber"><br>
  <label for="password">Password:</label><br>
  <input value="<?php echo $user['password'] ?>" type="password" id="password" name="password"><br>
  <label for="email"> E-Mail :</label><br>
  <input value="<?php echo $user['email'] ?>" type="text" id="email" name="email"><br>
    



  <input type="file" name="image"><br><br>
  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
  <input type="submit" name = "updateemployee" value="Update">
   
</fieldset>
</form>
  <?php
require '../color.php';

?> 

</body>
</html>

