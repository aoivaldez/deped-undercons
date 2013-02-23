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
		case 3:
			school_evaluation();
			break;
		case 4:
			reject_school();
			break;
		case 5:
			change_evaluation_status();
		case 6:
			accept_school();
			break;
		case 7:
			get_secret_questions();
			break;		

											
	}

	
	function get_all_schools(){

		$select_all_schools = "SELECT * FROM schools ";

		$query = mysql_query($select_all_schools) OR die(mysql_error());

		
		$count = 0;

		while($row = mysql_fetch_array($query)){
					$count++;
							$item[$count]=array(	
								'school_name' => $row['school_name'],
								'school_address' => $row['school_address'],
								'school_id' => $row['school_id'],
								
								);


							 $select_sections = "SELECT * FROM section 
							 					WHERE school_id = '".$row['school_id']."'";


							 $query_section = mysql_query($select_sections)	or die(mysql_error());
							

							 $sections_counts = mysql_num_rows($query_section);


							 $select_sections_deped_archive = "SELECT * FROM deped_grade_archive 
							 									WHERE school_id = '".$row['school_id']."'
							 									GROUP BY section_id ";


							 $query_section_deped_archive = mysql_query($select_sections_deped_archive)	or die(mysql_error());

							 $sections_counts_grade_archive = mysql_num_rows($query_section_deped_archive);

							 if($sections_counts_grade_archive =='0' ){

								$item[$count]['stat'] ='Pending';
							 }
							
							 else if($sections_counts_grade_archive != $sections_counts){

							 	$item[$count]['stat'] ='Incomplete';

							 }
							 else{

							 	

							 	$item[$count]['stat'] = 'Complete';

							 }

						}			


				echo json_encode($item);	


	}


	function get_school_sections(){


		$school_id = $_POST['school_id'];

			$get_section = "SELECT *
							FROM deped_grade_archive a
							
							LEFT JOIN section b ON(a.section_id = b.section_id)
							LEFT JOIN advisory_sections c ON(b.section_id = c.section_id)
							WHERE a.school_id = '$school_id'
							AND b.availability_status = '1'
							GROUP BY b.section_name  
							ORDER BY b.section_level ASC";

							



							$result=mysql_query($get_section)or die(mysql_error());

							

			 
									
							$count = 0;

						while ($row = mysql_fetch_array($result))
									{
										$data[$count] = array(
										   'sec_id'=>$row['section_id'],
										   'sec_name'=>$row['section_name'],
										   'sec_dept'=>$row['section_department'],
										   'sec_lvl'=>$row['section_level'],
										   'advisory_id'=>$row['advisory_id'],
										   'advisor_id'=>$row['advisor_id'],
										   'accptd_dates'=>$row['accepted_dates'],
										   'status'=>$row['status_acceptance'], 
										);


										if($row['status_acceptance'] != ""){


												$data[$count]['status'] = $row['status_acceptance'];
											}
											else{

												$data[$count]['status'] = "pending";
											}

											$count++;
									}
			 
			echo json_encode($data);

	}

	function school_evaluation(){


		$select_all_schools = "SELECT * FROM deped_grade_archive a
								LEFT JOIN schools b ON (a.school_id = b.school_id) 
								GROUP BY a.school_id";

		$query = mysql_query($select_all_schools) OR die(mysql_error());

		
		$count = 0;

		while($row = mysql_fetch_array($query)){
					$count++;
							$item[$count]=array(	
								'school_name' => $row['school_name'],
								'school_address' => $row['school_address'],
								'school_id' => $row['school_id'],
								'authen_status' => $row['authentication_status'],
								'eval_stat'=>$row['evaluation_status'],
								);

								

								if($row['authentication_status'] != ""){


									$item[$count]['authen_status'] = $row['authentication_status'];
								}
								else{

									$item[$count]['authen_status'] = "pending";
								}

								if($row['evaluation_status'] != ""){


									$item[$count]['eval_stat'] = $row['evaluation_status'];
								}
								else{

									$item[$count]['eval_stat'] = "pending";
								}

							
						

						}			


				echo json_encode($item);


		
	}

	function reject_school() {

		$school_id = $_POST['school_id'];

		$section_id = $_POST['section_id'];

		$year = date("Y");

		 $today  = date("Y-m-d", strtotime(date("F j, Y")));;


		 $check_deped_depot = "SELECT * FROM deped_grade_archive_depot a
							 
							   LEFT JOIN section b ON(b.section_name = a.section_name)							
						   	  WHERE a.school_id = '$school_id' AND b.section_id = '$section_id' AND school_year = '$year' ";

		$check_deped_query = mysql_query($check_deped_depot) OR die(mysql_error());				   	

		$exist_count = mysql_num_rows($check_deped_query);

		if($exist_count > 0)

		{

			$success['success'] = '0';


		}
		else
		{
				
					$reject_school =  "UPDATE deped_grade_archive SET status_acceptance = 'Rejected' , accepted_dates = '$today'
								   WHERE school_id = '$school_id' AND section_id = '$section_id' ";


				$query_reject = mysql_query($reject_school) OR die(mysql_error());				   

				if($query_reject){

					$success['success'] = '1';
				}
				else{

					$success['success'] = '0';
				}

		}
		

		echo json_encode($success);
	}


	function change_evaluation_status(){


		$school_id = $_POST['school_id'];

		$status=$_POST['status'];

		$update_evaluation = "UPDATE schools SET evaluation_status = '$status' ";

		$query_change_eval = mysql_query($update_evaluation) OR die(mysql_error());


		if($query_change_eval){


			$return['success'] = "1";
		}
		else{

			$return['success'] = "0";
		}

		echo json_encode($return);
			
	}

	function accept_school(){

		$school_id = $_POST['school_id'];

		$section_id = $_POST['section_id'];

		$year = date("Y");
		
		$today  = date("Y-m-d", strtotime(date("F j, Y")));

		$check_deped_depot = "SELECT * FROM deped_grade_archive_depot a
							 
							   LEFT JOIN section b ON(b.section_name = a.section_name)							
						   	  WHERE a.school_id = '$school_id' AND b.section_id = '$section_id' AND school_year = '$year' ";

		$check_deped_query = mysql_query($check_deped_depot) OR die(mysql_error());				   	

		$exist_count = mysql_num_rows($check_deped_query);

		if($exist_count > 0)

		{

			$success['success'] = '0';


		}
		else
		{
				$accept_school =  "SELECT * FROM deped_grade_archive a
							LEFT JOIN section b ON (a.section_id=b.section_id)
							LEFT JOIN school_faculty c ON (c.faculty_id = a.advisor_id)
						   WHERE a.school_id = '$school_id' AND a.section_id = '$section_id' ";


		$accept_query = mysql_query($accept_school) OR die(mysql_error());


		


								$insert_info = array();	

							$insert_grade_deped_depot = "INSERT INTO deped_grade_archive_depot 
																			(first_name,
																			 middle_name,
																			 last_name,
																			 grade,
																			 school_id,
																			 subject_id,
																			 section_name,
																			 advisor_name,
																			 year_in_school,
																			 school_year,
																			 age,
																			 gender,
																			 address,
																			 attendance,
																			 accepted_dates) VALUES ";


							$count = 0;

	  							while ($row = mysql_fetch_array($accept_query))
									{
		
										   $sec_name=$row['section_name'];
										    $advisor_firstname=$row['f_firstname'];
										    $advisor_lastname=$row['f_lastname'];
										    $advisor_middlename=$row['f_middlename'];
										   $subject_id=$row['subject_id'];
										   $firstname=$row['first_name'];
										   $middlename=$row['middle_name'];
										  $lastname=$row['last_name'];
										  $age=$row['age'];
										  $gender=$row['gender'];
										   $address=$row['address'];
										  $years_in_school=$row['year_in_school'];
										  $grade=$row['grade'];
										  $attendance=$row['attendance'];

										  $advisor_full_name = $advisor_lastname.", ".$advisor_firstname." ".$advisor_middlename;


										$insert_info[$count]="	('".$row['first_name']."', 
																'".$row['middle_name']."',
																'".$row['last_name']."',
																'".$row['grade']."',
																'".$school_id."',
																'".$row['subject_id']."',
																'".$row['section_name']."',
																'".$advisor_full_name."',
																'".$row['year_in_school']."',
																'".$year."',
																'".$row['age']."',
																'".$row['gender']."',
																'".$row['address']."',
																'".$row['attendance']."',
																'".$today."') ";


											$count++;
										  
									}

										$insert_info = implode(', ', $insert_info);

								$ready_insert_grades = $insert_grade_deped_depot . $insert_info;	
									
									$query_accept_deped_grades = mysql_query($ready_insert_grades) or die(mysql_error());






						if($query_accept_deped_grades){

							$success['success'] = '1';

							$accept_status =  "UPDATE deped_grade_archive SET status_acceptance = 'Accepted' , accepted_dates = '$today'
						   WHERE school_id = '$school_id' AND section_id = '$section_id' ";
							$query_accept_status = mysql_query($accept_status) OR die(mysql_error());

						}
						else{

							$success['success'] = '0';
						}


		}



		


		echo json_encode($success);



	}

	function get_secret_questions(){


			$select_questions = "SELECT * FROM secret_questions ";

			$connect = mysql_query($select_questions) or die(mysql_error());

			$data=array();

			while($row = mysql_fetch_array($connect)){

				$data[]= array(
					'secret_question_id' =>$row['sq_id'], 
					'question_name'=>$row['question_name'],
					
					);



			}

			echo json_encode($data);


	}

	
?>
