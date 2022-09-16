<?php
require_once "common.php";
$table_name = $_REQUEST['table_name'];

if($_REQUEST['action'] == 'get_result')
{
	$query = "select * from $table_name";
	$result = mysqli_query($conn, $query);
	$arr_result = array();
	while($data = mysqli_fetch_assoc($result))
	{
		$arr_result[] = $data;
	}
	
	echo json_encode($arr_result);
}
else if($_REQUEST['action'] == 'delete_result')
{
	$query = "drop table $table_name";
	mysqli_query($conn, $query);
}
?>