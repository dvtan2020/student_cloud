<?php 
	include_once('../model/dao.php');
	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	$pdo = new DAO();
	$sql = "SELECT * FROM students";
	$data = $pdo->select($sql);
	$html = "";
	if(isset($data) && !empty($data)) 
		foreach($data as $row){ 
			$html .= "<tr>";
			$html .= "<td>" . $row['id'] . "</td>";
			$html .= "<td>" . $row['name'] . "</td>";
			$html .= "<td>" . $row['email'] . "</td>";
			$html .= "<td>" . $row['birthday'] . "</td>";
			$html .= "<td>" . $row['phone'] . "</td>";
			$html .= "<td>";
			$html .= "<button class='btn btn-info' onclick='confirmUpdate(".$row['id'].")'><i class='fas fa-edit'></i></button>";
			$html .= "<button class='btn btn-danger' onclick='confirmDele(".$row['id'].",`".$row['name']."`)'><i class='fas fa-trash'></i></button>";
			$html .= "</td>";
			$html .= "</tr>";
		}
	else {
		$html .= "<tr>";
		$html .= "<td colspan='6'>Danh sách sinh viên trống!</td>";
		$html .= "</tr>";
	}
	echo $html;
?>