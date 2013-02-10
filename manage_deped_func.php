<?php
require_once('DBconnect.php');

if(isset($_POST['school_name'], $_POST['school_address'])){

	$school_name = $_POST['school_name'];
	$school_address = $_POST['school_address'];

	$insert_school = "INSERT INTO schools(school_name,school_address) 
			  VALUES('$school_name','$school_address')";


			if(@!mysql_query($insert_school)){
				die('error insert'.mysql_error());
			}

	$data = "School successfully added";
	echo json_encode($data);
}





?>