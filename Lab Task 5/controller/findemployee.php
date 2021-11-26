<?php

require_once '../model/databasemodel.php';

if (isset($_POST['findemployee'])) {
	
		echo $_POST['username'];

    try {
    	
    	$allSearchedemployee = searchemployee($_POST['username']);
    	require_once '../view/showSearchedemployee.php';

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }
}

