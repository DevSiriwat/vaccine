<?php
function dataTimeList($conn){
	$json = array();
    $date = isset($_GET["date"]) ? $_GET["date"] : (isset($_POST["date"]) ? $_POST["date"] : null);

	$sql = "SELECT * FROM time_work WHERE date_work_id = '".$date."'";
	$query = $conn->query($sql);
	$json["instance"] = array();
	while ($instance=$query->fetch(PDO::FETCH_ASSOC)) {
		$json["instance"][] = $instance;
	}


	return $json;
}	
?>