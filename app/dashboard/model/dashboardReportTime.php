<?php
function dashboardReportTime($conn){
	$json = array();

	// $dateNow = date("Y/m/d");
	
	$dateNow = "2021-06-05";
	$sql = "SELECT * FROM date_work WHERE date = '".$dateNow."'";
	$query = $conn->query($sql);
	$json["instance"] = array();
	while ($instance=$query->fetch(PDO::FETCH_ASSOC)) {

		$date_work_id = $instance["id"];

		$instance['time'] = array();
		$sqlTime = "SELECT * FROM time_work WHERE date_work_id ='".$date_work_id."'";
		$queryTime = $conn->query($sqlTime);
		while ($instanceTime=$queryTime->fetch(PDO::FETCH_ASSOC)) {
			
			$time_work_id = $instanceTime["id"];

			$sqlCount = "SELECT count(id) AS totalCount FROM book WHERE time_work_id = '".$time_work_id."'";
			$total = $conn->query($sqlCount)->fetchColumn();
			$instanceTime['total'] = $total;
			$instance['time'][] = $instanceTime;
		}
		$json["instance"][] = $instance;
	}

	return $json;
}	
?>