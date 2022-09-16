<?php
require_once "common.php";

$query = "select * from exams_22_q3";
$result = mysqli_query($conn, $query);

$str = "<table border=1>
	<tr>
		<td>문제</td>
		<td>보기1</td>
		<td>보기2</td>
		<td>보기3</td>
		<td>보기4</td>
		<td>보기5</td>
	</tr>";
while($data = mysqli_fetch_assoc($result))
{
	$anser[$data['anser']] = "style='color:red'";
	
	$str .= "
	<tr>
		<td style='background-color:#aaa'>".$data['question']."</td>
		<td ".$anser[1].">".$data['example1']."</td>
		<td ".$anser[2].">".$data['example2']."</td>
		<td ".$anser[3].">".$data['example3']."</td>
		<td ".$anser[4].">".$data['example4']."</td>
		<td ".$anser[5].">".$data['example5']."</td>
	</tr>";
}
	$str .= "</table>";
	echo $str;
?>