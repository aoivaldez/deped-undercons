<?php

require_once('../DBconnect.php');

$get_num_schools = "SELECT school_id FROM schools";

$get_num_schools_result = mysql_query($get_num_schools);

$total_schools = mysql_num_rows($get_num_schools_result);

$get_num_active = "SELECT school_id FROM schools WHERE status = 'activated'";

$get_num_active_result = mysql_query($get_num_active);

$total_active = mysql_num_rows($get_num_active_result);

		$select_all_schools = "SELECT * FROM schools ";

		$query = mysql_query($select_all_schools) OR die(mysql_error());

		
		$count = 0;
		$complete = 0;
		$incomplete = 0;

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

							 if($sections_counts_grade_archive =='0' || $sections_counts_grade_archive != $sections_counts){

								$item[$count]['stat'] ='Pending';
							 }
							
							 else if($sections_counts_grade_archive != $sections_counts){

							 	$item[$count]['stat'] ='Incomplete';

							 }
							 else{

							 	
							 	$item[$count]['stat'] = 'Complete';
							 	$complete = $count;


							 }
							 $incomplete = $count - $complete;

						}	


$get_school_info = "SELECT * FROM schools a
					LEFT JOIN deped_grade_archive b 
					ON (a.school_id=b.school_id) 
					GROUP BY a.school_id ";

$get_school_info_result = mysql_query($get_school_info);

$schools = array();
while($rows = mysql_fetch_assoc($get_school_info_result)){
	$schools[] = $rows;
}

$school_info = '';
foreach($schools as $k){
	$school_info .= '<tr>
						<td width = "200">'.$k['school_name'].'</td>
						<td width = "200">'.$k['school_address'].'</td>
						<td width = "100">'.$k['submission_date'].'</td>
						<td width = "100">'.$k['status_acceptance'].'</td>
						<td width = "120">'.$k['remarks'].'</td>
					 </tr>';
}




?>