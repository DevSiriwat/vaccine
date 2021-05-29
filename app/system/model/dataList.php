<?php
function dataList($conn){
	$json = array();
	$sql = "SELECT * FROM date_work";
	$query = $conn->query($sql);
	$json["date"] = array();
	while ($instance=$query->fetch(PDO::FETCH_ASSOC)) {
		$json["date"][] = $instance;
	}

	return $json;
}	
?>