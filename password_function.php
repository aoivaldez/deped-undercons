<?php
	include_once('DBconnect.php');

	$func_num = $_POST['func_num'];


	switch ($func_num) {
		
		case 1:
			change_password();
			break;
		
								
											
	}

	function change_password(){


		$user_id = $_POST['user_id'];

		$account_type = $_POST['account_type'];

		$password = $_POST['password'];

		$pass_hash= sha1($password);

		if($account_type == "registrar"){

				$change_password = "UPDATE  school_admin 
									SET school_password = '$pass_hash' 
									WHERE school_admin_id= '$user_id' ";			
		}
		else{

				$change_password = "UPDATE  school_faculty 
									SET password = '$pass_hash' 
									WHERE faculty_id= '$user_id' ";	

		}


		$query_change_pass = mysql_query($change_password) or die(mysql_error());

		if($query_change_pass){

			$data['error'] = "0";
		}else{

			$data['error'] = "1";

		}

		echo json_encode($data);
	}

	
	
?>
