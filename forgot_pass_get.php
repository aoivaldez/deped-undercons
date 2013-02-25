<?php
	include_once('DBconnect.php');


	if(isset($_POST['verify_button'])){

		$username = $_POST['user_name'];
		$secret_question = $_POST['secret_question'];
		$secret_answer = $_POST['answer'];

		$hash_secret_answer = sha1($secret_answer);


					$select_teacher = "SELECT * FROM school_faculty  	
									   WHERE username = '$username '
									   AND sq_id = '$secret_question'
									   AND sq_answer = '$hash_secret_answer' ";
					$query_teacher = mysql_query($select_teacher)	or die(mysql_error());

					$count_affected_teacher = mysql_num_rows($query_teacher);

					while($row = mysql_fetch_array($query_teacher)){


							$id_teacher = $row['faculty_id'];
						}

					if($count_affected_teacher < 1)

					{

						$select_admin = "SELECT * FROM school_admin  	
									   WHERE school_username = '$username '
									   AND sq_id = '$secret_question'
									   AND sq_answer = '$hash_secret_answer' ";
						$query_admin = mysql_query($select_admin)	or die(mysql_error());

						$count_affected_admin = mysql_num_rows($query_admin);

						while($row1 = mysql_fetch_array($query_admin)){


							$id_admin = $row1['school_admin_id'];
						}

						

						if($count_affected_admin < 1){

							header("location:forgot_pass.php?error_verify=1");

						}
						else{

							header("location:change_password.php?account_type=registrar&id=".$id_admin."");
						}


					}else{


						header("location:change_password.php?account_type=teacher&id=".$id_teacher."");


					}			   





	}
	else{


		header('location:index.php');
	}

?>
