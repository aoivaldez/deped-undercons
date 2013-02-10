<?php
	include_once('DBconnect.php');

	$func_num = $_POST['func_num'];


	switch ($func_num) {
		case 1:
			get_my_section();
			break;
		case 2:
			get_all_sections();
			break;
		case 3:
			insert_advisory();
			break;
		case 4:
			get_my_advisory();
			break;
		case 5:
			delete_advisory();
			break;
		case 6:
			get_logo();
			break;
		case 7:
			insert_students_grades();
			break;									
	}

	function get_my_section(){
		
		session_start();
		$school_id = $_SESSION['school_id'];
		$faculty_id	= $_SESSION['user_id_fac'];

	$select_my_advisory = "SELECT advisory_id,section_id,section_name,section_department,year_level 
						   FROM advisory_sections 
						   WHERE faculty_id='$faculty_id' 
						   AND school_id='$school_id' 
						   GROUP BY year_level ASC

						   "; 
						
						$connect = mysql_query($select_my_advisory) or die(mysql_error());

						$return = array();

					while($row = mysql_fetch_array($connect)){

							$return[]=array(	
								'sec_name' => $row['section_name'],
								'advisory_id' => $row['advisory_id'],
								'sec_level' => $row['year_level'],
								'sec_dept' => $row['section_department'],
								'sec_id' => $row['section_id'],
								);
						}			


				echo json_encode($return);		
	



	}

	function get_all_sections(){
		session_start();
		$school_id = $_SESSION['school_id'];
		$faculty_id	= $_SESSION['user_id_fac'];
		$year_level = $_POST['year_level'];


		$select_subjects_elem = "SELECT a.section_id,a.section_name FROM section a 
								LEFT JOIN advisory_sections b ON (a.section_id = b.section_id)	

								WHERE b.year_level='$year_level' 
								AND a.school_id='$school_id' 
								AND b.faculty_id = '$faculty_id'"; 


			$connect = mysql_query($select_subjects_elem) or die(mysql_error());

			$data=array();

			while($row = mysql_fetch_array($connect)){

				$data[]= array( 
					'sec_name'=>$row['section_name'],
					'sec_id'=>$row['section_id'],

					);

			}
			echo json_encode($data);
	}

	function insert_advisory(){
		session_start();
		$school_id = $_SESSION['school_id'];
		$faculty_id	= $_SESSION['user_id_fac'];
		$section_id = $_POST['section_id'];

		$select_same =  "SELECT section_id,faculty_id FROM advisory_sections WHERE faculty_id = '$faculty_id'  AND school_id='$school_id' AND section_id ='$section_id' "; 
			$connect_same_select = mysql_query($select_same) or die(mysql_error());

			$count_same = mysql_num_rows($connect_same_select);

			if($count_same > 0 ){

				 $return['error'] = true;

				echo json_encode($return);	
			}
			else{



					$select_section = "SELECT section_id,section_name,section_level,section_department FROM section WHERE section_id='$section_id' AND school_id='$school_id' "; 
						
						$connect = mysql_query($select_section) or die(mysql_error());


							while($row = mysql_fetch_array($connect)){
								$sec_name = $row['section_name'];
								$sec_id = $row['section_id'];
								$sec_level = $row['section_level'];
								$sec_dept = $row['section_department'];
						}


						$update_section_availability = "UPDATE section SET availability_status ='1' WHERE section_id ='$section_id'" ;

					$insert_my_advisory = "INSERT INTO advisory_sections (section_id,section_name,school_id,faculty_id,section_department,year_level)
											VALUES ('$sec_id','$sec_name','$school_id','$faculty_id','$sec_dept','$sec_level')";

											if(!@mysql_query($insert_my_advisory)){

												die('sorry error insert'.mysql_error());
											}

											if(!@mysql_query($update_section_availability)){

												die('sorry error insert'.mysql_error());
											}	

		}




	}

	function get_my_advisory(){
		session_start();
		$school_id = $_SESSION['school_id'];
		$faculty_id	= $_SESSION['user_id_fac'];

	$select_my_advisory = "SELECT advisory_id,section_id,section_name,section_department,year_level 
						   FROM advisory_sections 
						   WHERE faculty_id='$faculty_id' 
						   AND school_id='$school_id' 
						   "; 
						
						$connect = mysql_query($select_my_advisory) or die(mysql_error());

						$return = array();

					while($row = mysql_fetch_array($connect)){

							$return[]=array(	
								'sec_name' => $row['section_name'],
								'advisory_id' => $row['advisory_id'],
								'sec_level' => $row['year_level'],
								'sec_dept' => $row['section_department'],
								'sec_id' => $row['section_id'],
								);
						}			


				echo json_encode($return);		
	}

	function delete_advisory(){	
			session_start();
		$school_id = $_SESSION['school_id'];
		$faculty_id	= $_SESSION['user_id_fac'];
		$advisory_id = $_POST['advisory_id'];


		$remove_advisory ="DELETE FROM 	advisory_sections WHERE advisory_id='$advisory_id' 
									AND faculty_id ='$faculty_id' 
									AND school_id ='$school_id' ";

		$select_section_id = "SELECT b.section_id FROM section a 
								LEFT JOIN advisory_sections b 
								ON (a.section_id = b.section_id) 
								WHERE advisory_id='$advisory_id' ";

			$result_select_section_id=mysql_query($select_section_id)or die(mysql_error());					

					while($row= mysql_fetch_array($result_select_section_id)){

						$section_id=$row['section_id'];

					}											



		$update_section_availability = "UPDATE section SET availability_status ='0' WHERE section_id ='$section_id'" ;
								

								if(!@mysql_query($update_section_availability)){

												die('sorry error insert'.mysql_error());
											}	


		$result=mysql_query($remove_advisory)or die(mysql_error());




	}

	function get_logo(){

			session_start();
				$school_id = $_SESSION['school_id'];

			$select_exist_img = "SELECT path_name FROM image_upload WHERE school_id = '$school_id'";

					 				$query_img_path = mysql_query($select_exist_img);

											  if(@!$query_img_path){
											       die('error header'.mysql_error());
											     }


											     $count_exist =  mysql_num_rows($query_img_path);

					
					if($count_exist > 0 ){

						while ($row = mysql_fetch_assoc($query_img_path)) {

							$path_name = $row['path_name'];
						}

						$return['image_path'] = $path_name;

						

					}
					else{



						$return['image_path'] = "default.jpg";


					}


					echo json_encode($return);						     

		}

	function insert_students_grades(){
				session_start();
				$school_id = $_SESSION['school_id'];
				$faculty_id	= $_SESSION['user_id_fac'];

				$insert_boys_grades = "INSERT INTO registrar_grade_archive (school_id,subject_id,grade,advisor_faculty_id,subject_handler_id,year_level,student_id)VALUES ";



											if(!@mysql_query($insert_boys_grades)){

												die('sorry error insert'.mysql_error());
											}

	}	


?>