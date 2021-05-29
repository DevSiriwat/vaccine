<?php
function employeeInsert($conn){
	$json = array();
	if (isset($_POST) && !empty($_POST)){
		include($conn->PATH."conf/getColumname.php");
		$field = getColumname($conn, "employee");
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
		$insertSql = "INSERT INTO employee (".$col.") VALUES (".$val.")";

		try {
			$conn->exec($insertSql);
			$json["last_id"] = (int)$conn->lastInsertId();
			$json["sql"] = $_POST;
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