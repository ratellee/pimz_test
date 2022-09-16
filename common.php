<?php
class class_debug 
{
	function debug($str)
	{
		$fp = fopen("./log/debug_".date("Ymd").".log", 'a');
		
		if(is_array($str)) $str = print_r($str, 1);
		
		$msg = date("Y/m/d H:i:s")." ".$str."\n";
		
		fwrite($fp, $msg);
			
		fclose($fp);
	}
}

$conn = mysqli_connect("43.200.49.181:59516", "admin", "");
mysqli_select_db($conn, "test");

//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
//asdfasfd
?>