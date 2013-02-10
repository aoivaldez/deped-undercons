<?php

	require('DBconnect.php');
	

	$adminname = $_POST['adminname'];
	
	$search_string = "(firstname LIKE '%".$adminname."%' OR lastname LIKE '%".$adminname."%')";

	$query = "SELECT * FROM `deped_accounts` WHERE {$search_string}";

	$result = mysql_query($query)or die(mysql_error());
	
	$data = array();
	while ($row = mysql_fetch_array($result)){
		$data[] = array(
			'adminfname' => $row['firstname'],
			'adminlname' => $row['lastname'],
			'deped_id' => $row['deped_id'],
			'position' => $row['position']
		);
		}

	echo json_encode($data);
?>