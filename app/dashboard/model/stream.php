<?php
$PATH = isset($PATH) ? $PATH : "../../../";
include($PATH."_header.php");
include($PATH."_connect.php");
$conn->PATH = $PATH;

header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

$json = array();
$action = isset($_GET["action"]) ? $_GET["action"] : null;

$actionFile = $action.".php";
if (file_exists($actionFile)){
	
	include($actionFile);

	if (function_exists($action)){
		$json = $action($conn);
	}else{
		$json["alert"] = "Function not found!!!";
	}
}else{
	$json["alert"] = "File not found!!!";
}

	
$str =  json_encode($json);

echo "data: {$str}\n\n";

flush();
?>