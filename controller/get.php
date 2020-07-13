<?php 
	include_once('../model/dao.php');
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	if(isset($_GET['id'])){
		$pdo = new DAO();
		$student = $pdo->getById($_GET['id']);
		echo json_encode($student);
	} else {
		echo 'false';
	}
 ?>