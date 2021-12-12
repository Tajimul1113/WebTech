<?php


    session_start();

if ( isset ( $_POST [ 'submit' ] ) ) {

	$name = $_POST [ 'name' ];
  $address= $_POST['address'];
	$email =$_POST [ 'email' ];
	$userName =$_POST [ 'uname' ];
	$password =$_POST [ 'pword' ];
	$confirmPassword = $_POST [ 'conpword' ];
  $occupation = $_POST ['occupation'];
	$gender = $_POST ['gender'];
	
  $day    =   $_POST [ 'date'] ;
  $month  = $_POST [ 'month'];
  $year   = $_POST [ 'year' ] ;
  $dateOfBirth = $day."/".$month."/".$year;
 // $yearlyIncome = $_POST['yearlyIncome'];

    if(strlen($_POST['password'])<8)
    {
			echo 'Password must not be less than eight (8) characters <a href="../../View/Employee/donnerLogin.php">Go Back</a>';
		}

    if(strlen($_POST['password'])>=8)
    {
      $checkpass = false;
		  for ($i=0; $i < strlen($_POST['password']); $i++) 
      { 
			    if($_POST['password'][$i] === '@' || $_POST['password'][$i] === '#' || $_POST['password'][$i] === '$' || $_POST['password'][$i] === '%')
		    	{
				    $checkpass = true;
			    	break;
				
		    	}
		  }
      if ($checkpass === false)
      {
         echo 'Password must contain at least one of the special characters (@, #, $, %) <a href="../../View/Employee/employeeLogin.html">Go Back</a>';

      }

    }

    if ( $name == "" || $email == "" || $userName == "" || $password == "" || $confirmPassword == ""|| $day == "" || $month == "" || $year == "" || $occupation == "" || $address == "") {
 	echo 'field is empty please Fill up the form properly <a href="../../view/Employee/employeeRegistration.html">Reload Registration Form</a> ';
 }
 elseif ( $password != $confirmPassword) {
 	echo 'Password did not match <a href="../../view/Employee/employeeRegistration.php">Reload Registration Form</a> ';
 }
 else{
 	$employeeData = [	
			                'name'=>$name,
                      'address'=>$address, 
                      'userName'=>$userName, 
                      'email'=> $email,
                      'password'=>$password, 
                      'gender'=> $gender,
                      'dateOfBarth'=> $dateOfBirth,
                      'occupation'=> $occupation,
                       

						];

	$employeeDataJson= json_encode( $employeeData );
	$jsonFile= fopen( "../../Model/employee/employeeData.json", "w" );
	fwrite($jsonFile , $employeeDataJson);
	fclose($jsonFile);
    header('location: ../../View/Employee/employeeLogin.php');
 }

}

?>