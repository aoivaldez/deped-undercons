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
  <link rel="stylesheet" href="css/style-login.css">
  
 
 
</head>
<body>
  <div id="wrap-body">

    <div role="main" id="main">
      <div id="wrap">
           <fieldset id="forgot-pass-wrap" >
                <form action="" id="log-form" method="post">

                  <div id="user-login-wrap">  
                    <label class="label-log">Username:</label>
                     <input type="text" id="usr_name" class="input log-input" name="username"/>
                  </div>

                  <div id="pass-login-wrap">  
                    <label class="label-log">Answer:</label>
                    <input type="text" id="answer" class="input log-input" name="secret_answer"/>
                  </div>

                    <div id="button-login-wrap">
                      <div id="left-log-wrap">
                        <input type="submit" value="Change" class="button" id="login_but" name="login_button">
                      </div>
                    </div>
                 </form>         
           </fieldset>

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
