<?php

	require('DBconnect.php');

	$school = $_POST['school'];

	$search_string = "(school_name LIKE '%".$school."%')";
	
	$query = "SELECT * FROM `schools` WHERE {$search_string}";

	$result = mysql_query($query)or die(mysql_error());
	
	$data = array();
	while ($row = mysql_fetch_array($result)){
		$data[] = array(
			'search_school' => $row['school_name'],
			'search_school_id' => $row['school_id'],
			'search_address' => $row['school_address']
		);
	}

	echo json_encode($data);



?>