<?php
function insertEmployee($conn){
	$json = array();
	if (isset($_POST["list"]) && $_POST["list"]){

		$sqlDelete= "DELETE FROM employee";
		$conn->exec($sqlDelete);

        foreach ($_POST["list"] as $item) {
            $col = "id, employee_id, name, phone, email";	
            $val = "'".$item["id"]."', '".$item["employee_id"]."', '".$item["name"]."', '".$item["phone"]."', '".$item["email"]."'";
            $insertSql = "INSERT INTO employee ($col) VALUES ($val)";
            $conn->exec($insertSql);

        }

		try {
			$json["status"] = 200;
		} catch(PDOExecption $e) {
			$conn->rollback();
			$json["alert"] = $conn->errorInfo();
		}
	}else{
		$json["alert"] = "No record information available!!";
    }
    return $json;
}
?>