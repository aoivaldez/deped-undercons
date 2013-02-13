<?php
	include_once('DBconnect.php');

	$func_num = $_POST['func_num'];


	switch ($func_num) {
		
		case 1:
			section_search_check_pki();
			break;
		case 2:
			unset_section_pki();
			break;
		case 3:
			set_section_pki();
			break;					
											
	}

	
	

	function section_search_check_pki(){

			session_start();

			$school_id=$_SESSION['school_id'];


			$section = $_POST['section'];

			$search_string = "(a.section_name LIKE '%".$section."%')";
			
			$query = "SELECT * FROM section a 
							LEFT JOIN advisory_sections b ON(a.section_id = b.section_id)
							LEFT JOIN school_faculty c ON (b.faculty_id = c.faculty_id) 
							WHERE {$search_string} 
							AND a.school_id = '$school_id' 
							AND a.availability_status = '1'

							";

			$result = mysql_query($query)or die(mysql_error());
	
			$count=0;
			while ($row = mysql_fetch_array($result)){

				$data[$count] = array(
					'section_id' => $row['section_id'],
					'section_name' => $row['section_name'],
					'lastname' => $row['f_lastname'],
					'firstname' => $row['f_firstname'],
					'middlename' => $row['f_middlename'],
					'section_level' => $row['section_level'],
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

	function unset_section_pki(){
		session_start();
		$school_id = $_SESSION['school_id'];

		
		$section_info = $_POST['sections_id'];


			$section_id_update= array();

		foreach ($section_info as $key=>$data) {
								    $section_id= $data['section_id'];
								   

				$sections_id_update[$key] = "UPDATE section SET public_key = '' 
											WHERE school_id = '$school_id'
											AND section_id = ' $section_id'  ";


				$query_update_pki= mysql_query($sections_id_update[$key]) or die (mysql_error());

				}

				if($query_update_pki){

					$return['pki_set'] = "1";
				}else{

					$return['pki_set'] = "0";
				}


		echo json_encode($return);
		
	}

	function set_section_pki(){

		session_start();
		$school_id = $_SESSION['school_id'];

		
		$section_info = $_POST['sections_id'];


			$section_id_update= array();

		foreach ($section_info as $key=>$data) {
								    $section_id= $data['section_id'];
								   

				$sections_id_update[$key] = "UPDATE section SET public_key = 'ALVIN' 
											WHERE school_id = '$school_id'
											AND section_id = ' $section_id'  ";


				$query_update_pki= mysql_query($sections_id_update[$key]) or die (mysql_error());

				}

				if($query_update_pki){

					$return['pki_set'] = "1";
				}else{

					$return['pki_set'] = "0";
				}


		echo json_encode($return);
		
	}

?>
