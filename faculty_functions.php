<?php
	include_once('DBconnect.php');

	$func_num = $_POST['func_num'];


	switch ($func_num) {
		case 1:
			get_all_schools();
			break;
		case 2:
			get_school_sections();
			break;
		

											
	}

	
	
?>
