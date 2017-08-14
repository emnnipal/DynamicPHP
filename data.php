<?php
require_once('conn.php');
$var = array();
$sql = "SELECT * FROM `testComments` ORDER BY id DESC";
$result = mysqli_query($mysqli,$sql);
	if(mysqli_num_rows($result)){
//		while ($row = mysql_fetch_assoc($result, MYSQL_ASSOC))  {
        while($row = mysqli_fetch_assoc($result)) {
						$var[] = $row;
		}
	}
echo json_encode($var);
?>