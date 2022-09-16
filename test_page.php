<?php
include_once "common.php";
$log_obj = new class_debug();

$table_name = $_REQUEST['table_name'];

$query = "select * 
			from $table_name a left join exams_22_q3 b 
			on a.question = b.no
			where a.user_answer is null order by b.no limit 1";
$log_obj->debug($query);
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

if(mysqli_num_rows($result) == 0)
{
	header("Location: test_result.html?table_name=$table_name");
}

if($_REQUEST['action'] == 'get_question')
{
	echo json_encode($data, 1);
}
else if($_REQUEST['action'] == 'set_user_answer')
{
	$query = "update $table_name set user_answer = '".$_REQUEST['user_answer']."' where no=".$data['no'];
	$log_obj->debug($query);
	mysqli_query($conn, $query);
}
?>