<?php 
	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	include_once('../model/dao.php');
	
	$pdo = new DAO();

	if(isset($_POST['delete'])){
		$pdo->delete($_POST['id']);
	}
 ?>