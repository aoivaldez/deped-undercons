<?php

require_once('../DBconnect.php');

	$school_id = $_GET['sch'];
	$subject_level = $_GET['level'];
	$section_id = $_GET['sec_id'];
	$adviser_id = $_GET['adviser_id'];

	$get_date = "SELECT submission_date FROM deped_grade_archive where advisor_id = $adviser_id  and section_id = $section_id LIMIT 1";

	$get_date_result = mysql_query($get_date);

	while($row = mysql_fetch_array($get_date_result)){
		$date = $row['submission_date'];
	}

	$get_school_info = "SELECT * FROM schools a 
						LEFT JOIN section b ON (a.school_id=b.school_id) WHERE b.section_id = '$section_id'"; 

	$get_school_info_result = mysql_query($get_school_info);

	$school_info = array();
	while($rows = mysql_fetch_array($get_school_info_result)){
		$get_school_name = $rows["school_name"];
	}
	$school_name = $get_school_name;

	$get_level = "SELECT * FROM deped_grade_archive a 
				  LEFT JOIN section b ON (a.section_id = b.section_id)
				  WHERE a.section_id = $section_id";

	$get_level_result = mysql_query($get_level);

	while($row = mysql_fetch_array($get_level_result)){
		$grade = $row['section_level'];
	}

	$get_ave_age = "SELECT AVG(age) as average_age FROM students WHERE section_id = $section_id";

	$get_ave_age_result = mysql_query($get_ave_age);

	while($rows = mysql_fetch_array($get_ave_age_result)){
		$average_age = $rows['average_age'];
	}
	$final_ave_age = number_format($average_age,2,'.','');


	$get_total_age = "SELECT SUM( age ) AS total_age FROM students WHERE section_id = $section_id";

	$get_total_age_result = mysql_query($get_total_age);

	while($rows = mysql_fetch_array($get_total_age_result)){
		$total = $rows['total_age'];
	}
	$final_total_age = $total;
	


	$get_id = "SELECT * FROM deped_grade_archive where advisor_id = $adviser_id 
	and school_id = $school_id 
	and  section_id = '$section_id' 
	and gender = 'male' 
	GROUP BY last_name ASC";

	$get_id_result = mysql_query($get_id);

	$output = array();
	while($rows = mysql_fetch_assoc($get_id_result)){
		$output[] = $rows;
	}

	$html_val = '';


	foreach($output as $k){
		$html_val .= '<tr>
					  <td width="150">'.$k["last_name"].', '.$k["first_name"].', '.$k["middle_name"].'</td>
					  <td width="150">'.$k["address"].'</td>
					  <td width="50">'.$k['year_in_school'].'</td>
					  <td width="30">'.$k['age'].'</td>
					  <td width="55">'.$k['attendance'].'</td>
					  </tr>';
	
	}

	$get_average="SELECT GROUP_CONCAT( a.grade
					ORDER BY b.subject_id ASC ) AS ave
					FROM deped_grade_archive a
					LEFT JOIN subjects b ON ( a.subject_id = b.subject_id ) 
					WHERE a.advisor_id =  '$adviser_id'
					AND a.gender =  'male'
					AND a.school_id = '$school_id'
					AND a.section_id = '$section_id'
					GROUP BY a.last_name";

		$get_ave_result = mysql_query($get_average);

		$ave = '';
		

		while($rows = mysql_fetch_array($get_ave_result)){
			$result_array = $rows['ave'];
			$gradechunks = explode(",", $result_array);
			$gradecount = count($gradechunks);
			$average = 0;

			$ave .="<tr>";

			for($x=0; $x<$gradecount; $x++){
				$average += $gradechunks[$x];
			}
				$average /= $gradecount;
				$average_result = number_format($average,2,'.','');
			if($average <= 60){
						$remarks = "RETAINED";
						$action_taken = "Failed";
					} else{
						$remarks = "PROMOTED";
						$action_taken = "Passed";
					}

				$ave .= '<td width="50">'.$average_result.'</td>
						 <td width="90">'.$action_taken.'</td>
						 <td width="143">'.$remarks.'</td></tr>';
		}

/*********************-END OF MALE-*********************/


$get_id = "SELECT * FROM deped_grade_archive where advisor_id = $adviser_id 
	and school_id = $school_id 
	and  section_id = '$section_id' 
	and gender = 'female' 
	GROUP BY last_name ASC";
	$get_id_result = mysql_query($get_id);

	$output = array();
	while($rows = mysql_fetch_assoc($get_id_result)){
		$output[] = $rows;
	}

	$fem_html_val = '';

	foreach($output as $k){
		$fem_html_val .= '<tr>
					  <td width="150">'.$k["last_name"].', '.$k["first_name"].', '.$k["middle_name"].'</td>
					  <td width="150">'.$k["address"].'</td>
					  <td width="50">'.$k['year_in_school'].'</td>
					  <td width="30">'.$k['age'].'</td>
					  <td width="55">'.$k['attendance'].'</td>
					  </tr>';
	}

	$get_average="SELECT GROUP_CONCAT( a.grade
					ORDER BY b.subject_id ASC ) AS ave
					FROM deped_grade_archive a
					LEFT JOIN subjects b ON ( a.subject_id = b.subject_id ) 
					WHERE a.advisor_id =  '$adviser_id'
					AND a.gender =  'female'
					AND a.school_id = '$school_id'
					AND a.section_id = '$section_id'
					GROUP BY a.last_name";

		$get_ave_result = mysql_query($get_average);

		$fem_ave = '';
		

		while($rows = mysql_fetch_array($get_ave_result)){
			$result_array = $rows['ave'];
			$gradechunks = explode(",", $result_array);
			$gradecount = count($gradechunks);
			$average = 0;

			$fem_ave .="<tr>";

			for($x=0; $x<$gradecount; $x++){
				$average += $gradechunks[$x];
			}
				$average /= $gradecount;
				$average_result = number_format($average,2,'.','');
			if($average <= 60){
						$remarks = "RETAINED";
						$action_taken = "Failed";
					} else{
						$remarks = "PROMOTED";
						$action_taken = "Passed";
					}

				$fem_ave .= '<td width="50">'.$average_result.'</td>
						 <td width="90">'.$action_taken.'</td>
						 <td width="143">'.$remarks.'</td></tr>';
		} 

?>