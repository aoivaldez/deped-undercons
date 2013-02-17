<?php
require_once('DBconnect.php');
session_start();


  $school_id = $_SESSION['school_id'];



  $switch_num = $_POST['func_num'];



switch($switch_num){

	case 1:
		get_section();

		break;

	case 2:
		delete_section();

		break;
	case 3:
		get_section_single();
		break;	 
	case 4:
		add_section();
		break;
	case 5:
		get_all_section();
		break;
	case 6:
		get_all_section_status();
		break;	
	case 7:
		check_grades();	
}



function get_section(){

global $school_id;

$get_section = "SELECT *
				FROM section
				WHERE school_id = '$school_id' AND availability_status = '0' ORDER BY section_level ASC";



				$result=mysql_query($get_section)or die(mysql_error());

 
$data=array();
			while ($row = mysql_fetch_array($result))
						{
							$data[] = array(
							   'sec_id'=>$row['section_id'],
							   'sec_name'=>$row['section_name'],
							   'sec_dept'=>$row['section_department'],
							   'sec_lvl'=>$row['section_level'],
							);
						}
 
echo json_encode($data);

}



function delete_section(){
	$sect_id=$_POST['sect_id'];
		global $school_id;
			
		$delete_sect= "DELETE FROM section WHERE school_id='$school_id' AND section_id = '$sect_id' ";		
		$result=mysql_query($delete_sect)or die(mysql_error());

		

		}

function get_section_single(){
	global $school_id;

	$advsry_id=$_POST['advsry_id'];

$get_section = "SELECT *
				FROM advisory_sections
				WHERE school_id = '$school_id' AND advisory_id = '$advsry_id' ";



				$result=mysql_query($get_section)or die(mysql_error());

				$data=array();

while ($row = mysql_fetch_array($result))
	{
	$data[] = array(
	   'advsory_id' => $row['advisory_id'],
	   'sec_name'=>$row['section_name'],
	   'sec_dept'=>$row['section_department'],
	   'sec_lvl'=>$row['year_level'],
	);
	}
 
echo json_encode($data);
}



	function add_section(){


			if(isset($_POST['department'], $_POST['section_name'], $_POST['year_grade'])){
				global $school_id;

				$class_dept = $_POST['department'];
				$section_name = $_POST['section_name'];
				$year_grade_level = $_POST['year_grade'];

				$insert_section = "INSERT INTO `section`(`school_id`,`section_name`,`section_department`,`section_level`) 
						  VALUES('$school_id','$section_name','$class_dept','$year_grade_level')";


						$result = mysql_query($insert_section) or die('error insert'.mysql_error());

						$data = "Section successfully added";

						echo json_encode($data);
						
					}

					
				}
	function get_all_section(){

			global $school_id;

			$get_section = "SELECT *
							FROM section a
							LEFT JOIN advisory_sections b ON(a.section_id = b.section_id)							
							
							WHERE a.school_id = '$school_id'  ORDER BY section_level ASC";



							$result=mysql_query($get_section)or die(mysql_error());

			 
									$data=array();
						while ($row = mysql_fetch_array($result))
									{
										$data[] = array(
										   'sec_id'=>$row['section_id'],
										   'sec_name'=>$row['section_name'],
										   'sec_dept'=>$row['section_department'],
										   'sec_lvl'=>$row['section_level'],
										  	'sec_status'=>$row['availability_status'],
										  	'faculty_id'=>$row['faculty_id'],
										  	'advisory_id'=>$row['advisory_id'],
										);
									}
			 
			echo json_encode($data);

			}

	function get_all_section_status(){

			global $school_id;

			$get_section = "SELECT *
							FROM section a
							LEFT JOIN advisory_sections b ON(a.section_id = b.section_id)
							LEFT JOIN school_faculty c ON (b.faculty_id = c.faculty_id)
							
							WHERE a.school_id = '$school_id'
							AND a.availability_status = '1'  
							ORDER BY section_level ASC";

							



							$result=mysql_query($get_section)or die(mysql_error());

							$count_sections = mysql_num_rows($result);

								$i=0;
			 
									$data=array();
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

												
										
												
											$data[]=$item;
											
										

									$i++;


									}

									 

						


						

			 
			echo json_encode($data);

		}					


		function check_grades(){
			$year_grade = $_POST['year_grade'];
			$section_id = $_POST['section_id'];
			$faculty_id = $_POST['faculty_id'];
					
							$get_subjects = "SELECT subject_name
											FROM subjects  
											WHERE level = '$year_grade' ";


							$result_get_subjects =mysql_query($get_subjects)or die(mysql_error());
							
							$subjects_count = mysql_num_rows($result_get_subjects);


						$check_archive_subjects = " SELECT b.subject_name 
													FROM registrar_grade_archive a
													LEFT JOIN subjects b ON(a.subject_id=b.subject_id)
													
													WHERE a.advisor_faculty_id = '$faculty_id'
													AND a.section_id = '$section_id'
													GROUP BY b.subject_name ASC
													 " ;

						 $query_checking =mysql_query($check_archive_subjects)or die(mysql_error());

						$subjects_count_sent = mysql_num_rows($query_checking);

						$item = array();

									
								if($subjects_count_sent == $subjects_count){
								        $item['status']="1";
								    }
								    else{
								        $item['status']="0";
								    }
		echo json_encode($item);
		}				
?>