<!doctype html>

<?php

   
    include_once('DBconnect.php');
 
    session_start(); 



    $user_fac =  $_SESSION['user_id_fac'];
    $log_session = $_SESSION['accnt_typ_fac'];


    $get = "SELECT * FROM school_faculty WHERE faculty_id = '".$user_fac."' ";

    $result=mysql_query($get)or die(mysql_error());

    while ($row = mysql_fetch_array($result))
    {
      $user_name = $row['username'];
        $email = $row['email'];
       $password = $row['password'];
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

    require_once('header_teacher.php');

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
                              <input type="text" name="chnge_username" id="chnge-username" class="input" value=<?php echo $user_name;?> readonly="readonly">
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
                              <input type="text" id="new-chnge-username" class="input">
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

                <div id="change-email-content">
                  
                    <div id="change-username-table-wrap">
                      <table>
                        <tr>
                          <td>
                            <label>User Emaill Address:</label>
                          </td>
                          <td>
                            <input type="text" name="chnge_eadd" id="chnge-eadd" class="input" value=<?php echo $email;?> readonly="readonly">
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
                            <input type="text" name="new_chnge_eadd" id="new-chnge-eadd" class="input">
                          </td>
                          <td>
                            &nbsp;
                          </td>
                        </tr>
                      </table>
                    </div>
                      <div class="change-button-wrap">  
                        <input type="button" name="change_eadd_button" id="change-eadd-btn" value="Change" class="button">
                      </div> 
                
               </div> 
              </div>
            </li>
            <li>
              <div class="edit-wrap-link"><a href="#password-edit-wrap">Password</a></div>
              <div id="password-edit-wrap" class="change-wrap">
                <div id="change-pass-header" class="header-name-wrap">
                  <h3>Change Password</h3>
                </div>

                <div id="change-pass-content">
                  
                    <div id="change-pass-table-wrap">
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
                            <input type="text" id="sq_answer" class="input">
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
  <script type="text/javascript" src="js/account_settings_teacher.js"></script>
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

       user_name =  $('#new-chnge-username').val();

            $.ajax({
                            type:'POST',
                            url:'teacher_functions.php',
                       dataType:'json',
                           data:{'func_num':'1','username':user_name},
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
                                                         url:'teacher_functions.php',
                                                    dataType:'json',
                                                        data:{'func_num':'2','username':user_name},
                                                     success:function (data){

                                                           if(data.error == "0"){
                                                             
                                                               
                                                               alert("The Username is Already Changed");
                                                              $(location).attr("href","account_setting_teacher.php");

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

    function check_match_current_password()
    {

      current_password =  $('#current-pass').val();
        $.ajax({
                            type:'POST',
                            url:'teacher_functions.php',
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
                                                         url:'teacher_functions.php',
                                                    dataType:'json',
                                                        data:{'func_num':'4','password':new_password},
                                                     success:function (data){

                                                           if(data.error == "1"){
                                                            alert("Error in Changing Password");
                                                              
                                                           }
                                                           else{

                                                               
                                                                alert("The Password is Already Changed");
                                                              $(location).attr("href","account_setting_teacher.php");
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

