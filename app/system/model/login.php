<?php
function login($conn){
	$json = array();

	// $kpi_id = isset($_GET['kpi_id']) ? $_GET['kpi_id'] : null;

	$username = isset($_POST['username']) ? $_POST['username'] : null;
	// $json["password"] = md5($password);


	$json["instance"] = (object)array();
	if ($username){
		$sql = "SELECT employee_id, name, phone, email FROM employee WHERE employee_id = '".$username."'";
		// $sql = "SELECT * FROM member WHERE id='".$username."' AND password='".$password."'";
		$query = $conn->query($sql);
		$json["instance"]=$query->fetch(PDO::FETCH_OBJ);
	}else{
		$json["alert"] = "No record information!!";
	}

	return $json;
}
?>