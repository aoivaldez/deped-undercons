<!doctype html>

<?php

  include_once('DBconnect.php');
  session_start();

  $user_id_admin =   $_SESSION['user_id_regis'];
 

  $log_session = $_SESSION['accnt_typ'];


  $get = "SELECT * FROM school_admin WHERE school_admin_id = '".$user_id_admin."' ";

    $result=mysql_query($get)or die(mysql_error());

    while ($row = mysql_fetch_array($result))
    {
      $user_name = $row['school_username'];
        $email = $row['email'];
       $password = $row['school_password'];
    }


  if(!isset($log_session) || empty($log_session)){

    die("dsafaff");
    }


    else{
         
?>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title></title>
  <meta name="description" content="">

  
  <meta name="viewport" content="width=device-width">

 
  <link rel="stylesheet" href="css/style-reset.css">
  <link rel="stylesheet" href="css/style-global.css">
  <link rel="stylesheet" href="css/style-accountsettings.css">
 
  
  
  
 
 
</head>

<body>
  <div id="wrap-body">
  


    <?php

      require_once('header_registrar.php');

    ?>
    
    <div role="main" id="main">



      <div id="acct-set-container" >
        <div id="accountsettings-deped-header" class="header-name-wrap">
                  <h3>Account Settings</h3>
        </div>
        <div id="account-settings-container">
          <ul>
            <li>
               <div class="edit-wrap-link"> <a href="#username-edit-wrap">Username</a> </div>
               <div id="username-edit-wrap" class="change-wrap">
                <div id="change-username-header" class="header-name-wrap">
                  <h3>Change Username</h3>
                </div>

                <div id="change-username-content">
                  
                    <div id="change-username-table-wrap">
                      <table>
                        <tr>
                          <td>
                            <label>Username:</label>
                          </td>
                          <td>
                            <input type="text" name="chnge_username" id="chnge-username" class="input" value=<?php echo $user_name?> readonly="readonly" >
                          </td>
                          <td>
                            &nbsp;
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <label>New Username:</label>
                          </td>
                          <td>
                            <input type="text" name="new_chnge_username" id="new-chnge-username" class="input">
                          </td>
                          <td>
                            &nbsp;
                          </td>
                        </tr>
                      </table>
                    </div>
                      <div class="change-button-wrap">
                        <input type="button" name="change_usrname_button" id="change-usrname-button" value="Change" class="button"> 
                      </div>  
               
               </div> 
              </div> 
            </li>
            <li>
              <div class="edit-wrap-link"><a href="#email-edit-wrap">Email</a></div>
              <div id="email-edit-wrap" class="change-wrap">
                <div id="change-emailaddress-header" class="header-name-wrap">
                  <h3>Change Email Address</h3>
                </div>

                <div id="change-username-content">
                  
                    <div id="change-username-table-wrap">
                      <table>
                        <tr>
                          <td>
                            <label>User Emaill Address:</label>
                          </td>
                          <td>
                            <input type="text" name="chnge_eadd" id="chnge_eadd" class="input" value=<?php echo $email ?> readonly="readonly">
                          </td>
                          <td>
                            &nbsp;
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <label>New Email Address:</label>
                          </td>
                          <td>
                            <input type="text" name="new_chnge_eadd" id="new_chnge_eadd" class="input">
                          </td>
                          <td>
                            &nbsp;
                          </td>
                        </tr>
                      </table>
                    </div>
                      <div class="change-button-wrap">  
                        <input type="submit" name="change_eadd_button" id="change_eadd_button" value="Change" class="button">
                      </div> 
               
               </div> 
              </div>
            </li>
            <li>
              <div class="edit-wrap-link"><a href="#password-edit-wrap">Password</a></div>
              <div id="password-edit-wrap" class="change-wrap">
                <div id="change-emailaddress-header" class="header-name-wrap">
                  <h3>Change Password</h3>
                </div>

                <div id="change-username-content">
                    <div id="change-username-table-wrap">
                      <table>
                        <tr>
                          <td>
                            <label>Current Password:</label>
                          </td>
                          <td>
                            <input type="password" id="current-pass" class="input">
                          </td>
                          <td>
                            &nbsp;
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <label>New Password</label>
                          </td>
                          <td>
                            <input type="password" id="new-password" class="input">
                          </td>
                          <td>
                            &nbsp;
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <label>Confirm Password</label>
                          </td>
                          <td>
                            <input type="password" id="new-password-confirm" class="input">
                          </td>
                          <td>
                            &nbsp;
                          </td>
                        </tr>
                      </table>
                    </div>
                      <div class="change-button-wrap">  
                        <input type="button" id="change-password-btn" value="Change" class="button">
                      </div>         
               </div> 
              </div>
            </li>
            <li>
              <div class="edit-wrap-link"><a href="#sq-edit-wrap">Security Question</a></div>
              <div id="sq-edit-wrap" class="change-wrap">
                <div id="change-sq-header" class="header-name-wrap">
                  <h3>Security Question</h3>
                </div>

                <div id="change-sq-content">
                  
                    <div id="change-sq-table-wrap">
                      <table>
                        <tr>
                          <td>
                            <label>Current Secret Question:</label>
                          </td>
                          <td>
                             <select id="secret-question-current"> </select>
                          </td>
                          <td>
                            &nbsp;
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <label>Secret Questions:</label>
                          </td>
                          <td>
                            <select id="secret-question-list"> </select>
                          </td>
                          <td>
                            &nbsp;
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <label>Answer</label>
                          </td>
                          <td>
                            <input type="text" id="sq-answer" class="input">
                          </td>
                          <td>
                            &nbsp;
                          </td>
                        </tr>
                      </table>
                    </div>
                      <div class="change-button-wrap">  
                        <input type="button" id="change-secret-question" value="Change" class="button">
                      </div> 
                
               </div> 
              </div>
            </li>
          </ul>
        </div>  

      </div>

    <footer>
    </footer>  
  </div>  

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>

  <script src="js/jscript-global.js"></script>
  <script type="text/javascript" src="js/account_settings_admin.js"></script>      
  <script type="text/javascript" src="js/jquery-ui.js"></script>        
  <script type="text/javascript" src="js/slimScroll.min.js"></script>

  <script>
   $(document).ready(function(){
       var user_name;
       var current_password ;
       var typingTimer;               
      var doneTypingInterval = 3000;
    
      

        $(".edit-wrap-link").click(function() {
          var accnt_set_tab = $(this).find("a").attr("href");
          $(accnt_set_tab).toggle();
        return false;  
      }); 

        function get_current_questions()
          {

                        $.ajax({
                              type:'POST',
                              url:'registrar_functions.php',
                         dataType:'json',
                             data:{'func_num':'6'},
                          success:function (data){

                                   
                                var  sq_html = "<option >"+data.secret_question+"</option>";

                                        
                             $('#secret-question-current').append(sq_html);
                              
                            }

                          });
          }

    get_current_questions();


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




     $('#new-chnge-username').on('keyup', function (){

          user_name =  $('#new-chnge-username').val();

           clearTimeout(typingTimer);

           $('#change-usrname-button').unbind('click');              
              $('#change-usrname-button').addClass("inactiveButton");


           

          if(user_name)
          {
               typingTimer = setTimeout(check_validity_username, doneTypingInterval);
         }
         else{

             

               $('#change-usrname-button').unbind('click');              
              $('#change-usrname-button').addClass("inactiveButton");

         }



      });

    function check_validity_username(){

       var username =  $('#new-chnge-username').val();

        var RegExpression = /^[a-zA-Z0-9]*$/; 



        if(RegExpression.test($(username).val()) && username.length > 6 ){

            $.ajax({
                            type:'POST',
                            url:'registrar_functions.php',
                       dataType:'json',
                           data:{'func_num':'1','username':username},
                        success:function (data){

                              if(data.error == "1"){

                                  alert("The Username is Already in use");
                                  $('#new-chnge-username').val("");
                                   $('#change-usrname-button').unbind('click');
                                  
                                  $('#change-usrname-button').addClass("inactiveButton");


                              }
                              else{

                                $('#change-usrname-button').bind('click');
                                $('#change-usrname-button').removeClass("inactiveButton");


                                 $('#change-usrname-button').click(function (){

                                  

                                        user_name =  $('#new-chnge-username').val();

                                        $.ajax({
                                                        type:'POST',
                                                         url:'registrar_functions.php',
                                                    dataType:'json',
                                                        data:{'func_num':'2','username':user_name},
                                                     success:function (data){

                                                           if(data.error == "0"){
                                                             
                                                               
                                                               alert("The Username is Already Changed");
                                                              $(location).attr("href","account_setting_registrar.php");

                                                           }
                                                           else{

                                                               

                                                               alert("Error in changing username");
                                                           }
                                                        
                                                       }

                                                     });
                                  });     


                              }
                            
                          }

                        });
            }
            else{


               alert("numbers and letters are only allowed. The Username Must Be more than 6 characters ");
            }
    }

    function check_match_current_password()
    {

      current_password =  $('#current-pass').val();
        $.ajax({
                            type:'POST',
                            url:'registrar_functions.php',
                       dataType:'json',
                           data:{'func_num':'3','password':current_password},
                        success:function (data){

                           if(data.error == "1"){

                                

                               $('#change-password-btn').bind('click');
                               $('#change-password-btn').removeClass("inactiveButton");

                               $('#change-password-btn').click(function (){

                                  if($('#new-password').val() == $('#new-password-confirm').val() && $('#new-password-confirm').val() != "")

                                  {

                                   var new_password = $('#new-password-confirm').val();

                                     $.ajax({
                                                        type:'POST',
                                                         url:'registrar_functions.php',
                                                    dataType:'json',
                                                        data:{'func_num':'4','password':new_password},
                                                     success:function (data){

                                                           if(data.error == "1"){
                                                            alert("Error in Changing Password");
                                                              
                                                           }
                                                           else{

                                                               
                                                                alert("The Password is Already Changed");
                                                              $(location).attr("href","account_setting_registrar.php");
                                                           }
                                                        
                                                       }

                                                     });

                                  }
                                  else
                                  {
                                    alert("password did not match");

                                  }


                               });
                              }
                              else{
                                

                                 alert("Current password is wrong");

                                  $('#current-pass').val("");

                                   $('#change-password-btn').unbind('click');              
                                   $('#change-password-btn').addClass("inactiveButton");

                              }
                        }

              });          
    }


      $('#current-pass').on('keyup', function (){

           current_password =  $('#current-pass').val();

           clearTimeout(typingTimer);

           $('#change-password-btn').unbind('click');              
              $('#change-password-btn').addClass("inactiveButton");


          if(current_password)
          {
               typingTimer = setTimeout(check_match_current_password, doneTypingInterval);
         }
         else{

               $('#change-password-btn').unbind('click');              
              $('#change-password-btn').addClass("inactiveButton");

         }



      });

         $('#change-secret-question').click(function (){

          var sq_type =  $('#secret-question-list').val();
          var sq_answer = $('#sq-answer').val();

          if(sq_answer != ""){

                 $.ajax({
                                type:'POST',
                                url:'registrar_functions.php',
                           dataType:'json',
                               data:{'func_num':'5','secretquestion':sq_type,'secretanswer':sq_answer,},
                            success:function (data){

                                  if(data.error == "0"){

                                      alert("Secret Question Changed");
                                      $(location).attr("href","account_setting_registrar.php");
                                  }
                                  else{
                                     alert("error in changing secret question");

                                  }

                            }      

             });
           }
           
           else{


             alert("Please put your answer");
           }      
        });


        
    });
    

  </script>

  <script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
</body>

<?php
}

?>

</html>

