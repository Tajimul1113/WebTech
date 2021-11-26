<?php 

require_once 'databaseConnect.php';


function showAllemployee(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `employeeinfo` ';

    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function showemployee($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `employeeinfo` where id = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}


function searchemployee($username){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `employeeinfo` WHERE Username LIKE '%$username%'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function addemployee($data){
	$conn = db_conn();
    $selectQuery = "INSERT into employeeinfo (username, phonenumber, password, email, image,yearlyincome)
VALUES (:username, :phonenumber, :password, :email , :image,:yearlyincome)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':username' => $data['username'],
        	':phonenumber' => $data['phonenumber'],
        	':password' => $data['password'],
        	 
            ':email' => $data['email'],
        	':image' => $data['image'],
            ':yearlyincome' => $data['yearlyincome']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


function updateemployee($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE employeeinfo set username = ?, phonenumber = ?, password = ?, email = ?  where id = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['username'], $data['phonenumber'], $data['password'], $data['email'],  $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function deleteemployee($id){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `employeeinfo` WHERE `id` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}
?>