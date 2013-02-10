$(document).ready(function (){
	var username ;
	var eadd;

	$('#change_usrname_button').click(function (){
		username = $('#new_chnge_username').val();		

				if(username != "" ){
			            $.ajax({
			                type: 'POST',
			                url: 'account_setting_registrar_get.php',
			                dataType: 'json',
			                data:'username='+username,
			                success: function (data){

			                	
					                   if(data.error == false){

					                   	alert("Username successfuly updated");
					                   	
					                   	$(location).attr('href','account_setting_registrar.php');
					                   }
					                   else{
					                   	alert("update error");
					                 }
			               }  
			            });

			 		}

			 		else{
				       alert("Please complete all fields");
				     }
	});



				$('#change_eadd_button').click(function (){

					eadd = $('#new_chnge_eadd').val();
					
					
					if(eadd != "" ){
				            $.ajax({
				                type: 'POST',
				                url: 'account_setting_registrar_get.php',
				                dataType: 'json',
				                data:'emailadd='+eadd,
				                success: function (data){

				                   if(data.error == false){

				                   	alert("Email address successfuly updated");
				                   	$(location).attr('href','account_setting_registrar.php');
				                   }

				                   else{
				                   	alert("update error");
				                   }

				                 }
				            });
				     }

				     else{
				       alert("Please complete all fields");
				     }
			});

					$('#change_password_button').click(function (){

					cur_password = $('#current_pass').val();
					new_password = $('#new_password').val();
					conf_password = $('#new_password_confirm').val();
					
					
					if(cur_password != "" && new_password != "" && conf_password != "" ){
						
						 $.ajax({
			                type: 'POST',
			                url: 'account_setting_registrar_get.php',
			                dataType: 'json',
			                data:{'cur_password': cur_password, 'new_password': new_password, 'conf_password': conf_password},

			                success: function (data){

			                alert(data);

			                $(location).attr('href','account_setting_registrar.php');
			                }
			                
			            }).error(function(){
			            	alert("error");

			            	$(location).attr('href','account_setting_registrar.php');
			            });

				     }

				     else{
				       alert("Please complete all fields");
				     }

			});

});