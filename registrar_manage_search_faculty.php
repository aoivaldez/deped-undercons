<?php

	require('DBconnect.php');

	$num = $_POST['switch_num'];

	switch ($num) {
		case 1:
			search_teacher();
			break;
		case 2:
			teacher_deactivate();
			break;
		case 3:
			teacher_activate();
			break;		
		
		
	}

	function search_teacher(){

			session_start();

				$faculty_name = mysql_real_escape_string($_POST['faculty_name']);
				$sch_id = $_SESSION['school_id'];

				if($faculty_name == "*"){
						

						$query = "SELECT * FROM school_faculty a
									LEFT JOIN advisory_sections b ON (a.faculty_id = b.faculty_id)	
									LEFT JOIN section c ON (c.section_id = b.section_id)
									LEFT JOIN status_availability d ON (d.status_id = a.status_id)
									 WHERE  a.school_id = '$sch_id'";

						$result = mysql_query($query)or die(mysql_error("asdfasf"));

						$data = array();
						while ($row = mysql_fetch_array($result)){
							$data[] = array(
								'search_f_lastname' => $row['f_lastname'],
								'search_f_firstname' => $row['f_firstname'],
								'search_section' => $row['section_name'],
								'section_level' => $row['section_level'],
								'status' => $row['status'],
								'faculty_id' => $row['faculty_id'],
								);
							}


				}
				else{

							$search_string = "(a.f_firstname LIKE '%".$faculty_name."%' OR a.f_lastname LIKE '%".$faculty_name."%')";

						
							$query = "SELECT * FROM school_faculty a
									LEFT JOIN advisory_sections b ON (a.faculty_id = b.faculty_id)	
									LEFT JOIN section c ON (c.section_id = b.section_id)
									LEFT JOIN status_availability d ON (d.status_id = a.status_id)
									 WHERE  {$search_string}
									 AND a.school_id = '$sch_id'";

						$result = mysql_query($query)or die(mysql_error("asdfasf"));

						$data = array();
						while ($row = mysql_fetch_array($result)){
							$data[] = array(
								'search_f_lastname' => $row['f_lastname'],
								'search_f_firstname' => $row['f_firstname'],
								'search_section' => $row['section_name'],
								'section_level' => $row['section_level'],
								'status' => $row['status'],
								'faculty_id' => $row['faculty_id'],
								);
							}


					}


				

				echo json_encode($data);
	}

	function teacher_deactivate(){
		session_start();

				$faculty_id = mysql_real_escape_string($_POST['faculty_id']);
				$sch_id = $_SESSION['school_id'];


				$deactivate_query = "UPDATE school_faculty 
									SET status_id = '2' 
									WHERE faculty_id = '$faculty_id' 
									AND school_id = '$sch_id' ";


				$result = mysql_query($deactivate_query);

				if($result){

					$result_bool['result'] = 1;

				}else{

					die(mysql_error("asdfasf"));
					$result_bool['result']=0;
				}

				echo json_encode($result_bool);
	}

	function teacher_activate(){
		session_start();

				$faculty_id = mysql_real_escape_string($_POST['faculty_id']);
				$sch_id = $_SESSION['school_id'];


				$activate_query = "UPDATE school_faculty 
									SET status_id = '1' 
									WHERE faculty_id = '$faculty_id' 
									AND school_id = '$sch_id' ";


				$result = mysql_query($activate_query);

				if($result){

					$result_bool['result'] = 1;

				}else{

					die(mysql_error("asdfasf"));
					$result_bool['result']=0;
				}

				echo json_encode($result_bool);
	}

?>