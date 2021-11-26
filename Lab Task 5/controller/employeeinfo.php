<?php 

require_once ('../model/databasemodel.php');

function fetchAllemployee(){
	return showAllemployee();

}
function fetchemployee($id){
	return showemployee($id);

}
