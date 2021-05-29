<?php
function time_workInsert($conn){
	$json = array();
	if (isset($_POST) && !empty($_POST)){
		include($conn->PATH."conf/getColumname.php");
		$field = getColumname($conn, "time_work");
		$col = "";	$val = "";	$c="";
		foreach ($_POST as $key=>$value) {
			if (in_array($key, $field)){
				$col.=$c;	$val.=$c;
				$col.=$key;
				$val.="'".addslashes($value)."'";
				$c=",";
			}
		}
		$val = str_replace("''", "NULL", $val);
		$insertSql = "INSERT INTO time_work (".$col.") VALUES (".$val.")";

		try {
			$conn->exec($insertSql);
			$json["last_id"] = (int)$conn->lastInsertId();
		} catch(PDOExecption $e) {
			$conn->rollback();
			$json["alert"] = $conn->errorInfo();
			//$json["sql"] = $insertSql;
		}
	}else{
		$json["alert"] = "No record information available!!";
	}

	return $json;
}
?>