$(document).ready(function (){
	var username ;
	var cur_password;
	var new_password;
	var conf_password;

	$('#change_usrname_button').click(function (){
		username = $('#new_chnge_username').val();		

				if(username != "" ){
			            $.ajax({
			                type: 'POST',
			                url: 'account_setting_deped_get.php',
			                dataType: 'json',
			                data:'username='+username,
			                success: function (data){

			                	
					                   if(data.error == false){

					                   	alert("Username successfuly updated");

					                   	$(location).attr('href','account_setting_deped.php');
					              
					                   }
					                   else{
					                   	alert("update error");

					                   	$(location).attr('href','account_setting_deped.php');
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
			                url: 'account_setting_deped_get.php',
			                dataType: 'json',
			                data:{'cur_password': cur_password, 'new_password': new_password, 'conf_password': conf_password},

			                success: function (data){

			                alert(data);

			                $(location).attr('href','account_setting_deped.php');
			                }
			                
			            }).error(function(){
			            	alert("error");

			            	$(location).attr('href','account_setting_deped.php');
			            });

				     }

				     else{
				       alert("Please complete all fields");
				     }
			});

});