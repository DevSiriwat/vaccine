<?php
function saveMember($conn){
	$json = array();
	$id = isset($_GET["id"]) ? $_GET["id"] : (isset($_POST["id"]) ? $_POST["id"] : null);
	if (isset($_POST)){
		$sql_check = "SELECT * FROM member WHERE id='".$id."'";
		$query_check = $conn->query($sql_check);
		$count = $query_check->rowCount();
		if($count == 0){
			include($conn->PATH."conf/getColumname.php");
			$field = getColumname($conn, "member");
			$col = "";	$val = "";	$c="";
			foreach ($_POST as $key=>$value) {
				if (in_array($key, $field)){
					$col.=$c;	$val.=$c;
					$col.=$key;
					$val.="'".$value."'";
					$c=",";
				}
			}
			$val = str_replace("''", "NULL", $val);
			$insertSql = "INSERT INTO member (".$col.") VALUES (".$val.")";

			try {
				$conn->exec($insertSql);
				$json["last_id"] = $conn->lastInsertId();
			} catch(PDOExecption $e) {
				$conn->rollback();
				$json["alert"] = $conn->errorInfo();
			}
		}else{
			$json["alert"] = "system have data member";
		}
	}else{
		$json["alert"] = "No record information available!!";
	}

	return $json;
}
?>