<?php
	include_once('DBconnect.php');

	$func_num = $_POST['func_num'];


	switch ($func_num) {
		
		case 1:
			check_availability_username();
			break;
		case 2:
			change_username();
			break;
		case 3:
			check_match_password();
			break;
		case 4:
			change_password();
			break;
		case 5:	
			change_secret_question();
			break;
		case 6:	
			get_secret_question();
			break;								
											
	}

	
	function check_availability_username(){

		$username = $_POST['username'];

		$check_user_avail = "SELECT * 
							 FROM school_admin
							 WHERE school_username = '$username' ";

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

	function change_username(){

		session_start(); 

			$user_id_admin =   $_SESSION['user_id_regis'];

			$username = $_POST['username'];

			$update = "UPDATE school_admin SET school_username = '$username' WHERE school_admin_id = '$user_id_admin'"; 

                 	$query_change_username = mysql_query($update) or die (mysql_error());

                         if($query_change_username){

                 
                                 $return['error'] = "0";
                 				
                         }
                         else{

                         	 	$return['error'] = "1";
                        	
                         }

                         echo json_encode($return);


	}
	function check_match_password() {
		session_start(); 

			$user_id_admin =  $_SESSION['user_id_regis'];
			$password = $_POST['password'];

			$hash_pass = sha1($password);

		$getPasswordQuery = "SELECT * FROM school_admin WHERE school_admin_id = '$user_id_admin' AND school_password ='$hash_pass' ";

     	$passwordResult = mysql_query($getPasswordQuery) or die (mysql_error());

     	$match_count_pass = mysql_num_rows($passwordResult);

     	if($match_count_pass > 0){

     		$return['error'] = "1";
     	}
     	else{

     		$return['error'] = "0";
     	}

     	echo json_encode($return); 

	}

	function change_password(){
		session_start(); 

			$user_id_admin =  $_SESSION['user_id_regis'];
			$newpassword = $_POST['password'];

			$hash_pass = sha1($newpassword);


         $update_password = "UPDATE school_admin SET school_password = '$hash_pass' WHERE school_admin_id = '$user_id_admin' "; 

        $query_update_password =  mysql_query($update_password) or die(mysql_error());

        if($query_update_password){


        	$return['error'] = "0";

        }

        else{

        	$return['error'] = "1";
        }

       echo json_encode($return);
	}
	function change_secret_question(){

		session_start(); 

			$user_id_admin =  $_SESSION['user_id_regis'];
			$secretquestion = $_POST['secretquestion'];
			$secretanswer = $_POST['secretanswer'];	

			$hash_secretanswer = sha1($secretanswer);

			


         $update_secret_question = "UPDATE school_admin 
         					 SET sq_id = '$secretquestion',sq_answer ='$hash_secretanswer' 
         					 WHERE school_admin_id = '$user_id_admin' "; 

        $query_update_secret_question =  mysql_query($update_secret_question) or die(mysql_error());

        if($query_update_secret_question){

        	$return['error'] = "0";
        }

        else{

        	$return['error'] = "1";
        }

       echo json_encode($return);


	}

	function get_secret_question()
	{
		session_start(); 

			$user_id_admin =  $_SESSION['user_id_regis'];

		$get_secret_question = "SELECT * FROM school_admin a 
								LEFT JOIN secret_questions b ON(a.sq_id = b.sq_id)	
								WHERE school_admin_id = $user_id_admin";	

		$query_get_sq = mysql_query($get_secret_question) or die(mysql_error());

		while ($row = mysql_fetch_array($query_get_sq))
		    {
		      $secretquestion= $row['question_name'];
		       
		    }


		    if($query_get_sq)
		    {
		    	$data['secret_question'] = $secretquestion;

		    }

		    else{

		    	$data['secret_question'] = "0";

		    }

		    echo json_encode($data);
	}

?>
