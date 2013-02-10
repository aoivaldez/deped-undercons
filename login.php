<!doctype html>

<?php 

include_once('DBconnect.php'); 



?>

<html class="no-js" lang="en">
<head>
  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title></title>
  <meta name="description" content="">

  
  <meta name="viewport" content="width=device-width">

 


   <link rel="stylesheet" href="css/style.css">

 
 
</head>
<body>
  <?php

if(isset($_POST['username']) && isset($_POST['password'])){

$username = $_POST['username'];
$password = $_POST['password'];


  $query= "SELECT *
           FROM accounts
           WHERE user_name='$username' AND password ='$password' ";

  $result = mysql_query($query);
               if(@!$result){
                die('error header'.mysql_error());
              }

           $count =  mysql_num_rows($result);

           if($count == "1"){
             header('Location: index.php');
            }
            else{

              echo "error";
            }
}

else{

  ?>
  <header>

  </header>
  <div role="main" id="main">

      <form action="login.php" method="post">
        <div id="login-wrap">
            <div id="labl-login-wrap">  
              <label>User Name:</label> </br> 
              <label>Password:</label>
          </div>

          <div id="inpt-login-wrap">  
            <input type="text" id="usr_name" class="input" name="username"/>
            <input type="password" id="psswrd" class="input" name="password"/>
          </div>

          <div id="button-login-wrap">
            <input type="submit" value="Login" id="login_but" name="submt_button">
            <a href="#">Register</a>
        </div>
      </form>  
  </div>


  </div>
  <footer>

  </footer>
<?

}

?>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
  <script src="js/login.js"></script>
  <script src="js/script.js"></script>

  <script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
</body>
</html>