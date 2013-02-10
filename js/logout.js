$(document).ready(function (){
	$('#logout-link').click(function (){

		var logout = "true";
			$.ajax({

				type:'POST',
				 url:'logout.php',
			dataType:'json',
				data:'lgout='+logout,

				success : function(data){


					if(data.logout === true){

						$(this).$(location).attr('href','index.php');

					}
				}

				return false;
			});

		
	});

});