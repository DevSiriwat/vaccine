<?php
function employeeShow($conn){
	$json = array();

	$id = isset($_GET['id']) ? addslashes($_GET['id']) : null;
	$json["instance"] = (object)array();
	if ($id){
		$sql = "SELECT * FROM employee WHERE id='".$id."'";
		$query = $conn->query($sql);
		$json["instance"]=$query->fetch(PDO::FETCH_OBJ);
	}else{
		$json["alert"] = "No record information!!";
	}

	return $json;
}
?>