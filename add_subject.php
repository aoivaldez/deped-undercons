<?php
	include_once('DBconnect.php'); 



	$func_num = $_POST['func_numbr'];


	switch ($func_num) {
		case 1:
			
			insert_new_subject();
			break;

		case 2:		
			get_elementary_grd1_subjects();	
			break;

		case 3:		
			get_1sthigh_subjects();	
			break;
		case 4:		
			get_2ndhigh_subjects();	
			break;
		case 5:		
			get_3rdhigh_subjects();	
			break;

		case 6:		
			get_4thhigh_subjects();	
			break;
		case 7:
			active_subject();
			break;
			
		case 8:
			Inactive_subject();
			break;

		case 9:
			get_subjects_available();
			break;

		case 10:
			get_subject_teacher();
			break;

		case 11:
			handle_subjects_teacher();
			break;
		case 12:
			delete_handle_subjects_teaher();
			break;
		case 13:		
			get_elementary_grd2_subjects();	
			break;
		case 14:		
			get_elementary_grd3_subjects();	
			break;
		case 15:		
			get_elementary_grd4_subjects();	
			break;
		case 16:		
			get_elementary_grd5_subjects();	
			break;
		case 17:		
			get_elementary_grd6_subjects();	
			break;
		case 18:
			get_subject_assigned();	
			break;
		case 19:
			insert_assigned_faculty();	
			break;
		case 20:
			get_my_assigned_faculty_subject();
			break;
		case 21:
			remove_my_assigned_faculty_subject();
			break;
		case 22:
			get_handler_id_grade_saving();
			break;

		case 23:
			check_reg_archive_subject();
			break;
		case 24:
			get_handler_id_grade_saving_registrar();
			break;
		case 25:
			check_reg_archive_subject_registrar();
			break;																	
	}


	function insert_new_subject(){


	$level = $_POST['year_level'];
	$subjct_name =$_POST['subjct_name'];
	$units_nmber = $_POST['subjct_units'];

	$insert_subject = "INSERT INTO subjects (subject_name,level,status,subject_units) VALUES('$subjct_name','$level','1','$units_nmber')";


						if(@!mysql_query($insert_subject)){
							die('error insert'.mysql_error());

							}
							else{
								$return ['error'] = false;
							}

		echo json_encode($return);					
	}


	function get_elementary_grd1_subjects(){

		$select_subjects_elem = "SELECT subject_name,subject_id,status FROM subjects WHERE level='grade1' "; 


			$connect = mysql_query($select_subjects_elem) or die(mysql_error());

			$data=array();

			while($row = mysql_fetch_array($connect)){

				$data[]= array(
					'subj_name' =>$row['subject_name'], 
					'subj_id'=>$row['subject_id'],
					'subj_status'=>$row['status'],

					);



			}

			echo json_encode($data);


	}

	function get_elementary_grd2_subjects(){

		$select_subjects_elem = "SELECT subject_name,subject_id,status FROM subjects WHERE level='grade2' "; 


			$connect = mysql_query($select_subjects_elem) or die(mysql_error());

			$data=array();

			while($row = mysql_fetch_array($connect)){

				$data[]= array(
					'subj_name' =>$row['subject_name'], 
					'subj_id'=>$row['subject_id'],
					'subj_status'=>$row['status'],

					);



			}

			echo json_encode($data);


	}

	function get_elementary_grd3_subjects(){

		$select_subjects_elem = "SELECT subject_name,subject_id,status FROM subjects WHERE level='grade3' "; 


			$connect = mysql_query($select_subjects_elem) or die(mysql_error());

			$data=array();

			while($row = mysql_fetch_array($connect)){

				$data[]= array(
					'subj_name' =>$row['subject_name'], 
					'subj_id'=>$row['subject_id'],
					'subj_status'=>$row['status'],

					);



			}

			echo json_encode($data);


	}

	function get_elementary_grd4_subjects(){

		$select_subjects_elem = "SELECT subject_name,subject_id,status FROM subjects WHERE level='grade4' "; 


			$connect = mysql_query($select_subjects_elem) or die(mysql_error());

			$data=array();

			while($row = mysql_fetch_array($connect)){

				$data[]= array(
					'subj_name' =>$row['subject_name'], 
					'subj_id'=>$row['subject_id'],
					'subj_status'=>$row['status'],

					);



			}

			echo json_encode($data);


	}

	function get_elementary_grd5_subjects(){

		$select_subjects_elem = "SELECT subject_name,subject_id,status FROM subjects WHERE level='grade5' "; 


			$connect = mysql_query($select_subjects_elem) or die(mysql_error());

			$data=array();

			while($row = mysql_fetch_array($connect)){

				$data[]= array(
					'subj_name' =>$row['subject_name'], 
					'subj_id'=>$row['subject_id'],
					'subj_status'=>$row['status'],

					);



			}

			echo json_encode($data);


	}

	function get_elementary_grd6_subjects(){

		$select_subjects_elem = "SELECT subject_name,subject_id,status FROM subjects WHERE level='grade6' "; 


			$connect = mysql_query($select_subjects_elem) or die(mysql_error());

			$data=array();

			while($row = mysql_fetch_array($connect)){

				$data[]= array(
					'subj_name' =>$row['subject_name'], 
					'subj_id'=>$row['subject_id'],
					'subj_status'=>$row['status'],

					);



			}

			echo json_encode($data);


	}


	function get_1sthigh_subjects(){

		$select_subjects_elem = "SELECT subject_name,subject_id,status FROM subjects WHERE level='firstyear' "; 


			$connect = mysql_query($select_subjects_elem) or die(mysql_error());

			$data=array();

			while($row = mysql_fetch_array($connect)){

				$data[]= array(
					'subj_name' =>$row['subject_name'], 
					'subj_id'=>$row['subject_id'],
					'subj_status'=>$row['status'],

					);



			}

			echo json_encode($data);


	}

	function get_2ndhigh_subjects(){

		$select_subjects_elem = "SELECT subject_name,subject_id,status FROM subjects WHERE level='secondyear' "; 


			$connect = mysql_query($select_subjects_elem) or die(mysql_error());

			$data=array();

			while($row = mysql_fetch_array($connect)){

				$data[]= array(
					'subj_name' =>$row['subject_name'], 
					'subj_id'=>$row['subject_id'],
					'subj_status'=>$row['status'],

					);



			}

			echo json_encode($data);


	}

	function get_3rdhigh_subjects(){

		$select_subjects_elem = "SELECT subject_name,subject_id,status FROM subjects WHERE level='thirdyear' "; 


			$connect = mysql_query($select_subjects_elem) or die(mysql_error());

			$data=array();

			while($row = mysql_fetch_array($connect)){

				$data[]= array(
					'subj_name' =>$row['subject_name'], 
					'subj_id'=>$row['subject_id'],
					'subj_status'=>$row['status'],

					);



			}

			echo json_encode($data);


	}

	function get_4thhigh_subjects(){

		$select_subjects_elem = "SELECT subject_name,subject_id,status FROM subjects WHERE level='fourthyear' "; 


			$connect = mysql_query($select_subjects_elem) or die(mysql_error());

			$data=array();

			while($row = mysql_fetch_array($connect)){

				$data[]= array(
					'subj_name' =>$row['subject_name'], 
					'subj_id'=>$row['subject_id'],
					'subj_status'=>$row['status'],

					);



			}

			echo json_encode($data);


	}

	function active_subject(){
		$subject_name = $_POST['subjct_name'];
		$subject_id = $_POST['subjct_id'];




	   $update = "UPDATE subjects SET status = '1' WHERE subject_id = '$subject_id'"; 

	                		mysql_query($update);

	}

	function Inactive_subject(){
		$subject_name = $_POST['subjct_name'];
		$subject_id = $_POST['subjct_id'];




	   $update = "UPDATE subjects SET status = '0' WHERE subject_id = '$subject_id'"; 

	                		mysql_query($update);

	}

	function get_subjects_available(){

		$year_level = $_POST['year_level'];

		$select_subjects_all = "SELECT subject_name,subject_id,status,subject_units 
								FROM subjects 
								WHERE level='$year_level' AND status='1' "; 
 

			$connect = mysql_query($select_subjects_all) or die(mysql_error());

			$data=array();

			while($row = mysql_fetch_array($connect)){

				$data[]= array(
					'subj_name' =>$row['subject_name'], 
					'subj_id'=>$row['subject_id'],
					'subj_units'=>$row['subject_units'],

					);
				}

			echo json_encode($data);



	}

	function get_subject_teacher(){

		session_start();

		$faculty_id	= $_SESSION['user_id_fac'];
		$school_id = $_SESSION['school_id'];
		$subject_id = $_POST['subject_id'];
		

		$query_avalablty = "SELECT * 
							FROM subjects_handle 
							WHERE subject_id='$subject_id' AND faculty_id = '$faculty_id' ";

				$connect_query = mysql_query($query_avalablty) or die(mysql_error());

				$available = mysql_num_rows($connect_query);


				if($available > 0 ){

						 $return['error'] = true;

						echo json_encode($return);	 
					}

				else{

						$select_subjects = "SELECT subject_id,subject_name,subject_units,level 
											FROM subjects 
											WHERE subject_id='$subject_id' "; 


							$connect = mysql_query($select_subjects) or die(mysql_error());

							while($row = mysql_fetch_array($connect)){

								
									$subj_name =$row['subject_name']; 
									$subj_id=$row['subject_id'];
									$subj_units=$row['subject_units'];
									$year_level=$row['level'];
								}

						$insert_subjects = "INSERT INTO subjects_handle (faculty_id,school_id,level,subject_id) 
													VALUES('$faculty_id','$school_id','$year_level','$subj_id')";


										if(@!mysql_query($insert_subjects)){
											die('error insert'.mysql_error());

											}


					}														
	}

	function handle_subjects_teacher(){
		session_start();
		$faculty_id	= $_SESSION['user_id_fac'];
		$school_id = $_SESSION['school_id'];

		$query = "SELECT 	a.subject_name,
							a.subject_id,
							a.subject_units,
							b.subject_id,
							b.sh_id,
							b.level
							
					FROM subjects a
			   LEFT JOIN subjects_handle b ON (a.subject_id = b.subject_id)
			   	   WHERE b.faculty_id = '$faculty_id' AND b.school_id = '$school_id'  ";


			   	  $connect = mysql_query($query) or die(mysql_error());

				$data=array();

				while($row = mysql_fetch_array($connect)){

					$data[]=array(
						'subject_name'=>$row['subject_name'],
						
						'subject_id' => $row['subject_id'],
						'subject_units' => $row['subject_units'],
						'subjthandle_id' => $row['sh_id'],
						'year_level' =>$row['level'],
						); 



				}

				echo json_encode($data);


	}

	function delete_handle_subjects_teaher(){
		session_start();
		$sh_id	= $_POST['subjctHandle_id'];
		$school_id = $_SESSION['school_id'];


		$delete_subject_teacher= "DELETE FROM subjects_handle WHERE school_id='$school_id' AND sh_id = '$sh_id' ";

			$result=mysql_query($delete_subject_teacher)or die(mysql_error());

	}

	function get_subject_assigned(){
		session_start();

		$subject_id = $_POST['subject_id'];
		$school_id = $_SESSION['school_id'];

		$select_assigned_teacher ="SELECT 	a.faculty_id,
											a.f_lastname,
											a.f_firstname,
											a.f_middlename,
											b.subject_id,
											b.faculty_id,
											c.subject_id,
											c.subject_name

										FROM school_faculty a

										LEFT JOIN subjects_handle b ON (a.faculty_id=b.faculty_id)
										LEFT JOIN subjects c ON (c.subject_id=b.subject_id)

										WHERE c.subject_id='$subject_id' 
										AND c.status='1'
										AND b.school_id='$school_id' 
										";

					$connect = mysql_query($select_assigned_teacher) or die(mysql_error());


					$data=array();

				while($row = mysql_fetch_array($connect)){

					$data[]=array(
						'subject_name'=>$row['subject_name'],
						'faculty_id' => $row['faculty_id'],
						'subject_id' => $row['subject_id'],
						'faculty_fname' => $row['f_firstname'],
						'faculty_lname' => $row['f_lastname'],
						'faculty_mname' => $row['f_middlename'],
						); 
				}

				echo json_encode($data);
	}

	function insert_assigned_faculty(){

		session_start();

		$school_id = $_SESSION['school_id'];
		$faculty_id	= $_SESSION['user_id_fac'];
		$subject_id = $_POST['subject_id'];
		$subject_handler_id = $_POST['subject_handler_id'];
		$section_id = $_POST['section_id'];

		$insert_assigned_handler = "INSERT INTO subject_assigned_handler (faculty_id,subject_id,section_id,faculty_advisor_id,school_id) 
									VALUES('$subject_handler_id','$subject_id','$section_id','$faculty_id','$school_id')";


						if(@!mysql_query($insert_assigned_handler)){
							die('error insert'.mysql_error());

							}
							else{
								$return ['error'] = false;
							}

		echo json_encode($return);

	}

	function get_my_assigned_faculty_subject(){

		session_start();

		$school_id = $_SESSION['school_id'];
		$faculty_id	= $_SESSION['user_id_fac'];
		$year_level =$_POST['year_level'];


		$select_assigned_teacher ="SELECT 	a.faculty_id,
											a.f_lastname,
											a.f_firstname,
											a.f_middlename,
											b.subject_id,
											b.faculty_id,
											b.assigned_handler_id,
											b.section_id,
											c.subject_id,
											c.subject_name,
											c.level,
											d.section_id,
											d.section_name
										FROM school_faculty a

										LEFT JOIN subject_assigned_handler b ON (a.faculty_id=b.faculty_id)
										LEFT JOIN subjects c ON (c.subject_id=b.subject_id)
										LEFT JOIN section d ON (d.section_id = b.section_id)

										WHERE b.faculty_advisor_id='$faculty_id' 
										AND b.school_id='$school_id' 
										AND  c.level =  '$year_level'
										";

					$connect = mysql_query($select_assigned_teacher) or die(mysql_error());


					$data=array();

				while($row = mysql_fetch_array($connect)){

					$data[]=array(
						'subject_name'=>$row['subject_name'],
						'assigned_handler' => $row['assigned_handler_id'],
						'faculty_fname' => $row['f_firstname'],
						'faculty_lname' => $row['f_lastname'],
						'faculty_mname' => $row['f_middlename'],
						'sec_name' => $row['section_name'],
						); 
				}

				echo json_encode($data);



	}

	function remove_my_assigned_faculty_subject(){

		session_start();

		$school_id = $_SESSION['school_id'];

		$assigned_handler_id = $_POST['assigned_handler_id'];

		$remove_assigned_faculty_subject= "DELETE FROM subject_assigned_handler WHERE school_id='$school_id' AND assigned_handler_id = '$assigned_handler_id' ";

			$result=mysql_query($remove_assigned_faculty_subject)or die(mysql_error());


		}

	function get_handler_id_grade_saving(){
		session_start();

		$school_id = $_SESSION['school_id'];
		$faculty_id	= $_SESSION['user_id_fac'];
		$subject_id =$_POST['subject_id'];

			$select_assigned_teacher ="SELECT faculty_id

										FROM subject_assigned_handler 
										

										WHERE faculty_advisor_id='$faculty_id' 
										AND school_id='$school_id' 
										AND subject_id = '$subject_id'
										";

					$connect = mysql_query($select_assigned_teacher) or die(mysql_error());


					while($row = mysql_fetch_array($connect)){

							$subject_handler_id=$row['faculty_id'];
						
				}

				$count = mysql_num_rows($connect);

				if($count > 0){

				  $return['subject_handler_id'] = $subject_handler_id;
				}
				else{

					 $return['subject_handler_id'] = "0";
				}
				echo json_encode($return);

	}



	function check_reg_archive_subject(){
		session_start();
		$school_id = $_SESSION['school_id'];
		$faculty_id	= $_SESSION['user_id_fac'];
		$subject_id =$_POST['subject_id'];

		$check_subject_archive ="SELECT subject_id

										FROM registrar_grade_archive 
										

										WHERE advisor_faculty_id='$faculty_id' 
										AND school_id='$school_id' 
										AND subject_id = '$subject_id'
										";

					$connect = mysql_query($check_subject_archive) or die(mysql_error());

					$count = mysql_num_rows($connect);

					if($count > 0){

						$return['saved'] = 1; 

					}
					else{

						$return['saved'] = 0; 

					}

					echo json_encode($return);
	}


	function get_handler_id_grade_saving_registrar(){
		session_start();

		$school_id = $_SESSION['school_id'];
		$faculty_id	= $_POST['advisor_id'];
		$subject_id =$_POST['subject_id'];

			$select_assigned_teacher ="SELECT faculty_id

										FROM subject_assigned_handler 
										

										WHERE faculty_advisor_id='$faculty_id' 
										AND school_id='$school_id' 
										AND subject_id = '$subject_id'
										";

					$connect = mysql_query($select_assigned_teacher) or die(mysql_error());


					while($row = mysql_fetch_array($connect)){

							$subject_handler_id=$row['faculty_id'];
						
				}

				$count = mysql_num_rows($connect);

				if($count > 0){

				  $return['subject_handler_id'] = $subject_handler_id;
				}
				else{

					 $return['subject_handler_id'] = "0";
				}
				echo json_encode($return);

	}


	function check_reg_archive_subject_registrar(){
		session_start();
		$school_id = $_SESSION['school_id'];
		$faculty_id	= $_POST['advisor_id'];
		$subject_id =$_POST['subject_id'];

		$check_subject_archive ="SELECT subject_id

										FROM registrar_grade_archive 
										

										WHERE advisor_faculty_id='$faculty_id' 
										AND school_id='$school_id' 
										AND subject_id = '$subject_id'
										";

					$connect = mysql_query($check_subject_archive) or die(mysql_error());

					$count = mysql_num_rows($connect);

					if($count > 0){

						$return['saved'] = 1; 

					}
					else{

						$return['saved'] = 0; 

					}

					echo json_encode($return);
	}		
?>