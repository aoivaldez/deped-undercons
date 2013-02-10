<?php

require_once('../DBconnect.php');

	$id = $_GET['adviser_id'];
	$subject_level = $_GET['level'];
	$section_id = $_GET['sec_id'];

	$today = date("F j, Y");


	$get_ave_age = "SELECT AVG(age) as average_age FROM students where faculty_id = $id and section_id = $section_id";

	$get_ave_age_result = mysql_query($get_ave_age);

	while($rows = mysql_fetch_array($get_ave_age_result)){
		$average_age = $rows['average_age'];
	}
	$final_ave_age = number_format($average_age,2,'.','');


	$get_total_age = "SELECT SUM(age) AS total_age FROM students where faculty_id = $id and section_id = $section_id";

	$get_total_age_result = mysql_query($get_total_age);

	while($rows = mysql_fetch_array($get_total_age_result)){
		$total = $rows['total_age'];
	}
	$final_total_age = $total;


	$get_id = "SELECT * FROM students 
			   where faculty_id = $id 
			   and gender = 'male' 
			   and section_id = '$section_id'
			   ORDER BY lastname ASC";

	$get_id_result = mysql_query($get_id);

	$output = array();
	while($rows = mysql_fetch_assoc($get_id_result)){
		$output[] = $rows;
	}

	$html_val = '';

	foreach($output as $k){
		$html_val .= '<tr>
					  <td width="150">'.$k["lastname"].', '.$k["firstname"].', '.$k["middlename"].'</td>
					  <td width="150">'.$k["address"].'</td>
					  <td width="50">'.$k['years_in_school'].'</td>
					  <td width="30">'.$k['age'].'</td>
					  <td width="55">'.$k['attendance'].'</td>
					  </tr>';
	}

	$get_average="SELECT group_concat( a.grade 
					ORDER BY b.subject_id ASC ) AS ave
					FROM registrar_grade_archive a
					LEFT JOIN subjects b ON ( a.subject_id = b.subject_id )
					LEFT JOIN students c ON ( c.student_id = a.student_id )
					WHERE a.advisor_faculty_id = $id
					AND a.section_id = '$section_id'
					AND c.gender = 'male'
					GROUP BY c.lastname";

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


	$get_id = "SELECT * FROM students 
			   where faculty_id = $id 
			   and gender = 'female' 
			   and section_id = '$section_id'
			   ORDER BY lastname ASC";

	$get_id_result = mysql_query($get_id);

	$output = array();
	while($rows = mysql_fetch_assoc($get_id_result)){
		$output[] = $rows;
	}

	$fem_html_val = '';

	foreach($output as $k){
		$fem_html_val .= '<tr>
					  <td width="150">'.$k["lastname"].', '.$k["firstname"].', '.$k["middlename"].'</td>
					  <td width="150">'.$k["address"].'</td>
					   <td width="50">'.$k['years_in_school'].'</td>
					  <td width="30">'.$k['age'].'</td>
					  <td width="55">'.$k['attendance'].'</td>
					  </tr>';
	}

	$get_average="SELECT group_concat( a.grade 
					ORDER BY b.subject_id ASC ) AS ave
					FROM registrar_grade_archive a
					LEFT JOIN subjects b ON ( a.subject_id = b.subject_id )
					LEFT JOIN students c ON ( c.student_id = a.student_id )
					WHERE a.advisor_faculty_id = $id
					AND a.section_id = '$section_id'
					AND c.gender = 'female'
					GROUP BY c.lastname";

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