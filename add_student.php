<?php
require_once('DBconnect.php');
	session_start();

		$section_id = $_POST['section_id'];

		$b_lname = $_POST['bstudnt_lname'];
		$b_fname = $_POST['bstudnt_fname'];
		$b_mname = $_POST['bstudnt_mname'];
		$address_b = $_POST['bstudnt_address'];
		$age_b = $_POST['bstudnt_age'];


		$g_lname = $_POST['gstudnt_lname'];
		$g_fname = $_POST['gstudnt_fname'];
		$g_mname = $_POST['gstudnt_mname'];
		$address_g = $_POST['gstudnt_address'];
		$age_g = $_POST['gstudnt_age'];


		$department = $_POST['class_dept'];
		$section = $_POST['section_name'];
		$year_grade = $_POST['class_year_grade'];

		$school_id = $_SESSION['school_id'];
		$counter = 0;
		$counter2 = 0;

		$button = $_POST['add_students'];

		$advisory_id = $_POST['advisory_id'];

		$school_id = $_SESSION['school_id'];
		$faculty_id	= $_SESSION['user_id_fac'];

if(isset($button)){

		foreach($b_lname as $blast => $a){ 
			$arrayblname[] ="".$a;
			}  
	 	foreach($b_fname as $bfirst => $b){
				$arraybfname[] ="".$b;
				$counter2+=1;
			}
		foreach($b_mname as $bmid => $c){
				$arraybmname[] ="".$c;
				$counter+=1;
			}
			
		foreach($address_b as $b_adress => $b_addrss){
				$arrayb_address[] ="".$b_addrss;
				$counter2+=1;
			}
		foreach($age_b as $b_key_age => $b_age){
				$arrayb_age[] ="".$b_age;
				$counter2+=1;
			}			



			for($v=0;$v<=$counter-1;$v++){

				if($arraybfname[$v]!="" && $arraybmname[$v]!="" && $arrayblname[$v]!=""){

				$insert = "INSERT INTO students(school_id,advisory_id,faculty_id,firstname,middlename,lastname,gender,age,department,address,section_id,year_grade) 
						  VALUES('$school_id',
						  		'$advisory_id',
						  		'$faculty_id',
						  		'$arraybfname[$v]',
						  		'$arraybmname[$v]',
						  		'$arrayblname[$v]',
						  		'male',
						  		'$arrayb_age[$v]',
						  		'$department',
						  		'$arrayb_address[$v]',
						  		'$section_id',
						  		'$year_grade')";

					  if(@!mysql_query($insert)){
						die('error insert'.mysql_error());


						}
				}

			
 			
			}




			foreach($g_lname as $glast => $d){ 
			$arrayglname[] ="".$d;
			}  
	 	foreach($g_fname as $gfirst => $e){
				$arraygfname[] ="".$e;
				$counter2+=1;
			}
		foreach($g_mname as $gmid => $f){
				$arraygmname[] ="".$f;
				$counter2+=1;
			}
		foreach($address_g as $g_adress => $g_addrss){
				$arrayg_address[] ="".$g_addrss;
				$counter2+=1;
			}
		foreach($age_g as $g_key_age => $g_age){
				$arrayg_age[] ="".$g_age;
				$counter2+=1;
			}			



			for($v=0;$v<=$counter2-1;$v++){

				if($arraygfname[$v]!="" && $arraygmname[$v]!="" && $arrayglname[$v]!=""){

				$insert2 = "INSERT INTO students(school_id,advisory_id,faculty_id,firstname,middlename,lastname,gender,age,department,address,section_id,year_grade) 
			  VALUES('$school_id',
			  		'$advisory_id',
			  		'$faculty_id',
			  		'$arraygfname[$v]',
			  		'$arraygmname[$v]',
			  		'$arrayglname[$v]',
			  		'female',
			  		'$arrayg_age[$v]',
			  		'$department',
			  		'$arrayg_address[$v]',
			  		'$section_id',
			  		'$year_grade')";

					  if(@!mysql_query($insert2)){
						die('error insert'.mysql_error());


						}
				}
				else{

					header('location:teacher_class.php');
				}

			
 			
			}
		header('location:teacher_class.php');
			
}													


?>