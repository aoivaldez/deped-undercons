<?php
session_start();
require_once('DBconnect.php');

$school_id = $_SESSION['school_id'];


$class_dept = $_POST['class_department'];
$section_name = $_POST['section_name'];

$add_section_but  = $_POST['add_section'];

if($class_dept == "elementary"){

	$year_grade_level = $_POST['new_sec_grade'];



}
else{
	$year_grade_level = $_POST['new_sec_year'];

}


if(isset($class_dept) && isset($section_name) && isset($add_section_but) && isset($year_grade_level)){

	$insert_section = "INSERT INTO section(school_id,section_name,section_department,section_level) 
			  VALUES('$school_id','$section_name','$class_dept','$year_grade_level')";


			if(@!mysql_query($insert_section)){
				die('error insert'.mysql_error());
			}


			header('location:registrar_manage.php');
}



?>