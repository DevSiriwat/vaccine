<?php
function setSession($conn){
	$json = array();
	$json["status"] = 0;

	if(isset($_POST)){
		$_SESSION["info"] = $_POST;
		$json["status"] = 1;
	}
	return $json;
}
?>