<?php
function bookingList($conn){
	$json = array();
	$employee_id = isset($_GET["employee_id"]) ? $_GET["employee_id"] : (isset($_POST["employee_id"]) ? $_POST["employee_id"] : null);
	
	$sql = "SELECT book.id AS book_id, book.employee_id AS book_employee_id, book.date_work_id AS book_date_work_id, book.time_work_id AS book_time_work_id,
			dw.id AS date_work_id, dw.date AS date_work_date,
			tw.id AS time_work_id, tw.time_start AS time_work_time_start, tw.time_end AS time_work_time_end, tw.people AS time_work_people
			FROM book 
			LEFT JOIN date_work AS dw
			ON book.date_work_id = dw.id
			LEFT JOIN time_work AS tw
			ON book.time_work_id = tw.id
			WHERE book.employee_id = '".$employee_id."'";

	$query = $conn->query($sql);
	$json["instance"] = array();
	while ($instance=$query->fetch(PDO::FETCH_ASSOC)) {
		$json["instance"][] = $instance;
	}

	return $json;
}	
?>