<?php

	include_once('DBconnect.php');

	session_start();
	 $school_id = $_SESSION['school_id'];


	$name = $_FILES['file_path'] ['name'];
	$size = $_FILES['file_path'] ['size'];
	$type = $_FILES['file_path'] ['type'];

	$extension = substr($name, strpos($name, '.')+1);

	$max_size =3145728;

	$temp_file = $_FILES['file_path'] ['tmp_name'];

	$change_name_file = $school_id.".".$extension ;

	if(isset($name)){

		if(!empty($name)){

			if(($extension == 'jpg' || $extension == 'jpeg') && ($type == 'image/jpeg' || $type == 'image/jpg') && $size <= $max_size  ){

			

			 if($school_id == 0){

			 	$location = 'uploads_images/super_admin/';

					

					 	     

									 move_uploaded_file($temp_file,$location.$change_name_file);

					 	 $insert_path = "INSERT INTO image_upload (school_id,path_name) 
							 							VALUES('$school_id','$change_name_file')";
									
									$result2 = mysql_query($insert_path);
												  if(@!$result2){
												       die('error header'.mysql_error());
												     }






					 	echo "Success in uploading";
					 	header('location:home_deped.php');

					
				}
				else{

					$location = 'uploads_images/schools/';

						move_uploaded_file($temp_file,$location.$change_name_file);

					 $select_exist_img = "SELECT path_name FROM image_upload WHERE school_id = '$school_id'";

					 				$query_img_path = mysql_query($select_exist_img);

											  if(@!$query_img_path){
											       die('error header'.mysql_error());
											     }

									$count_exist =  mysql_num_rows($query_img_path);

							if($count_exist > 0){

								$update_exst_path = "UPDATE image_upload SET path_name='$change_name_file' WHERE school_id='$school_id' ";


									$query_update = mysql_query($update_exst_path);
													  if(@!$query_update){
													       die('error header'.mysql_error());
													     }


							}else{

								$insert_path = "INSERT INTO image_upload (school_id,path_name) 
									 				VALUES('$school_id','$change_name_file')";

									 				$result = mysql_query($insert_path);
													  if(@!$result){
													       die('error header'.mysql_error());
													     }

					}						     
									 

					 	 




					 	echo "Success in uploading";


					 	header('location:home_registrar.php');

				}



			}
			else{

				echo "File type is too big or Incorrect file type";
			}

			
		}
		else{

				echo "Please Choose A JPEG File";
			}


			

	}




	


		
	

?>