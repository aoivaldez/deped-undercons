<!doctype html>


<?php

  // $indicator_session = session_start();



  //   if($indicator_session)
  //   {
  //       if($_SESSION['accnt_typ_fac']){
  //         header('location:home.php');

  //       }
  //       else if( $_SESSION['accnt_typ']) {

  //          header('location:home_registrar.php');

  //       }
  //       else{


  //          header('location:home_deped.php');
  //       }



  //   }

  //   else{





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
  <link rel="stylesheet" href="css/style-login.css">
  
 
 
</head>
<body>
  <div id="wrap-body">

    <div role="main" id="main">
      <div id="wrap">
          <div id="first-content">
            <div id="wrap-left">

               <img src="./images/logo.png" title="Loader" alt="Loader" />


            </div> 
            <div id="wrap-right">
               <div id="waiting" style="display:none;">
                    Please wait<br /> <br />
                    <img src="./images/loader.gif" title="Loader" alt="Loader" />
                </div>
                <div id="notice-wrap" style="display:none;">
                  <span id="notice"></span>
                </div>  
            
              <fieldset id="login-wrap" >
                <form action="" id="log-form" method="post">

                  <div id="user-login-wrap">  
                    <label class="label-log">Username:</label>
                     <input type="text" id="usr_name" class="input log-input" name="username"/>
                  </div>

                  <div id="pass-login-wrap">  
                    <label class="label-log">Password:</label>
                    <input type="password" id="psswrd" class="input log-input" name="password"/>
                  </div>

                  <div id="button-login-wrap">
                    <div id="left-log-wrap">
                      <input type="submit" value="Login" class="button" id="login_but" name="login_button">
                    </div>
                    <div id="right-log-wrap">
                      <span class="link-button">  
                        <a href="#" rel="#registration-wrap" id="reg-link"  >Register</a>
                      </span>
                    </div>
                  </div>
                 </form>         
              </fieldset>
          </div>

          </div>
          <div id="registration-wrap">
             <div id="register-header" class="header-name-wrap">
                  <h3>School Registration</h3>
                </div>

            <div class="wrap-reg-info">
               <form action="register_get.php" method="post">
                 <div id="left-reg-content">
                    <div id="admin-info-header" class="header-name-wrap">
                      <h3>School Admin Info</h3>
                    </div> 
                   <table >
                      <tr>
                        <td><label>Last Name:</label></td>
                        <td><input type="text" name="admin_lst_name" class="input letters-only"></td>
                      </tr>
                      <tr>
                        <td><label>First Name:</label></td>
                        <td><input type="text" name="admin_frst_name" class="input letters-only"></td>
                      </tr>

                      <tr>
                        <td><label>Middle Name:</label></td>
                        <td><input type="text" name="admin_mid_name" class="input letters-only"></td>
                      </tr>

                      <tr>
                        <td><label>Gender:</label></td>
                        <td><input type="radio" name="admin_gender" id="female" value="female"> <label for="female">Female:</label>
                            <input type="radio" name="admin_gender" id="male" value="male"> <label for="male">Male:</label>
                        </td>
                      </tr>
                    </table>
                  </div>
                  <div id="right-reg-content">
                    <div id="school-info-header" class="header-name-wrap">
                      <h3>School Info</h3>
                    </div>  
                    <table>
                      <tr>
                        <td><label>Email Address:</label></td>
                        <td><input type="text" name="school_eadd" class="input"></td>
                      </tr>

                      <tr>
                        <td><label>District:</label></td>
                        <td>
                          <select name="sch_dstrct">
                            <option value="frst_dstrct">1st District</option>
                            <option value="scnd_dstrct">2nd District</option>
                            <option value="thrd_dstrct">3rd District</option>
                            <option value="frth_dstrct">4th District</option>
                            <option value="fth_dstrct">5th District</option>
                            <option value="sxth_dstrct">6th District</option>
                          </select>
                        </td>
                        
                      </tr>

                      <tr>
                        <td><label>School ID:</label></td>
                        <td><input type="text" name="sch_id" class="input"></td>
                      </tr>

                      <tr>
                        <td><label>School User name:</label></td>
                        <td><input type="text" name="sch_user_name" class="input"></td>
                      </tr>
                      <tr>
                        <td><label>School Password:</label></td>
                        <td><input type="password" name="sch_user_pass" class="input" ></td>
                      </tr>
                      <tr>
                        <td><label>Confirm Password:</label></td>
                        <td><input type="password" name="sch_user_pass_cnfrm" class="input"></td>
                      </tr>
                    </table>
                    
                </div>
                <div id="reg-button-wrap">
                  <input type="submit" name="regstr_school" value="Submit" class="button">
                </div>  
              </form>
            </div>
          </div>

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
     $('.letters-only').on('keyup',function() {
         
         
    var RegExpression = /^[a-zA-Z\s]*$/; 

    if (RegExpression.test($(this).val())) {

    } 
    else {
        $(this).val("");
    }
});

/**********************end letters only*****************/
  
  });
  
 
 </script>
</body>
</html>
<?php

//}
?>
