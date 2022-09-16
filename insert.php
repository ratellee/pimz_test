<?php
require_once "common.php";

$log_obj = new class_debug();

$data = $_REQUEST['data'];

$query = "insert into exams_22_q3 set
			question = '".addslashes($data['question'])."',
			example1 = '".addslashes($data['example1'])."',
			example2 = '".addslashes($data['example2'])."',
			example3 = '".addslashes($data['example3'])."',
			example4 = '".addslashes($data['example4'])."',
			example5 = '".addslashes($data['example5'])."'";
mysqli_query($conn, $query);

$log_obj->debug($query);

echo json_encode($query);

?>