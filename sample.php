<?php
require_once('DBconnect.php');

$select_all_schools = "SELECT * FROM schools ";

		$query = mysql_query($select_all_schools) OR die(mysql_error());

		$return_data = array();


		while($row = mysql_fetch_array($query)){

							$item=array(	
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

							 echo  $sections_counts_grade_archive."=".$sections_counts; 

							 if($sections_counts_grade_archive == $sections_counts ){

							$item['stat'] = 'Complete';
							 }
							
							 else{

							 	$item['stat'] ='Incomplete';

							 }

						}			


				echo json_encode($item);
						

?>