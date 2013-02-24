<?php 

include_once('DBconnect.php');
if(!isset($_SESSION)) 
{ 
session_start(); 
}  


$user_fac =  $_SESSION['user_id_fac'];


$get = "SELECT * FROM school_faculty WHERE faculty_id = '".$user_fac."' ";

$result=mysql_query($get)or die(mysql_error());

while ($row = mysql_fetch_array($result))
{
	$user_name = $row['username'];
		$email = $row['email'];
	 $password = $row['password'];
}


// if(isset($_POST['username'])){

// 	$username = $_POST['username'];
	

        


//                 	$update = "UPDATE school_faculty SET username = '$username' WHERE fac_id = '$user_fac'"; 

//                 		mysql_query($update);

//                         if(mysql_query($update)){
                 
//                                 $return['error'] = false;
                 				
//                         }
//                         else{
//                         	die('error insertion'.mysql_error());
                        	
//                         }

//                         echo json_encode($return);
                
//                 }
                


// if(isset($_POST['emailadd'])){

// 	$emailadd = $_POST['emailadd'];


	


// 	$update = "UPDATE school_faculty SET email = '$emailadd' WHERE fac_id = '$user_fac'"; 

// 		mysql_query($update);

//         if(mysql_query($update)){
 
//                 $return['error'] = false;
 				
//         }
//         else{
//         	die('error insertion'.mysql_error());
        	
//         }


// echo json_encode($return);

// }


// if(isset($_POST['cur_password'], $_POST['new_password'], $_POST['conf_password'])){

//     $current_pass = $_POST['cur_password'];
//     $new_password = $_POST['new_password'];
//     $confirm_pass = $_POST['conf_password'];

//     $getPasswordQuery = "SELECT `password` FROM `school_faculty` WHERE fac_id = '".$user_fac."' ";

//     $passwordResult = mysql_query($getPasswordQuery) or die (mysql_error());

//     while ($row = mysql_fetch_array($passwordResult))
//         {

//             $teacher_password = $row['password'];

//         }


//     if($new_password != $confirm_pass || $teacher_password != $current_pass){

//         $data = "Password not matched!";
        
//     } else {

//         $update = "UPDATE school_faculty SET password = '$new_password' WHERE fac_id = '".$user_fac."' "; 

//         mysql_query($update);

//         $data = "Password successfully updated";

//     }

//     echo json_encode($data);

// }



?>