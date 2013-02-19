<?php
	include_once('DBconnect.php'); 



	$switch_num = $_POST['swtch_numbr'];


	switch ($switch_num) {
		case 1:			
			save_grades();
			break;
		case 2:
			get_grades_archrives();
			break;
		case 3:
			edit_grades();
			break;
		case 4:
			handle_subjects_list_check();
			break;
		case 5:
			get_grades_archrives_registrar();
			break;
		case 6:
			check_grades_archive_status();
			break;
		case 7:
			send_to_deped_grades();
			break;
		case 8:
			check_grades_availability_deped();
			break;
		case 9:
			get_sent_status_updates_deped();
			break;
		case 10:
			check_exist_public_key();
			break;									
		case 11:
			get_public_key();
			break;
		case 12:
			change_public_key_teacher();
			break;
		case 13:
			authenticate_grades_sent();
			break;	
		case 14:
			check_authentic_grades();
			break;	
																
	}
	function save_grades(){
		session_start();

		$school_id = $_SESSION['school_id'];
		$faculty_id	= $_SESSION['user_id_fac'];
		$subject_id = $_POST['subject_id'];
		$year_grade_level = $_POST['year_level'];
		$subject_handeler_id = $_POST['subject_handler_id'];
		$student_grades_boy = $_POST['student_grades_boy'];
		$student_grades_girl = $_POST['student_grades_girl'];
		$section_id = $_POST['section_id'];


		$save_grades_boy = "INSERT INTO registrar_grade_archive 
										(school_id,
										 subject_id,
										 grade,
										 advisor_faculty_id,
										 subject_handler_id,
										 year_level,
										 student_id,
										 section_id
										 ) VALUES";

		$save_grades_girl = "INSERT INTO registrar_grade_archive 
										(school_id,
										 subject_id,
										 grade,
										 advisor_faculty_id,
										 subject_handler_id,
										 year_level,
										 student_id,
										 section_id
										) VALUES";

						
						
						$values_girl = array();
						$values_boy = array();

						foreach ($student_grades_boy as $key=>$data) {
								    $student_id_B= $data['studnt_B_id'];
								    $grade_B = $data['studnt_grade_B'];

								    $values_boy[$key] = '(\''.$school_id.'\', \''.$subject_id.'\',\''.$grade_B.'\',\''.$faculty_id.'\',\''.$subject_handeler_id.'\',\''.$year_grade_level.'\',\''.$student_id_B.'\',\''.$section_id.'\')';

								}

								
								$values_boy = implode(', ', $values_boy);

								$ready_save_grades_boy = $save_grades_boy . $values_boy;

						foreach ($student_grades_girl as $key=>$data) {
								    $student_id_G= $data['studnt_G_id'];
								    $grade_G = $data['studnt_grade_G'];

								    $values_girl[$key] = '(\''.$school_id.'\', \''.$subject_id.'\',\''.$grade_G.'\',\''.$faculty_id.'\',\''.$subject_handeler_id.'\',\''.$year_grade_level.'\',\''.$student_id_G.'\',\''.$section_id.'\')';

								}

								
								$values_girl = implode(', ', $values_girl);

								$ready_save_grades_girl = $save_grades_girl . $values_girl;	


								$save_grades_boy = mysql_query($ready_save_grades_boy) or die(mysql_error());

								$save_grades_girl = mysql_query($ready_save_grades_girl) or die(mysql_error());


						if(!$save_grades_girl && !$save_grades_boy ){
							die('error insert'.mysql_error());

							$return['error'] = 1;
							}
							else{

								$return['error'] =0;
							}

				echo json_encode($return);

	}

	  function get_grades_archrives(){

	  	session_start();
	  	$school_id = $_SESSION['school_id'];
	  	$faculty_id	= $_SESSION['user_id_fac'];
	  	$subject_id = $_POST['subject_id'];
		
		  	 $select_students_grades_boys = "SELECT  	a.firstname,
					 									a.middlename,
					 									a.lastname,
					 									a.student_id,
					 									b.student_id,
					 									b.grade

					 					FROM 	students a
					 					LEFT JOIN registrar_grade_archive b ON (a.student_id=b.student_id)
					 					WHERE a.gender = 'male' 
					 					AND b.subject_id = '$subject_id'	
					 					AND b.advisor_faculty_id ='$faculty_id'
					 					AND b.school_id ='$school_id '
					 							";


			$select_students_grades_girls = "SELECT  	a.firstname,
														a.middlename,
														a.lastname,
														a.student_id,
														b.student_id,
														b.grade

										FROM 	students a
										LEFT JOIN registrar_grade_archive b ON (a.student_id=b.student_id)
										WHERE a.gender = 'female' 
										AND b.subject_id = '$subject_id'	
										AND b.advisor_faculty_id ='$faculty_id'
										AND b.school_id ='$school_id '
												";									


								$get_grades_boy = mysql_query($select_students_grades_boys) or die(mysql_error());

								$get_grades_girl = mysql_query($select_students_grades_girls) or die(mysql_error());

								$data_grades_boys=array();
								$data_grades_girls=array();

								

				 while($row = mysql_fetch_array($get_grades_boy)){

				 	$data_grades_boys[]=array(
				 		'fname_b'=>$row['firstname'],
						'mname_b' => $row['middlename'],
				 		'lname_b' => $row['lastname'],
						'studnt_id_b' => $row['student_id'],
				 		'grade_b' => $row['grade'],
						); 
				 }

				 while($row2 = mysql_fetch_assoc($get_grades_girl)){

				 	$data_grades_girls[]=array(
				 		'fname_g'=>$row2['firstname'],
				 		'mname_g' => $row2['middlename'],
				 		'lname_g' => $row2['lastname'],
				 		'studnt_id_g' => $row2['student_id'],
				 		'grade_g' => $row2['grade'],
				 		); 
				 }

				 $data_grades = array(
						    'boys'  => $data_grades_boys,
						    'girls' => $data_grades_girls
						);
				
				
				echo json_encode($data_grades);

				
	 }

	 function edit_grades(){
	 	session_start();

		$school_id = $_SESSION['school_id'];
		$faculty_id	= $_SESSION['user_id_fac'];
		$subject_id = mysql_real_escape_string($_POST['subject_id']);
		$year_grade_level = mysql_real_escape_string($_POST['year_level']);
		$subject_handeler_id = mysql_real_escape_string($_POST['subject_handler_id']);
		$student_grades_boy = $_POST['student_grades_boy'];
		$student_grades_girl = $_POST['student_grades_girl'];

		

		

		$vaues_girl = array();
		$values_boy = array();

		


		foreach ($student_grades_boy as $key=>$data) {
								    $student_id_B= mysql_real_escape_string($data['studnt_B_id']);
								    $grade_B = mysql_real_escape_string($data['studnt_grade_B']);

			$values_boy[$key] = "UPDATE registrar_grade_archive SET grade = ".$grade_B." WHERE student_id = ".$student_id_B." AND subject_id = ".$subject_id." AND school_id = ".$school_id." AND advisor_faculty_id = ".$faculty_id." AND subject_handler_id = ".$subject_handeler_id." ";


			
			$save_grades_boy = mysql_query($values_boy[$key]) or die(mysql_error());


			


							
			}

							

		foreach ($student_grades_girl as $key=>$data) {
								    $student_id_G= mysql_real_escape_string($data['studnt_G_id']);
								    $grade_G = mysql_real_escape_string($data['studnt_grade_G']);

			$values_girl[$key] = "UPDATE registrar_grade_archive SET grade = ".$grade_G." WHERE student_id = ".$student_id_G." AND subject_id = ".$subject_id." AND school_id = ".$school_id." AND advisor_faculty_id = ".$faculty_id." AND subject_handler_id = ".$subject_handeler_id." ";

			$save_grades_girl = mysql_query($values_girl[$key]) or die(mysql_error());

			


							
			}	



						
	 }	

	 function handle_subjects_list_check(){
	 	session_start();

	 	$school_id = $_SESSION['school_id'];
		$subject_handeler_id= $_SESSION['user_id_fac'];

		$select_subjects_handle= "SELECT *
								
								FROM subject_assigned_handler a
								LEFT JOIN subjects b ON (a.subject_id = b.subject_id)
								LEFT JOIN school_faculty c ON (c.faculty_id = a.faculty_advisor_id)
								LEFT JOIN section d ON(d.section_id = a.section_id)
								WHERE a.faculty_id='$subject_handeler_id' ";

				$get_subjects_handle = mysql_query($select_subjects_handle) or die(mysql_error());


				$data=array();

			while($row = mysql_fetch_array($get_subjects_handle)){

				$data[]= array( 
					'sec_name'=>$row['section_name'],
					'sub_name'=>$row['subject_name'],
					'year_level'=>$row['level'],
					'last_name'=>$row['f_lastname'],
					'first_name'=>$row['f_firstname'],
					'middle_name'=>$row['f_middlename'],
					'sec_id'=>$row['section_id'],
					'subjct_id'=>$row['subject_id'],


					);

			}

			echo json_encode($data);

			//select * from registrar_grade_archive where subject_handler_id = '2' and subject_id ='2' 

	 }


	  function get_grades_archrives_registrar(){

	  	session_start();
	  	$school_id = $_SESSION['school_id'];
	  	$faculty_id	= $_POST['advisor_id'];
	  	$subject_id = $_POST['subject_id'];
		
		  	 $select_students_grades_boys = "SELECT  	a.firstname,
					 									a.middlename,
					 									a.lastname,
					 									a.student_id,
					 									b.student_id,
					 									b.grade

					 					FROM 	students a
					 					LEFT JOIN registrar_grade_archive b ON (a.student_id=b.student_id)
					 					WHERE a.gender = 'male' 
					 					AND b.subject_id = '$subject_id'	
					 					AND b.advisor_faculty_id ='$faculty_id'
					 					AND b.school_id ='$school_id '
					 							";


			$select_students_grades_girls = "SELECT  	a.firstname,
														a.middlename,
														a.lastname,
														a.student_id,
														b.student_id,
														b.grade

										FROM 	students a
										LEFT JOIN registrar_grade_archive b ON (a.student_id=b.student_id)
										WHERE a.gender = 'female' 
										AND b.subject_id = '$subject_id'	
										AND b.advisor_faculty_id ='$faculty_id'
										AND b.school_id ='$school_id '
												";									


								$get_grades_boy = mysql_query($select_students_grades_boys) or die(mysql_error());

								$get_grades_girl = mysql_query($select_students_grades_girls) or die(mysql_error());

								$data_grades_boys=array();
								$data_grades_girls=array();

								

				 while($row = mysql_fetch_array($get_grades_boy)){

				 	$data_grades_boys[]=array(
				 		'fname_b'=>$row['firstname'],
						'mname_b' => $row['middlename'],
				 		'lname_b' => $row['lastname'],
						'studnt_id_b' => $row['student_id'],
				 		'grade_b' => $row['grade'],
						); 
				 }

				 while($row2 = mysql_fetch_assoc($get_grades_girl)){

				 	$data_grades_girls[]=array(
				 		'fname_g'=>$row2['firstname'],
				 		'mname_g' => $row2['middlename'],
				 		'lname_g' => $row2['lastname'],
				 		'studnt_id_g' => $row2['student_id'],
				 		'grade_g' => $row2['grade'],
				 		); 
				 }

				 $data_grades = array(
						    'boys'  => $data_grades_boys,
						    'girls' => $data_grades_girls
						);
				
				
				echo json_encode($data_grades);

				
	 }


	function check_grades_archive_status(){


	  	session_start();
	  		$school_id = $_SESSION['school_id'];
	  		$section_id = $_POST['section_id'];

			$get_section = "SELECT *
							FROM section a
							LEFT JOIN advisory_sections b ON(a.section_id = b.section_id)
							LEFT JOIN school_faculty c ON (b.faculty_id = c.faculty_id)
							
							WHERE a.school_id = '$school_id'
							AND a.availability_status = '1'
							AND a.section_id = '$section_id'  
							ORDER BY section_level ASC";

							



							$result=mysql_query($get_section)or die(mysql_error());

							$count_sections = mysql_num_rows($result);

								$i=0;
			 
									
						while ($row = mysql_fetch_array($result))
									{
										$item = array(
										   'sec_id'=>$row['section_id'],
										   'sec_name'=>$row['section_name'],
										   'sec_dept'=>$row['section_department'],
										   'sec_lvl'=>$row['section_level'],
										  'advisory_id'=>$row['advisory_id'],
										  'first_name'=>$row['f_firstname'],
										  'last_name'=>$row['f_lastname'],
										  'middle_name'=>$row['f_middlename'],
										  'advisor_id'=>$row['faculty_id'],
										);


						$get_subjects = "SELECT subject_name
											FROM subjects  
											WHERE level = '".$row['section_level']."' ";


							$result_get_subjects =mysql_query($get_subjects)or die(mysql_error());
							
							$subjects_count = mysql_num_rows($result_get_subjects);


						$check_archive_subjects = " SELECT b.subject_name 
													FROM registrar_grade_archive a
													LEFT JOIN subjects b ON(a.subject_id=b.subject_id)
													LEFT JOIN section c ON(a.section_id = c.section_id)													
													WHERE a.advisor_faculty_id ='".$row['faculty_id']."'
													AND a.section_id ='".$row['section_id']."'

													GROUP BY b.subject_name ASC
													 " ;

						 $query_checking =mysql_query($check_archive_subjects)or die(mysql_error());

						$subjects_count_sent = mysql_num_rows($query_checking);

									
								if($subjects_count_sent == $subjects_count){
								        $item['status']='complete';
								    }
								    else{
								        $item['status']='incomplete';
								    }

							}



		echo json_encode($item);					

	}


	function send_to_deped_grades(){
			session_start();
	  		$school_id = $_SESSION['school_id'];
	  		$section_id = $_POST['section_id'];
	  		$today  = date("Y-m-d", strtotime(date("F j, Y")));

	  		$year = date("Y");

	  		$select_grade_exist  = "SELECT * FROM deped_grade_archive 
	  								WHERE school_id = '$school_id'
	  								AND section_id = '$section_id'
	  								AND school_year = '$year' ";

	  					$query_select_grade_exist = mysql_query($select_grade_exist) or die(mysql_error());

	  					$count_affected = mysql_num_rows($query_select_grade_exist);
	  					
	  		if($count_affected){

	  					$select_grades1 = "SELECT * FROM registrar_grade_archive a

	  							LEFT JOIN students b ON(a.student_id = b.student_id)


	  							WHERE a.section_id = '$section_id' 
	  							
	  							";


	  							$result1=mysql_query($select_grades1)or die(mysql_error());


	  							while ($row1 = mysql_fetch_array($result1))
									{
		
										   $sec_id=$row1['section_id'];
										    $advisor_id=$row1['advisor_faculty_id'];
										   $subject_id=$row1['subject_id'];
										   $firstname=$row1['firstname'];
										   $middlename=$row1['middlename'];
										  $lastname=$row1['lastname'];
										  $age=$row1['age'];
										  $gender=$row1['gender'];
										   $address=$row1['address'];
										  $years_in_school=$row1['years_in_school'];
										  $grade=$row1['grade'];
										  $attendance=$row1['attendance'];


										$update_exist_grade_deped = "UPDATE deped_grade_archive 
																	 SET grade= '".$row1['grade']."',
																	 	status_acceptance = 'Revised'
																	 WHERE first_name = '".$row1['firstname']."'
																	 AND middle_name = '".$row1['middlename']."'
																	 AND last_name = '".$row1['lastname']."'
																	 AND section_id = '".$row1['section_id']."'
																	 AND school_id = '".$school_id."'
																	 AND subject_id = '".$row1['subject_id']."'

																	 ";


								$query_update_exist_grade_deped = mysql_query($update_exist_grade_deped) or die(mysql_error());
										  
									}

										if($query_update_exist_grade_deped){

												$data['success']='1';
											}

											else{
												$data['success']='0';

											}

	  		}

	  		else{			

	  		


	  		$select_grades = "SELECT * FROM registrar_grade_archive a

	  							LEFT JOIN students b ON(a.student_id = b.student_id)


	  							WHERE a.section_id = '$section_id' 
	  							
	  							";


	  							$result=mysql_query($select_grades)or die(mysql_error());

	  				
							
							$insert_info = array();	

							$insert_grade_deped = "INSERT INTO deped_grade_archive 
																			(first_name,
																			 middle_name,
																			 last_name,
																			 grade,
																			 school_id,
																			 subject_id,
																			 section_id,
																			 advisor_id,
																			 year_in_school,
																			 school_year,
																			 age,
																			 gender,
																			 address,
																			 attendance,
																			 submission_date) VALUES ";

							$count = 0;

	  							while ($row = mysql_fetch_array($result))
									{
		
										   $sec_id=$row['section_id'];
										    $advisor_id=$row['advisor_faculty_id'];
										   $subject_id=$row['subject_id'];
										   $firstname=$row['firstname'];
										   $middlename=$row['middlename'];
										  $lastname=$row['lastname'];
										  $age=$row['age'];
										  $gender=$row['gender'];
										   $address=$row['address'];
										  $years_in_school=$row['years_in_school'];
										  $grade=$row['grade'];
										  $attendance=$row['attendance'];


										$insert_info[$count]="	('".$row['firstname']."', 
																'".$row['middlename']."',
																'".$row['lastname']."',
																'".$row['grade']."',
																'".$school_id."',
																'".$row['subject_id']."',
																'".$section_id."',
																'".$row['advisor_faculty_id']."',
																'".$row['years_in_school']."',
																'".$year."',
																'".$row['age']."',
																'".$row['gender']."',
																'".$row['address']."',
																'".$row['attendance']."',
																'".$today."') ";


											$count++;
										  
									}

										$insert_info = implode(', ', $insert_info);

								$ready_insert_grades = $insert_grade_deped . $insert_info;	
									
									$query_insert_deped_grades = mysql_query($ready_insert_grades) or die(mysql_error());


									if($query_insert_deped_grades){

										$data['success']='1';
									}

									else{
										$data['success']='0';

									}
						}			
			echo json_encode($data);						
									
	}

	function check_grades_availability_deped(){
				session_start();
					$school_id = $_SESSION['school_id'];
			  		$section_id = $_POST['section_id'];
			  		$today  = date("Y");


			  		$select_grades_deped = "SELECT * 
			  								FROM deped_grade_archive 
			  								WHERE school_id='$school_id'
			  								AND section_id='$section_id'
			  								AND year(submission_date) ='$today' ";


			  			$query_check_grades= mysql_query($select_grades_deped) or die (mysql_error());
			  			

			  			$check_count = mysql_num_rows($query_check_grades);


			  			if($check_count == 0){

			  				$return['checked'] = "0";
			  			}
			  			else{


			  				$select_status_sent_grade = "SELECT status_acceptance,section_id 
			  											FROM deped_grade_archive
			  											WHERE school_id='$school_id'
						  								AND section_id='$section_id'
						  								AND year(submission_date) ='$today'
						  								GROUP BY section_id ";


						  		$query_status_sent_grade= mysql_query($select_status_sent_grade) or die (mysql_error());

						  		while($result_status = mysql_fetch_array($query_status_sent_grade)){



						  			$checked_result = $result_status['status_acceptance'];
						  		}




						  		if($checked_result == 'Rejected')
						  		{

						  			$return['checked'] = "0";

						  		}

						  		else{

			  						$return['checked'] = "1";
			  					}
			  			}

			echo json_encode($return);								

	}

	function get_sent_status_updates_deped(){

		session_start();
			$school_id = $_SESSION['school_id'];

		$select_sent_deped = "SELECT * FROM deped_grade_archive a 
							  LEFT JOIN advisory_sections b ON (a.advisor_id = b.faculty_id)	
							  LEFT JOIN school_faculty c ON(b.faculty_id = c.faculty_id)
							  LEFT JOIN section d ON(a.section_id = d.section_id)
							  WHERE a.school_id ='$school_id'
							  GROUP BY a.section_id";



							$result=mysql_query($select_sent_deped)or die(mysql_error());

							
			 					$count=0;
									
						while ($row = mysql_fetch_array($result))
							{
										$item[$count] = array(
										   'sec_id'=>$row['section_id'],
										   'sec_name'=>$row['section_name'],
										   'sec_lvl'=>$row['section_level'],
										  'advisory_id'=>$row['advisory_id'],
										  'first_name'=>$row['f_firstname'],
										  'last_name'=>$row['f_lastname'],
										  'middle_name'=>$row['f_middlename'],
										  'advisor_id'=>$row['faculty_id'],
										  'status' => $row['status_acceptance'],
										);


										if($row['status_acceptance'] != ""){


											$item[$count]['status'] = $row['status_acceptance'];
										}
										else{

											$item[$count]['status'] = "pending";
										}

									$count++;	
							}	

		echo json_encode($item);		

	}

	function check_exist_public_key(){
		session_start();
			$school_id = $_SESSION['school_id'];

			$section_id = $_POST['sec_id'];

			$select_pk = "	SELECT * FROM section 
							WHERE school_id = '$school_id' 
							AND section_id = '$section_id'  ";

			$query = mysql_query($select_pk) or die (mysql_error());
			
			while ( $row = mysql_fetch_assoc($query)) {

						$public_key = $row['public_key'];
								
							}


			$return['public_key'] = $public_key;
			
			echo json_encode($return);								
	}

	function get_public_key()
	{

		session_start();
			$school_id = $_SESSION['school_id'];

			$section_id = $_POST['section_id'];

			$select_pk = "	SELECT * FROM section 
							WHERE school_id = '$school_id' 
							AND section_id = '$section_id'  ";

			$query = mysql_query($select_pk) or die (mysql_error());
			
			while ( $row = mysql_fetch_assoc($query)) {

						$public_key = $row['public_key'];
								
							}


			$return['public_key'] = $public_key;
			
			echo json_encode($return);





	}

	function change_public_key_teacher() {
		session_start();
			$school_id = $_SESSION['school_id'];

		 $new_public_key = $_POST['public_key_transfrm'];

			$section_id = $_POST['sec_id'];

		$update_public_key_teacher  = "UPDATE section 
									   SET public_key = '$new_public_key'
									   WHERE school_id ='$school_id'
									   AND section_id = '$section_id'  ";

		$query = mysql_query($update_public_key_teacher )	or die (mysql_error());						   	




	}

	function authenticate_grades_sent(){
		session_start();
			$school_id = $_SESSION['school_id'];

			$section_id = $_POST['sec_id'];


			$select_pk = "	SELECT * FROM section 
							WHERE school_id = '$school_id' 
							AND section_id = '$section_id'  ";

			$query = mysql_query($select_pk) or die (mysql_error());
			
			while ( $row = mysql_fetch_assoc($query)) {

						$public_key = $row['public_key'];
								
							}

						if ($public_key) {

							
									    $leng_public_key = strlen($public_key);
									    $priv_key_extract = "";
									    $array_pki = array();



									    for ($i=0; $i <=$leng_public_key-1 ; $i++) {
									        array_push($array_pki,$public_key[$i]);
									    }
									    foreach ($array_pki as $key  => $value) {
									        //Changed condition below $key % 2 ==0 => replaced with $key % 2 == 1
									        if($key % 2 == 1) {
									            // Changed concatenation operator , += replaced with .=
									            $priv_key_extract .= $public_key[$key];
									        } 
									    }
									

								if($priv_key_extract == "08159")
								{

									$update_authen_flag  = "UPDATE registrar_grade_archive
									   SET authenticity_flag = '1'
									   WHERE school_id ='$school_id'
									   AND section_id = '$section_id'  ";

								}
								else
								{

									$update_authen_flag  = "UPDATE registrar_grade_archive
									   SET authenticity_flag = '2'
									   WHERE school_id ='$school_id'
									   AND section_id = '$section_id' ";
								}

								$query = mysql_query($update_authen_flag) or die (mysql_error());

								
							}	


								if($query){

										$return['status'] = '1';
									}

									else{
										$return['status'] = '0';

									}

							



							
		echo json_encode($return);					

	}

	function check_authentic_grades() {
		session_start();
			$school_id = $_SESSION['school_id'];
			$section_id = $_POST['sec_id'];

		$select_pki_state   = "	SELECT * FROM registrar_grade_archive 
							WHERE school_id = '$school_id' 
							AND section_id = '$section_id'
							GROUP BY authenticity_flag  ";

		$query = mysql_query($select_pki_state)	or die (mysql_error());						   	

		while ( $row = mysql_fetch_assoc($query)) {

						$public_key = $row['authenticity_flag'];
								
							}

			if($public_key != '1' && $public_key != '2')
			{

				$return['authen'] = '0';

			}
			else if($public_key == '1')
			{
				$return['authen'] = '1';

			}
			else{

				$return['authen'] = '2';
			}



			echo json_encode($return);
	}	 
			
?>