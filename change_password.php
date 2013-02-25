<!doctype html>




<html class="no-js" lang="en">
<head>
  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title></title>
  <meta name="description" content="">

  
  <meta name="viewport" content="width=device-width">

 
  <link rel="stylesheet" href="css/style-reset.css">
  <link rel="stylesheet" href="css/style-global.css">
  <link rel="stylesheet" href="css/style-change-password.css">
  
 
 
</head>
<body>
  <div id="wrap-body">

    <div role="main" id="main">
      <div id="wrap">
          
           
            <div id="wrap-form">
              
            <div id="notice-wrap" style="display:none;">
                  <span id="notice">Error Verifying Secret Question</span>
            </div>


              <fieldset id="login-wrap" >
                <form action="forgot_pass_get.php" id="log-form" method="post">

                  <div id="user-new-pass-wrap">  
                    <label class="label-log">New Password:</label>
                     <input type="password" id="new-pass" class="input log-input" />
                  </div>


                  <div id="verify-pass-wrap">  
                    <label class="label-log">Verify Password:</label>
                     <input type="password" id="verify-pass" class="input log-input" />
                    
                  </div>

                  <div id="button-login-wrap">
                    <div id="left-log-wrap">
                      <input type="button" value="Change" class="button" id="change-pass-btn" >
                    </div>

                    
                    </div>
                  </div>
                 </form>         
              </fieldset>
          </div>

          </div>
          <?php
              $user_id = $_GET['id'];
              $account_type= $_GET['account_type'];

            ?>
          
          <input type="hidden" id="user-id" value=<?php echo $user_id; ?> >

           <input type="hidden" id="account-type" value=<?php echo $account_type; ?> >

      </div>

  </div>  

  
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
  <script src="js/login.js"></script>




  <script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>

  <script>
  $(document).ready(function () {

    var new_pass;

      $('#new-pass').on('blur', function (){

        new_pass =  $('#new-pass').val();

      
        if(new_pass.length < 5 ){

          alert("Your Password Must Be 5 Characters Long");

           $('#change-pass-btn').unbind("click").addClass("inactiveButton");


        }
        else{

           $('#change-pass-btn').bind("click").removeClass("inactiveButton");
        }


      });
  

      $('#change-pass-btn').click(function(){

           new_pass = $('#new-pass').val();

          var verify_pass = $('#verify-pass').val();

          var user_id = $('#user-id').val();

          var account_type = $('#account-type').val();

          if(new_pass == verify_pass){

               $.ajax({
                        type:'POST',
                        url:'password_function.php',
                   dataType:'json',
                       data:{'func_num':'1','account_type':account_type,'user_id':user_id,'password':verify_pass},
                    success:function (data){

                          if(data.error== "0"){

                            alert("Success in Changing your password");

                            $(location).attr("href","index.php");


                          }else{

                             alert("Error in Changing your password");
                          }
                        
                      }

                    });



          }else{



            alert("password doesnt match");
          }


      });
      

 
  
  });
  
 
 </script>
</body>
</html>
