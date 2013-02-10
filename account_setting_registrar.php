<!doctype html>

<?php
  session_start();

   include_once('account_setting_registrar_get.php');

  $user_id_admin =   $_SESSION['user_id_regis'];
 

  $log_session = $_SESSION['accnt_typ'];

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
                            <input type="text" name="chnge_username" id="chnge_username" class="input" value=<?php echo $user_name?> readonly="readonly" >
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
                            <input type="text" name="new_chnge_username" id="new_chnge_username" class="input">
                          </td>
                          <td>
                            &nbsp;
                          </td>
                        </tr>
                      </table>
                    </div>
                      <div class="change-button-wrap">
                        <input type="submit" name="change_usrname_button" id="change_usrname_button" value="Change" class="button"> 
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
              <div class="edit-wrap-link"><a href="#password-edit-wrap">Password</a></div></li>
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
                            <input type="password" id="current_pass" class="input">
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
                            <input type="password" id="new_password" class="input">
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
                            <input type="password" id="new_password_confirm" class="input">
                          </td>
                          <td>
                            &nbsp;
                          </td>
                        </tr>
                      </table>
                    </div>
                      <div class="change-button-wrap">  
                        <input type="submit" id="change_password_button" value="Change" class="button">
                      </div>         
               </div> 
              </div>
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
        $(".edit-wrap-link").click(function() {
          var accnt_set_tab = $(this).find("a").attr("href");
          $(accnt_set_tab).toggle();
        return false;  
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

