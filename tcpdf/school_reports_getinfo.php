<?php

require_once('../DBconnect.php');


$school_id = $_GET['school_id'];

$getschool_upload_id = "SELECT school_id FROM image_upload WHERE school_id = $school_id";

$getschool_upload_id_result = mysql_query($getschool_upload_id);

$getschool_rows = mysql_num_rows($getschool_upload_id_result);

if($getschool_rows == 0){
	$school_id_val = "default";
}else{
	$school_id_val = $school_id;
}


$get_sections = "SELECT * FROM section WHERE school_id = $school_id AND availability_status = '1'";

$get_sections_result = mysql_query($get_sections);

$total_active = mysql_num_rows($get_sections_result);

$getschool_info = "SELECT * FROM schools WHERE school_id = $school_id";

$getschool_info_result = mysql_query($getschool_info);

while($row = mysql_fetch_array($getschool_info_result)){
	$school_name = strtoupper($row['school_name']);
	$school_address = strtoupper($row['school_address']);
}

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
								$complete = 0;
								$incomplete = 0;
			 
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
								        $complete = $i;
								    }
								    else{
								        $item['status']='incomplete';
								    }					
												
											$data[]=$item;
											
									$i++;

									$incomplete = $i - $complete;

									}

						$status ='';
						foreach($data as $k){
							$status .= '<tr>
											<td width = "100">'.$k['status'].'</td>
											<td width = "120"></td>
										</tr>';
						}


$get_all_sec = "SELECT * FROM section WHERE school_id = $school_id ORDER BY section_level ASC";

$get_all_sec_result = mysql_query($get_all_sec);

$sections = array();

while($rows = mysql_fetch_assoc($get_all_sec_result)){
	$sections[] = $rows;
}

$sections_val = '';
foreach($sections as $k){
	$sections_val .= '<tr>
						<td width = "200">'.$k['section_name'].'</td>
						<td width = "120">'.$k['section_level'].'</td>
					  </tr>';
}

$get_adviser = "SELECT *
				FROM school_faculty a
				LEFT JOIN advisory_sections b ON ( a.faculty_id = b.faculty_id ) 
				WHERE a.school_id = $school_id ORDER BY b.year_level ASC";

$get_adviser_result=mysql_query($get_adviser);

$advisers = array();
while($rows=mysql_fetch_assoc($get_adviser_result)){
	$advisers[] = $rows;
}

$advisers_val = '';
foreach($advisers as $k){
	$advisers_val .= '<tr>
						<td width = "180">'.$k['f_firstname'].' '.$k['f_middlename'].' '.$k['f_lastname'].'</td>
					  </tr>';
}

?>