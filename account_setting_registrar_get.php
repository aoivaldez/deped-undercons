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


if(isset($_POST['username'])){

	$username = $_POST['username'];
	

        


                	$update = "UPDATE school_admin SET school_username = '$username' WHERE school_admin_id = '$user_id_admin'"; 

                		mysql_query($update);

                        if(mysql_query($update)){
                 
                                $return['error'] = false;
                 				
                        }
                        else{
                        	die('error insertion'.mysql_error());
                        	
                        }

    echo json_encode($return);
                
}
                


if(isset($_POST['emailadd'])){

	$emailadd = $_POST['emailadd'];


	


	$update = "UPDATE school_admin SET email = '$emailadd' WHERE school_admin_id = '$user_id_admin'"; 

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

    $getPasswordQuery = "SELECT `school_password` FROM `school_admin` WHERE school_admin_id = '".$user_id_admin."'";

    $passwordResult = mysql_query($getPasswordQuery) or die (mysql_error());

    while ($row = mysql_fetch_array($passwordResult))
        {

            $school_password = $row['school_password'];

        }


    if($new_password != $confirm_pass || $school_password != $current_pass){

        $data = "Password not matched!";
        
    } else {

        $update = "UPDATE school_admin SET school_password = '$new_password' WHERE school_admin_id = '".$user_id_admin."'"; 

        mysql_query($update);

        $data = "Password successfully updated";

    }

    echo json_encode($data);

}



?>