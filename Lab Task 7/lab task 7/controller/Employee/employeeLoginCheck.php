<?php
require_once('../../Model/Employee/employeeModel.php');
	if(isset($_POST['submit']))
	{
		if(strlen($_POST["username"])<2)
		{
			echo 'User Name must contain at least two (2) characters <a href="../../View/Employee/employeeLogin.php">Go Back</a>';
		}
		elseif(strlen($_POST['password'])<8)
		{
			echo 'Password must not be less than eight (8) characters and must  contain spcial character <a href="../../View/Employee/employeeLogin.php">Go Back</a>';
		}
    if(strlen($_POST["username"])>=2 and strlen($_POST['password'])>=8)
     {
			
		
		$check = false;
		for ($i=0; $i < strlen($_POST['password']); $i++) { 
			if($_POST['password'][$i] === '@' || $_POST['password'][$i] === '#' || $_POST['password'][$i] === '$' || $_POST['password'][$i] === '%')
			{
				$check = true;
				break;
				
			}
		}

		if($check === false)
		{
			echo 'Password must contain at least one of these special characters (@, #, $, %) <a href="../../View/employee/employeeLogin.php">Go Back</a>';
		}

		else{
      $userName =  $_POST [ 'username' ];
	    $password =   $_POST [ 'password' ];
			$sign =employeeLogin($userName,$password);

      
    
      if ($sign=true ) {
				if(isset($_POST['rememberMe'])){
					setcookie('userName',$userName, time()+60*60*24*7);
				}
					
				
				session_start();
				$_SESSION['username'] =$userName;
				$_SESSION['password']=$password;

				
				
				
         header('location: ../../View/Employee/employeeDashboard.php');
      }
      else{
        echo "Password or Username didn't match click here to try again".'<a href="../../View/Employee/employeeLogin.php"> Reload </a>';
      }
      
		}
    }
	} 
?>