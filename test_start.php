<?php
include_once "common.php";
$log_obj = new class_debug();

switch($_REQUEST['test_type'])
{
	case "1" : $option = ""; break;
	case "2" : $option = "order by rand()"; break;
	case "3" : $option = "order by rand() limit 25"; break;
}

$table_name = "exams_".date("YmdHis");

$query = "CREATE TABLE $table_name (
	no int(10) NOT NULL auto_increment,
	question int(10) NOT NULL,
	answer varchar(100) NULL,
	user_answer varchar(100) NULL,
	CONSTRAINT {$table_name}_PK PRIMARY KEY (no)
)
ENGINE=MEMORY
DEFAULT CHARSET=utf8
COLLATE=utf8_unicode_ci";
$log_obj->debug($query);
mysqli_query($conn, $query);

$query = "insert into $table_name(question, answer) select no, answer from exams_22_q3 $option";
$log_obj->debug($query);
mysqli_query($conn, $query);

header("Location: test_page.html?table_name=$table_name");
?>