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
		$get_section_name = $rows["section_name"];
	}

	$school_name = $get_school_name;
	$section_name = $get_section_name;


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

	$get_subject = "SELECT * FROM subjects WHERE level = '$subject_level' and status = '1'";

	$get_subject_result = mysql_query($get_subject);

	$subjects = array();
	while($rows = mysql_fetch_assoc($get_subject_result)){
		$subjects[] = $rows;
	}

	$subjects_list = '';

	foreach($subjects as $l){

	$subjects_list .=' <td width="60" cellpadding = "0">
				<table border="1" cellspacing="0" cellpadding="0">
			<tr>
				<th class="header" height="15.5" style="text-align:center;">'.$l["subject_name"].'</th>
			</tr>
			<tr>
				<td width="30">
					<table width="30" border="1" cellpadding="3">
						<tr><th>FINAL RATING</th></tr>
					</table>
				</td>
				<td width="30">
					<table width="30" border="1" cellpadding="3">
						<tr><th>ACTION TAKEN</th></tr>
					</table>
				</td>
			</tr>
				</table>
			</td>';
	}


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
					  <td width="130">'.$k["last_name"].', '.$k["first_name"].', '.$k["middle_name"].'</td>
					  <td width="90">'.$k["address"].'</td>
					  <td width="28.5">'.$k['year_in_school'].'</td>
					  <td width="26">'.$k['age'].'</td>
					  <td width="55">'.$k['attendance'].'</td>
					  </tr>';
	
	}
	
		$get_grades="SELECT GROUP_CONCAT( a.grade
					ORDER BY b.subject_id ASC ) AS res
					FROM deped_grade_archive a
					LEFT JOIN subjects b ON ( a.subject_id = b.subject_id ) 
					WHERE a.advisor_id =  '$adviser_id'
					AND a.gender =  'male'
					AND a.school_id = '$school_id'
					AND a.section_id = '$section_id'
					GROUP BY a.last_name";



		$get_grades_result = mysql_query($get_grades);

		$grades = '';

		while($rows = mysql_fetch_array($get_grades_result)){
		$result_array = $rows['res'];
		$gradechunks = explode(",", $result_array);
		
		$grades .= '<tr>';

		for($x=0; $x<count($gradechunks); $x++){

			if($gradechunks[$x] > 60 ){
				$action_taken = "Passed";
			}else{
				$action_taken = "Failed"; 
			}
			$grades .='<td width = "30">'.$gradechunks[$x].'</td>
					  <td width = "30">'.$action_taken.'</td>';
		}
		$grades .= '</tr>';
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
					} else{
						$remarks = "PROMOTED";
					}

				$ave .= '<td width="30">'.$average_result.'</td>
						 <td width="120">'.$remarks.'</td></tr>';
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
					  <td width="130">'.$k["last_name"].', '.$k["first_name"].', '.$k["middle_name"].'</td>
					  <td width="90">'.$k["address"].'</td>
					  <td width="28.5">'.$k['year_in_school'].'</td>
					  <td width="26">'.$k['age'].'</td>
					  <td width="55">'.$k['attendance'].'</td>
					  </tr>';
	}

	$get_grades="SELECT GROUP_CONCAT( a.grade
					ORDER BY b.subject_id ASC ) AS res
					FROM deped_grade_archive a
					LEFT JOIN subjects b ON ( a.subject_id = b.subject_id ) 
					WHERE a.advisor_id =  '$adviser_id'
					AND a.gender =  'female'
					AND a.school_id = '$school_id'
					AND a.section_id = '$section_id'
					GROUP BY a.last_name";

		$get_grades_result = mysql_query($get_grades);

		$fem_grades = '';

		while($rows = mysql_fetch_array($get_grades_result)){
		$result_array = $rows['res'];
		$gradechunks = explode(",", $result_array);
		
		$fem_grades .= '<tr>';

		for($x=0; $x<count($gradechunks); $x++){

			if($gradechunks[$x] > 60 ){
				$action_taken = "Passed";
			}else{
				$action_taken = "Failed"; 
			}
			$fem_grades .='<td width = "30">'.$gradechunks[$x].'</td>
					  <td width = "30">'.$action_taken.'</td>';
		}
		$fem_grades .= '</tr>';
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
		$average = 0;

		while($rows = mysql_fetch_array($get_ave_result)){
			$result_array = $rows['ave'];
			$gradechunks = explode(",", $result_array);
			$gradecount = count($gradechunks);

			$fem_ave .="<tr>";

			for($x=0; $x<$gradecount; $x++){
				$average += $gradechunks[$x];
			}
				$average /= $gradecount;
				$average_result = number_format($average,2,'.','');
			if($average <= 60){
						$remarks = "RETAINED";
					} else{
						$remarks = "PROMOTED";
					}

				$fem_ave .= '<td width="30">'.$average_result.'</td>
						 <td width="120">'.$remarks.'</td></tr>';
		}

/*********************-END OF FEMALE-*********************/

?>