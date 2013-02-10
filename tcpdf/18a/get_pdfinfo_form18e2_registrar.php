<?php

	require_once('DBconnect.php');

	$id = "12";
	$subject_level = "grade4";

	$today = date("F j, Y");


	$get_subject = "SELECT * FROM subjects WHERE level = '$subject_level' and status = '1'";

	$get_subject_result = mysql_query($get_subject);

	$subjects = array();
	while($rows = mysql_fetch_assoc($get_subject_result)){
		$subjects[] = $rows;
	}

	$subjects_list = '';

	foreach($subjects as $l){

	$subjects_list .=' <td width="45" cellpadding = "0">
				<table cellspacing="0" cellpadding="0">
			<tr>
				<th class="header" height="15.5" style="text-align:center;">'.$l["subject_name"].'</th>
			</tr>
				</table>
			</td>';
	}

	$get_id = "SELECT * FROM students where faculty_id = '$id' and gender = 'male' ORDER BY lastname ASC";

	$get_id_result = mysql_query($get_id);

	$output = array();
	while($rows = mysql_fetch_assoc($get_id_result)){
		$output[] = $rows;
	}

	$html_val = '';

	foreach($output as $k){
		$html_val .= '<tr>
					  <td width="150">'.$k["lastname"].', '.$k["middlename"].', '.$k["firstname"].'</td>
					  <td width="170">'.$k["address"].'</td>
					  <td width="28.5"></td>
					  <td width="26"></td>
					  <td width="80"></td>
					  </tr>';
	}

	$get_grades = "SELECT * FROM registrar_grade_archive a 
				   LEFT JOIN subjects b ON (a.subject_id = b.subject_id) 
				   LEFT JOIN students c ON (c.student_id = a.student_id)
				   WHERE a.advisor_faculty_id = '12'  AND c.gender = 'male' 
				   AND b.subject_name = 'Filipino' ORDER BY c.lastname, b.subject_id ASC ";


	$get_grades_result = mysql_query($get_grades);

	$grades = array();
	
	while($rows = mysql_fetch_assoc($get_grades_result)){
		$grades[] = $rows;
	}

	$fil_val ='';

		foreach($grades as $m){
			

				$fil_val .= '	<tr>
									<td width = "45">'.$m['grade'].'</td>
								</tr>';
			}


	$get_grades = "SELECT * FROM registrar_grade_archive a 
				   LEFT JOIN subjects b ON (a.subject_id = b.subject_id) 
				   LEFT JOIN students c ON (c.student_id = a.student_id)
				   WHERE a.advisor_faculty_id = '12'  AND c.gender = 'male' 
				   AND b.subject_name = 'English' ORDER BY c.lastname, b.subject_id ASC ";


	$get_grades_result = mysql_query($get_grades);

	$grades = array();
	
	while($rows = mysql_fetch_assoc($get_grades_result)){
		$grades[] = $rows;
	}

	$eng_val ='';

		foreach($grades as $m){
			

				$eng_val .= '	<tr>
									<td width = "45">'.$m['grade'].'</td>
								</tr>';
			}

	$get_grades = "SELECT * FROM registrar_grade_archive a 
				   LEFT JOIN subjects b ON (a.subject_id = b.subject_id) 
				   LEFT JOIN students c ON (c.student_id = a.student_id)
				   WHERE a.advisor_faculty_id = '12'  AND c.gender = 'male' 
				   AND b.subject_name = 'Mathematics' ORDER BY c.lastname, b.subject_id ASC ";


	$get_grades_result = mysql_query($get_grades);

	$grades = array();
	
	while($rows = mysql_fetch_assoc($get_grades_result)){
		$grades[] = $rows;
	}

	$math_val ='';

		foreach($grades as $m){
			

				$math_val .= '	<tr>
									<td width = "45">'.$m['grade'].'</td>
								</tr>';
			}

	$get_grades = "SELECT * FROM registrar_grade_archive a 
				   LEFT JOIN subjects b ON (a.subject_id = b.subject_id) 
				   LEFT JOIN students c ON (c.student_id = a.student_id)
				   WHERE a.advisor_faculty_id = '12'  AND c.gender = 'male' 
				   AND b.subject_name = 'Science' ORDER BY c.lastname, b.subject_id ASC ";


	$get_grades_result = mysql_query($get_grades);

	$grades = array();
	
	while($rows = mysql_fetch_assoc($get_grades_result)){
		$grades[] = $rows;
	}

	$sci_val ='';

		foreach($grades as $m){
			

				$sci_val .= '	<tr>
									<td width = "45">'.$m['grade'].'</td>
								</tr>';
			}

	$get_grades = "SELECT * FROM registrar_grade_archive a 
				   LEFT JOIN subjects b ON (a.subject_id = b.subject_id) 
				   LEFT JOIN students c ON (c.student_id = a.student_id)
				   WHERE a.advisor_faculty_id = '12'  AND c.gender = 'male' 
				   AND b.subject_name = 'Makabayan' ORDER BY c.lastname, b.subject_id ASC ";


	$get_grades_result = mysql_query($get_grades);

	$grades = array();
	
	while($rows = mysql_fetch_assoc($get_grades_result)){
		$grades[] = $rows;
	}

	$mkb_val ='';

		foreach($grades as $m){
			

				$mkb_val .= '	<tr>
									<td width = "45">'.$m['grade'].'</td>
								</tr>';
			}

	$get_grades = "SELECT * FROM registrar_grade_archive a 
				   LEFT JOIN subjects b ON (a.subject_id = b.subject_id) 
				   LEFT JOIN students c ON (c.student_id = a.student_id)
				   WHERE a.advisor_faculty_id = '12'  AND c.gender = 'male' 
				   AND b.subject_name = 'Sibika' ORDER BY c.lastname, b.subject_id ASC ";


	$get_grades_result = mysql_query($get_grades);

	$grades = array();
	
	while($rows = mysql_fetch_assoc($get_grades_result)){
		$grades[] = $rows;
	}

	$sib_val ='';

		foreach($grades as $m){
			

				$sib_val .= '	<tr>
									<td width = "45">'.$m['grade'].'</td>
								</tr>';
			}

	$get_grades = "SELECT * FROM registrar_grade_archive a 
				   LEFT JOIN subjects b ON (a.subject_id = b.subject_id) 
				   LEFT JOIN students c ON (c.student_id = a.student_id)
				   WHERE a.advisor_faculty_id = '12'  AND c.gender = 'male' 
				   AND b.subject_name = 'MAPE' ORDER BY c.lastname, b.subject_id ASC ";


	$get_grades_result = mysql_query($get_grades);

	$grades = array();
	
	while($rows = mysql_fetch_assoc($get_grades_result)){
		$grades[] = $rows;
	}

	$mape_val ='';

		foreach($grades as $m){
			

				$mape_val .= '	<tr>
									<td width = "45">'.$m['grade'].'</td>
								</tr>';
			}

	$get_grades = "SELECT * FROM registrar_grade_archive a 
				   LEFT JOIN subjects b ON (a.subject_id = b.subject_id) 
				   LEFT JOIN students c ON (c.student_id = a.student_id)
				   WHERE a.advisor_faculty_id = '12'  AND c.gender = 'male' 
				   AND b.subject_name = 'Values' ORDER BY c.lastname, b.subject_id ASC ";


	$get_grades_result = mysql_query($get_grades);

	$grades = array();
	
	while($rows = mysql_fetch_assoc($get_grades_result)){
		$grades[] = $rows;
	}

	$val_val ='';

		foreach($grades as $m){
			

				$val_val .= '	<tr>
									<td width = "45">'.$m['grade'].'</td>
								</tr>';
			}

	$get_grades = "SELECT * FROM registrar_grade_archive a 
				   LEFT JOIN subjects b ON (a.subject_id = b.subject_id) 
				   LEFT JOIN students c ON (c.student_id = a.student_id)
				   WHERE a.advisor_faculty_id = '12'  AND c.gender = 'male' 
				   AND b.subject_name = 'HELE' ORDER BY c.lastname, b.subject_id ASC ";


	$get_grades_result = mysql_query($get_grades);

	$grades = array();
	
	while($rows = mysql_fetch_assoc($get_grades_result)){
		$grades[] = $rows;
	}

	$hele_val ='';

		foreach($grades as $m){
			

				$hele_val .= '	<tr>
									<td width = "45">'.$m['grade'].'</td>
								</tr>';
			}

	/********-END OF MALE-********/


	$get_id = "SELECT * FROM students where faculty_id = '$id' and gender = 'female' ORDER BY lastname ASC";

	$get_id_result = mysql_query($get_id);

	$output = array();
	while($rows = mysql_fetch_assoc($get_id_result)){
		$output[] = $rows;
	}

	$fem_html_val = '';

	foreach($output as $k){
		$fem_html_val .= '<tr>
					  <td width="150">'.$k["lastname"].', '.$k["middlename"].', '.$k["firstname"].'</td>
					  <td width="170">'.$k["address"].'</td>
					  <td width="28.5"></td>
					  <td width="26"></td>
					  <td width="80"></td>
					  </tr>';
	}

	$get_grades = "SELECT * FROM registrar_grade_archive a 
				   LEFT JOIN subjects b ON (a.subject_id = b.subject_id) 
				   LEFT JOIN students c ON (c.student_id = a.student_id)
				   WHERE a.advisor_faculty_id = '12'  AND c.gender = 'female' 
				   AND b.subject_name = 'Filipino' ORDER BY c.lastname, b.subject_id ASC ";


	$get_grades_result = mysql_query($get_grades);

	$grades = array();
	
	while($rows = mysql_fetch_assoc($get_grades_result)){
		$grades[] = $rows;
	}

	$fem_fil_val ='';

		foreach($grades as $m){
			

				$fem_fil_val .= '	<tr>
									<td width = "45">'.$m['grade'].'</td>
								</tr>';
			}

	$get_grades = "SELECT * FROM registrar_grade_archive a 
				   LEFT JOIN subjects b ON (a.subject_id = b.subject_id) 
				   LEFT JOIN students c ON (c.student_id = a.student_id)
				   WHERE a.advisor_faculty_id = '12'  AND c.gender = 'female' 
				   AND b.subject_name = 'English' ORDER BY c.lastname, b.subject_id ASC ";


	$get_grades_result = mysql_query($get_grades);

	$grades = array();
	
	while($rows = mysql_fetch_assoc($get_grades_result)){
		$grades[] = $rows;
	}

	$fem_eng_val ='';

		foreach($grades as $m){
			

				$fem_eng_val .= '	<tr>
									<td width = "45">'.$m['grade'].'</td>
								</tr>';
			}

	$get_grades = "SELECT * FROM registrar_grade_archive a 
				   LEFT JOIN subjects b ON (a.subject_id = b.subject_id) 
				   LEFT JOIN students c ON (c.student_id = a.student_id)
				   WHERE a.advisor_faculty_id = '12'  AND c.gender = 'female' 
				   AND b.subject_name = 'Mathematics' ORDER BY c.lastname, b.subject_id ASC ";


	$get_grades_result = mysql_query($get_grades);

	$grades = array();
	
	while($rows = mysql_fetch_assoc($get_grades_result)){
		$grades[] = $rows;
	}

	$fem_math_val ='';

		foreach($grades as $m){
			

				$fem_math_val .= '	<tr>
									<td width = "45">'.$m['grade'].'</td>
								</tr>';
			}

	$get_grades = "SELECT * FROM registrar_grade_archive a 
				   LEFT JOIN subjects b ON (a.subject_id = b.subject_id) 
				   LEFT JOIN students c ON (c.student_id = a.student_id)
				   WHERE a.advisor_faculty_id = '12'  AND c.gender = 'female' 
				   AND b.subject_name = 'Science' ORDER BY c.lastname, b.subject_id ASC ";


	$get_grades_result = mysql_query($get_grades);

	$grades = array();
	
	while($rows = mysql_fetch_assoc($get_grades_result)){
		$grades[] = $rows;
	}

	$fem_sci_val ='';

		foreach($grades as $m){
			

				$fem_sci_val .= '	<tr>
									<td width = "45">'.$m['grade'].'</td>
								</tr>';
			}

	$get_grades = "SELECT * FROM registrar_grade_archive a 
				   LEFT JOIN subjects b ON (a.subject_id = b.subject_id) 
				   LEFT JOIN students c ON (c.student_id = a.student_id)
				   WHERE a.advisor_faculty_id = '12'  AND c.gender = 'female' 
				   AND b.subject_name = 'Makabayan' ORDER BY c.lastname, b.subject_id ASC ";


	$get_grades_result = mysql_query($get_grades);

	$grades = array();
	
	while($rows = mysql_fetch_assoc($get_grades_result)){
		$grades[] = $rows;
	}

	$fem_mkb_val ='';

		foreach($grades as $m){
			

				$fem_mkb_val .= '	<tr>
									<td width = "45">'.$m['grade'].'</td>
								</tr>';
			}

	$get_grades = "SELECT * FROM registrar_grade_archive a 
				   LEFT JOIN subjects b ON (a.subject_id = b.subject_id) 
				   LEFT JOIN students c ON (c.student_id = a.student_id)
				   WHERE a.advisor_faculty_id = '12'  AND c.gender = 'female' 
				   AND b.subject_name = 'Sibika' ORDER BY c.lastname, b.subject_id ASC ";


	$get_grades_result = mysql_query($get_grades);

	$grades = array();
	
	while($rows = mysql_fetch_assoc($get_grades_result)){
		$grades[] = $rows;
	}

	$fem_sib_val ='';

		foreach($grades as $m){
			

				$fem_sib_val .= '	<tr>
									<td width = "45">'.$m['grade'].'</td>
								</tr>';
			}

	$get_grades = "SELECT * FROM registrar_grade_archive a 
				   LEFT JOIN subjects b ON (a.subject_id = b.subject_id) 
				   LEFT JOIN students c ON (c.student_id = a.student_id)
				   WHERE a.advisor_faculty_id = '12'  AND c.gender = 'female' 
				   AND b.subject_name = 'MAPE' ORDER BY c.lastname, b.subject_id ASC ";


	$get_grades_result = mysql_query($get_grades);

	$grades = array();
	
	while($rows = mysql_fetch_assoc($get_grades_result)){
		$grades[] = $rows;
	}

	$fem_mape_val ='';

		foreach($grades as $m){
			

				$fem_mape_val .= '	<tr>
									<td width = "45">'.$m['grade'].'</td>
								</tr>';
			}

	$get_grades = "SELECT * FROM registrar_grade_archive a 
				   LEFT JOIN subjects b ON (a.subject_id = b.subject_id) 
				   LEFT JOIN students c ON (c.student_id = a.student_id)
				   WHERE a.advisor_faculty_id = '12'  AND c.gender = 'female' 
				   AND b.subject_name = 'Values' ORDER BY c.lastname, b.subject_id ASC ";


	$get_grades_result = mysql_query($get_grades);

	$grades = array();
	
	while($rows = mysql_fetch_assoc($get_grades_result)){
		$grades[] = $rows;
	}

	$fem_val_val ='';

		foreach($grades as $m){
			

				$fem_val_val .= '	<tr>
									<td width = "45">'.$m['grade'].'</td>
								</tr>';
			}

	$get_grades = "SELECT * FROM registrar_grade_archive a 
				   LEFT JOIN subjects b ON (a.subject_id = b.subject_id) 
				   LEFT JOIN students c ON (c.student_id = a.student_id)
				   WHERE a.advisor_faculty_id = '12'  AND c.gender = 'female' 
				   AND b.subject_name = 'HELE' ORDER BY c.lastname, b.subject_id ASC ";


	$get_grades_result = mysql_query($get_grades);

	$grades = array();
	
	while($rows = mysql_fetch_assoc($get_grades_result)){
		$grades[] = $rows;
	}

	$fem_hele_val ='';

		foreach($grades as $m){
			

				$fem_hele_val .= '	<tr>
									<td width = "45">'.$m['grade'].'</td>
									</tr>';
			}



?>