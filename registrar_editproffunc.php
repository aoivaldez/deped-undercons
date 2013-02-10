<?php

require('DBconnect.php');

 session_start();

 $log_session = $_SESSION['accnt_typ'];
 $sch_id_reg = $_SESSION['school_id'];

if(isset( $_POST['principal'], $_POST['contact'], $_POST['enrollees'])){


 $principal = $_POST['principal'];
 $contact = $_POST['contact'];
 $enrollees = $_POST['enrollees'];

	$query = "UPDATE `schools` SET `principal` = '$principal', `contact` = '$contact', enrollees = '$enrollees' WHERE `school_id` = '$sch_id_reg'";
	$result = mysql_query($query) or die(mysql_error());

	$response = "Update successful!";

	echo json_encode($response);
}
?>