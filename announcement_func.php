<?php
require_once('DBconnect.php');
session_start();

$sch_id = $_SESSION['school_id'];


$switch_num = $_POST['swt_num'];

switch ($switch_num) {
	case '1':
		anncment_insert();
		break;
	
	case '2':
		anncment_get ();
		break;
}

function anncment_insert(){
	$anncment_title = $_POST['announcement_title'];
	$anncment_msg = $_POST['announcement_message'];
	global $sch_id;

	$anncmnt_insert = "INSERT INTO 	announcement(announcement_title,announcement_details,school_id) 
				  VALUES('$anncment_title','$anncment_msg','$sch_id')";

				  if(@!mysql_query($anncmnt_insert)){
					die('error insert'.mysql_error());
				}

				$return['error']= false; 

		echo json_encode($return);
	}

function anncment_get (){
	global $sch_id;
	$anncmnt_select = "SELECT *
				FROM announcement  WHERE school_id ='$sch_id' OR school_id = '0' ";
 

				 $result=mysql_query($anncmnt_select)or die(mysql_error());

				$data=array();
					while ($row = mysql_fetch_array($result))
					{
					$data[] = array(
						'ann_id'=>$row['announcement_id'],
					   'ann_title'=>$row['announcement_title'],
					   'schl_id'=>$row['school_id'],
					   
					);
				}
				 
	echo json_encode($data);


}




?>