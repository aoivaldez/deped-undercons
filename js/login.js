$(document).ready(function(){
	$('#login_but').click(function() {
			
		$('#waiting').show();
		$('#login-wrap').hide();
		var user = $('#usr_name').val();
		var pass = $('#psswrd').val();
		
		if (user == "" &&  pass == "") {
			$('#notice-wrap').show().text("Please put your User Name and Password").fadeOut(5000);
			$('#waiting').hide();
			$('#login-wrap').show();

		}
			else{

			$.ajax({
				type : 'POST',
				url : 'login-get.php',
				dataType : 'json',
				data: 'username='+user+'&password='+pass,
				success : function(data){
					
					if(data.error === false){
							if(data.registrar === true ){
								
								$(location).attr('href','home_registrar.php');

							}

							else if(data.deped === true){
								$(location).attr('href','home_deped.php');
							}

							else if(data.teacher === true){
								$(location).attr('href','home.php');
							}

							
						}	
					else
					{
						$('#notice-wrap').show().text("Username or Password incorrect").fadeOut(5000);
						$('#waiting').hide();
						$('#login-wrap').show();
						$('#usr_name').val("");
						$('#psswrd').val("");
					}
					
				}			
		});
	  }		
		return false;
	});


	$('#reg-link').click(function(){
		var reg = $(this).attr('rel');

		$(reg).toggle();
	 return false;	
	});
});