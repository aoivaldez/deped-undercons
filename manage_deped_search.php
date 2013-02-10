<?php

	$users = $_POST['users'];
	$school = $_POST['school'];
	$schoolyear = $_POST['schoolyear'];
	$district = $_POST['district'];
	$adminname = $_POST['adminname'];



	$data = array();
		$data[] = array(
			'users1' => $users,
			'school1' => $school,
			'schoolyear1' => $schoolyear,
			'district1' => $district,
			'adminname1' => $adminname
		);

	echo json_encode($data);



?>