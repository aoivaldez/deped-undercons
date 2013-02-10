<?php
require_once('DBconnect.php');
session_start();






if(isset($_POST['regstr_school'])){

		/*School Registration*/
	$lastname = $_POST['admin_lst_name']; 
	$firstname = $_POST['admin_frst_name'];
	$midname=  $_POST['admin_mid_name'];
	$gender = $_POST['admin_gender'];
	$email= $_POST['school_eadd'];
	$district = $_POST['sch_dstrct'];
	$school_id = $_POST['sch_id'];
	$school_user = $_POST['sch_user_name'];
	$school_pass = $_POST['sch_user_pass'];
	$confirm_pass = $_POST['sch_user_pass_cnfrm'];
	$today = date("F j, Y");
	/*end*/
	if($school_pass == $confirm_pass){

		$insert = "INSERT INTO school_admin(account_type_id,firstname,middlename,lastname,gender,email,district,school_id,school_username,school_password) 
			  VALUES('2','$firstname','$midname','$lastname','$gender','$email','$district','$school_id','$school_user','$school_pass')";

		$updateschool = "UPDATE schools SET status = 'activated', date_registered = '$today' WHERE school_id = '$school_id'";
		mysql_query($updateschool);


			if(@!mysql_query($insert)){
				die('error insert'.mysql_error());
			}

	}
	else{
		echo "password does not match";
	}
	header( 'Location: index.php' );
}

if(isset($_POST['add_faculty'])){ 

			/*Faculty Registration*/


		$sch_id_reg = $_SESSION['school_id'];	
		$flastname = $_POST['faclty_lname'];
		$ffirstname = $_POST['faclty_fname'];
		$fmiddlename = $_POST['faclty_mname'];
		$fgender = $_POST['faclty_gender'];
		$feadd = $_POST['faclty_eadd'];
		$fdepartment = $_POST['faclty_department'];
		


		function getInitials($name){
		//split name using spaces
		$words=explode(" ",$name);
		$inits='';
		//loop through array extracting initial letters
		foreach($words as $word){
		$inits.=strtoupper(substr($word,0,1));
		}
			return $inits;	
		}

		$username = strtolower(getInitials($ffirstname).getInitials($fmiddlename).$flastname);
		$defpass = 12345;
		

		/*end fac reg*/
			$check = "SELECT * FROM school_faculty WHERE username = '$username'";
			$checkquery = mysql_query($check);
			$checkresult = mysql_num_rows($checkquery);

			if($checkresult == 1){

				?>
					<script type="text/javascript">
							function popupwindow(pageURL, title,w,h) {
							  var left = (screen.width/2)-(w/2);
							  var top = (screen.height/2)-(h/2);
							  return window.open(pageURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
							
							} 

							function redirect(){
								window.location = "registrar_manage.php";
							}

		      		 </script>

		       		<body onload="javascript: popupwindow('faculty_registrationError.php','Information',400,100); javascript: redirect();" >
					
					<?php
					


			 } else if($checkresult == 0 ) {

						$_SESSION['fa_username'] = $username;
						$_SESSION['fa_firstname'] = $ffirstname;

						$insert = "INSERT INTO school_faculty(account_type_id,school_id,f_lastname,f_firstname,f_middlename,gender,username,password,email) 
			  					   VALUES('3','$sch_id_reg','$flastname','$ffirstname','$fmiddlename','$fgender','$username','$defpass','$feadd')";

						if(@!mysql_query($insert)){
							die('error insert'.mysql_error());
						}

					if($fgender == "male"){
						?>
						<script type="text/javascript">
								function popupwindow(pageURL, title,w,h) {
								  var left = (screen.width/2)-(w/2);
								  var top = (screen.height/2)-(h/2);
								  return window.open(pageURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
								} 


							function redirect(){
								window.location = "registrar_manage.php";
							}
			      		</script>

       							<body onload="javascript: popupwindow('faculty_registrationMale.php','Information',400,100); javascript: redirect();">
						
						<?php
							
						
					} else {

						?>
							<script type="text/javascript">
								function popupwindow(pageURL, title,w,h) {
								  var left = (screen.width/2)-(w/2);
								  var top = (screen.height/2)-(h/2);
								  return window.open(pageURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
								} 


								function redirect(){
									window.location = "registrar_manage.php";
								}
			      		</script>

       							<body onload="javascript: popupwindow('faculty_registrationFemale.php','Information',400,100); javascript: redirect();">
						
					<?php

		}
		}

			
		}
	

if(isset($_POST['add_admin'])){
			/*Faculty Registration*/

		$adminlastname = $_POST['admin_lname'];
		$adminfirstname = $_POST['admin_fname'];
		$adminmiddlename = $_POST['admin_mname'];
		$admingender = $_POST['admin_gender'];
		$admineadd = $_POST['admin_eadd'];
		$adminlevel = $_POST['admin_level'];
		$adminposition = $_POST['admin_position'];
		


		/*end fac reg*/
		function getInitials($name){
		//split name using spaces
		$words=explode(" ",$name);
		$inits='';
		//loop through array extracting initial letters
		foreach($words as $word){
		$inits.=strtoupper(substr($word,0,1));
		}
			return $inits;	
		}

		$username = strtolower(getInitials($adminfirstname).getInitials($adminmiddlename).$adminlastname);
		$defpass = 12345;
	
		$check = "SELECT * FROM deped_accounts WHERE deped_username = '$username'";
		$checkquery = mysql_query($check);
		$checkresult = mysql_num_rows($checkquery);

		if($checkresult == 1){

				?>
					<script type="text/javascript">
							function popupwindow(pageURL, title,w,h) {
							  var left = (screen.width/2)-(w/2);
							  var top = (screen.height/2)-(h/2);
							  return window.open(pageURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
							
							} 

							function redirect(){
								window.location = "manage_deped.php";
							}

		      		 </script>

		       		<body onload="javascript: popupwindow('admin_registrationError.php','Information',400,100); javascript: redirect();" >
					
					<?php

					 } else if($checkresult == 0 ) {

						$_SESSION['ad_username'] = $username;
						$_SESSION['ad_firstname'] = $adminfirstname;

						$insert = "INSERT INTO deped_accounts(account_type_id,lastname,firstname,middlename,gender,email,deped_username,deped_password,level,position) 
								  VALUES('1','$adminlastname','$adminfirstname','$adminmiddlename','$admingender','$admineadd','$username','$defpass','$adminlevel','$adminposition')";


								if(@!mysql_query($insert)){
									die('error insert'.mysql_error());
								
								}

					if($admingender == "male"){
						?>
						<script type="text/javascript">
								function popupwindow(pageURL, title,w,h) {
								  var left = (screen.width/2)-(w/2);
								  var top = (screen.height/2)-(h/2);
								  return window.open(pageURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
								} 


							function redirect(){
								window.location = "manage_deped.php";
							}
			      		</script>

       							<body onload="javascript: popupwindow('admin_registrationMale.php','Information',400,100); javascript: redirect();">
						
						<?php
							
						
					} else {

						?>
							<script type="text/javascript">
								function popupwindow(pageURL, title,w,h) {
								  var left = (screen.width/2)-(w/2);
								  var top = (screen.height/2)-(h/2);
								  return window.open(pageURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
								} 


								function redirect(){
									window.location = "manage_deped.php";
								}
			      		</script>

       							<body onload="javascript: popupwindow('admin_registrationFemale.php','Information',400,100); javascript: redirect();">
						
					<?php

		}
		}

			
		}


?>