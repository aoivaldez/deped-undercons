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
  <link rel="stylesheet" href="css/style-forgot-pass.css">
  
 
 
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

                  <div id="user-login-wrap">  
                    <label class="label-log">Username:</label>
                     <input type="text" id="usr_name" class="input log-input" name="user_name"/>
                  </div>


                  <div id="question-wrap">  
                    <label class="label-log">Secret Question:</label>
                    <select id="secret-question-list" name="secret_question"> </select>
                    
                  </div>

                  <div id="answer-wrap">  
                    <label class="label-log">Answer:</label>
                    <input type="text" id="answer" class="input log-input" name="answer"/>
                  </div>



                  <div id="button-login-wrap">
                    <div id="left-log-wrap">
                      <input type="submit" value="Verify" class="button" id="verify-btn" name="verify_button">
                    </div>

                    
                    </div>
                  </div>
                 </form>         
              </fieldset>
          </div>

          </div>
          <?php
              $error = $_GET['error_verify'];

            ?>
          
          <input type="hidden" id="notice_url" value=<?php echo $error; ?> >

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
  
    

  /*****************letters only regex*********************/
    function get_questions()
    {

      var  html = "";

      $.ajax({
                        type:'POST',
                        url:'deped_functions.php',
                   dataType:'json',
                       data:{'func_num':'7'},
                    success:function (data){

                       $.each(data, function(i, item) {

                                 
                            html += "<option value="+data[i].secret_question_id+">"+data[i].question_name+"</option>";

                                   });

                       

                       $('#secret-question-list').append(html);
                        
                      }

                    });




    }

    get_questions();

    

    function show_notice(){

          alert($('#notice_url').val());


         if($('#notice_url').val() == "1" ){

          $('#notice-wrap').show();

        }

      }


      show_notice();
/**********************end letters only*****************/
  
  });
  
 
 </script>
</body>
</html>
