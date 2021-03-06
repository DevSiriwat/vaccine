<?php
function date_workUpdate($conn){
	$json = array();
	$id = isset($_GET["id"]) ? $_GET["id"] : (isset($_POST["id"]) ? $_POST["id"] : null);
	if ($id && isset($_POST) && !empty($_POST)){
		$col = "";	$val = "";	$c="";
		include($conn->PATH."conf/getColumname.php");
		$field = getColumname($conn, "date_work");
		
		if (isset($_POST["id"])){	unset($_POST["id"]);}
		if (isset($_POST["eventDate"])){	unset($_POST["eventDate"]);}
		foreach ($_POST as $key=>$value) {	
			if (in_array($key, $field)){
				$col.=$c;
				$col.= $key."='".addslashes($value)."'";
				$c=",";
			}
		}

		$col = str_replace("''", "NULL", $col);
		$updateSql = "UPDATE date_work SET ".$col." WHERE id='".addslashes($id)."'";
		
		try {
			$conn->exec($updateSql);
			$json["update_id"] = $id;
			$json["status"] = true;
		} catch(PDOExecption $e) {
			$conn->rollback();
			$json["alert"] = $conn->error;
			$json["status"] = false;
			// $json["sql"] = $updateSql;
		}
		
	}else{
		$json["alert"] = "No record information available!!";
	}

	return $json;
}
?>