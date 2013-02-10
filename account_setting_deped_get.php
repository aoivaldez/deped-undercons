<?php

require('DBconnect.php');
if(!isset($_SESSION)) 
{ 
session_start(); 
}

$deped_id = $_SESSION['deped_account_id'];


$getUsernameQuery = "SELECT `deped_username` FROM `deped_accounts` WHERE `deped_id` = ".$deped_id."";

$usernameResult = mysql_query($getUsernameQuery) or die (mysql_error());

while ($row = mysql_fetch_array($usernameResult))
{
	$deped_username = $row['deped_username'];
}

if(isset($_POST['username'])){

	$username = $_POST['username'];

	$update = "UPDATE deped_accounts SET deped_username = '$username' WHERE `deped_id` = ".$deped_id.""; 

                		mysql_query($update);

                        if(mysql_query($update)){
                 
                                $return['error'] = false;
                 				
                        }
                        else{
                        	die('error insertion'.mysql_error());
                        	
                        }

    echo json_encode($return);
}

if(isset($_POST['cur_password'], $_POST['new_password'], $_POST['conf_password'])){

	$current_pass = $_POST['cur_password'];
	$new_password = $_POST['new_password'];
	$confirm_pass = $_POST['conf_password'];

	$getPasswordQuery = "SELECT `deped_password` FROM `deped_accounts` WHERE `deped_id` = ".$deped_id."";

	$passwordResult = mysql_query($getPasswordQuery) or die (mysql_error());

	while ($row = mysql_fetch_array($passwordResult))
		{

			$deped_password = $row['deped_password'];

		}


	if($new_password != $confirm_pass || $deped_password != $current_pass){

		$data = "Password not matched!";
		
	} else {

		$update = "UPDATE deped_accounts SET deped_password = '$new_password' WHERE `deped_id` = ".$deped_id.""; 

        mysql_query($update);

        $data = "Password successfully updated";

	}

	echo json_encode($data);

}

?>