<?php
	include_once('DBconnect.php');

	$func_num = $_POST['func_num'];


	switch ($func_num) {
		
		case 1:
			check_availability_username();
			break;
		case 2:
			;
			break;
		case 3:
			;
			break;					
											
	}

	
	function check_availability_username(){

		$username = $_POST['username'];

		$check_user_avail = "SELECT * 
							 FROM school_faculty
							 WHERE username = '$username' ";

		$query = mysql_query($check_user_avail)	or die(mysql_error());
		
		$match_count = mysql_num_rows($query);				 

		if($match_count > 0)
		{
			$data['error'] = "1";

		}
		else{

			$data['error'] = "0";
		}

		echo json_encode($data);
	}

	

?>
