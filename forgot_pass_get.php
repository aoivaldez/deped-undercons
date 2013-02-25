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

					if($count_affected < 1)

					{

						$select_admin = "SELECT * FROM school_admin  	
									   WHERE school_username = '$username '
									   AND sq_id = '$secret_question'
									   AND sq_answer = '$hash_secret_answer' ";
						$query_teacher = mysql_query($select_teacher)	or die(mysql_error());

						$count_affected_admin = mysql_num_rows($query_teacher);

						$count_affected_admin = mysql_num_rows($query_teacher);

						if()


					}else{





					}			   





	}
	else{


		header('location:index.php');
	}

?>
