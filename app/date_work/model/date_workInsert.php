<?php
function date_workInsert($conn){
	$json = array();
	if (isset($_POST) && !empty($_POST)){
		include($conn->PATH."conf/getColumname.php");
		$field = getColumname($conn, "date_work");
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
		$insertSql = "INSERT INTO date_work (".$col.") VALUES (".$val.")";

		try {
			$conn->exec($insertSql);
			$json["last_id"] = (int)$conn->lastInsertId();

			$date_work_id = (int)$conn->lastInsertId();

			$col1 = "date_work_id, time_start, time_end";
			$time_start1 = "08:30";
			$time_end1 = "09:30";
			$val1 = "'".$date_work_id."' , '".$time_start1."', '".$time_end1."'";
			$insertSql1 = "INSERT INTO time_work ($col1) VALUES ($val1)";
			$conn->exec($insertSql1);

			$time_start2 = "09:30";
			$time_end2 = "10:30";
			$val2 = "'".$date_work_id."' , '".$time_start2."', '".$time_end2."'";
			$insertSql2 = "INSERT INTO time_work ($col1) VALUES ($val2)";
			$conn->exec($insertSql2);

			$time_start3 = "10:30";
			$time_end3 = "11:30";
			$val3 = "'".$date_work_id."' , '".$time_start3."', '".$time_end3."'";
			$insertSql3 = "INSERT INTO quarter ($col1) VALUES ($val3)";
			$conn->exec($insertSql3);

			$time_start4 = "11:30";
			$time_end4 = "12:30";
			$val4 = "'".$date_work_id."' , '".$time_start4."', '".$time_end4."'";
			$insertSql4 = "INSERT INTO time_work ($col1) VALUES ($val4)";
			$conn->exec($insertSql4);

			$time_start5 = "12:30";
			$time_end5 = "13:30";
			$val5 = "'".$date_work_id."' , '".$time_start5."', '".$time_end5."'";
			$insertSql5 = "INSERT INTO time_work ($col1) VALUES ($val5)";
			$conn->exec($insertSql5);

			$time_start6 = "13:30";
			$time_end6 = "14:30";
			$val6 = "'".$date_work_id."' , '".$time_start6."', '".$time_end6."'";
			$insertSql6 = "INSERT INTO time_work ($col1) VALUES ($val6)";
			$conn->exec($insertSql6);

			$time_start7 = "14:30";
			$time_end7 = "15:30";
			$val7 = "'".$date_work_id."' , '".$time_start7."', '".$time_end7."'";
			$insertSql7 = "INSERT INTO time_work ($col1) VALUES ($val7)";
			$conn->exec($insertSql7);

			$time_start8 = "15:30";
			$time_end8 = "16:30";
			$val8 = "'".$date_work_id."' , '".$time_start8."', '".$time_end8."'";
			$insertSql8 = "INSERT INTO time_work ($col1) VALUES ($val8)";
			$conn->exec($insertSql8);
			

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