<?php 
	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	include_once('../model/dao.php');
	
	$pdo = new DAO();

	if(isset($_POST['update']) && isset($_POST['id'])){
		$pdo->update($_POST['id'],$_POST['name'],$_POST['email'],$_POST['birthday'],$_POST['phone']);
	}
 ?>