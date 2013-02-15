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
			school_search_check_pki();
			break;
		case 7:
			unset_school_pki();
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

		 $today  = date("Y-m-d", strtotime(date("F j, Y")));;
		

		$reject_school =  "UPDATE deped_grade_archive SET status_acceptance = 'Rejected' , accepted_dates = '$today'
						   WHERE school_id = '$school_id' AND section_id = '$section_id' ";


		$query_reject = mysql_query($reject_school) OR die(mysql_error());				   

		if($query_reject){

			$success['success'] = '1';
		}
		else{

			$success['success'] = '0';
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

	function school_search_check_pki(){




			$school = $_POST['school'];

			$search_string = "(school_name LIKE '%".$school."%')";
			
			$query = "SELECT * FROM `schools` WHERE {$search_string}";

			$result = mysql_query($query)or die(mysql_error());
	
			$count=0;
			while ($row = mysql_fetch_array($result)){

				$data[$count] = array(
					'search_school' => $row['school_name'],
					'search_school_id' => $row['school_id'],
					'search_address' => $row['school_address'],
					'status'	=> $row['public_key'],
					);

					if($row['public_key'] != ""){


						$data[$count]['status'] = "Allowed";
					}
					else{
						$data[$count]['status'] = "Not Allowed";
					}

					$count++;
				}

	echo json_encode($data);
	}

	function unset_school_pki(){
		
		
		
	}

?>
