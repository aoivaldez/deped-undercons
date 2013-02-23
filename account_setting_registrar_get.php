<?php 

include_once('DBconnect.php');
if(!isset($_SESSION)) 
{ 
session_start(); 
}  


$user_id_admin =   $_SESSION['user_id_regis'];

$get = "SELECT * FROM school_admin WHERE school_admin_id = '".$user_id_admin."' ";

$result=mysql_query($get)or die(mysql_error());

while ($row = mysql_fetch_array($result))
{
	$user_name = $row['school_username'];
		$email = $row['email'];
	 $password = $row['school_password'];
}


?>