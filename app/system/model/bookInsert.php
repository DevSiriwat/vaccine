<?php
function bookInsert($conn){
	$json = array();
	if (isset($_POST) && !empty($_POST)){
        
        $employee_id = isset($_GET["employee_id"]) ? $_GET["employee_id"] : (isset($_POST["employee_id"]) ? $_POST["employee_id"] : null);
        $sqlCheck = "SELECT * FROM book WHERE employee_id = '".$employee_id."'";
        $queryCheck = $conn->query($sqlCheck);
        //count numrows
        $count = $queryCheck->rowCount();

        if($count > 0){

            $json["status"] = 1;

        }else{
            include($conn->PATH."conf/getColumname.php");
            $field = getColumname($conn, "book");
            $col = "";
            $val = "";
            $c="";
            foreach ($_POST as $key=>$value) {
                if (in_array($key, $field)) {
                    $col.=$c;
                    $val.=$c;
                    $col.=$key;
                    $val.="'".addslashes($value)."'";
                    $c=",";
                }
            }
            $val = str_replace("''", "NULL", $val);
            $insertSql = "INSERT INTO book (".$col.") VALUES (".$val.")";

            try {
                $conn->exec($insertSql);
                $json["last_id"] = (int)$conn->lastInsertId();
            } catch (PDOExecption $e) {
                $conn->rollback();
                $json["alert"] = $conn->errorInfo();
                //$json["sql"] = $insertSql;
            }
        }

	}else{
		$json["alert"] = "No record information available!!";
	}

	return $json;
}
?>