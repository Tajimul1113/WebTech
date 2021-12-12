<?php 
if(isset( $_POST['submit'])){
  
  
    $type = $_POST['regType'];
    
    
    if($type == "Employee"){
      
      header('location: ../View/Employee/employeeRegistration.php');
     
    }
    if($type == "Donner"){
      
      header('location: ../View/Donner/donnerRegistration.php');
     
    }
    if($type == "Applicant"){
      
      header('location: ../View/Applicant/applicantRegistration.php');
     
    }
    

    
  }


?>