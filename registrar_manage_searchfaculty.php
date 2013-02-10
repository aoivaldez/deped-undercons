<?php

	require('DBconnect.php');

	$faculty_name = $_POST['faculty_name'];
	$sch_id = $_POST['sch_id'];


	$search_string = "(f_firstname LIKE '%".$faculty_name."%' OR f_lastname LIKE '%".$faculty_name."%')";

	$query = "SELECT * FROM `school_faculty` WHERE {$search_string} AND $sch_id = `school_id` ";

	$result = mysql_query($query)or die(mysql_error("asdfasf"));

	$data = array();
	while ($row = mysql_fetch_array($result)){
		$data[] = array(
			'search_f_lastname' => $row['f_lastname'],
			'search_f_firstname' => $row['f_firstname'],
			'search_section' => $row['advisory_section'],
			'search_level' => $row['advisory_year'],

			);
		}

	echo json_encode($data);

?>