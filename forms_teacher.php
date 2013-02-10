<!doctype html>

<?php
  session_start();

 

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

 

  <header>
    <div id="page-nav-bar">
      <img src="./images/headerlogo.png" id="header-logo">
      <div id="nav-bar">
          <div id="nav-bar-right">
            <ul id="first-lvl-nav">
              <li><span><a href="#">Super Admin</a></span></li>
              <li><span><a href="home_deped.php">Home</a></span></li>
              <li><span><a href="#" id="user-nav-submenu"><div  class="utility">Arrow-down</div></a></span>
                  <ul id="sec-lvl-menu">
                    <li><a href="manage_deped.php" class="nav-submenu" >Manage</a></li>
                    <li><a href="#" class="nav-submenu" >Archives</a></li>
                    <li><a href="#" class="nav-submenu" >Account Settings</a></li>
                    <li>
                        <form action="logout.php" method="post">
                          <label class="nav-submenu" id="logout-label">
                            <input type="submit" name="logout"  id="logout-button" value="Logout">
                          </label>
                        </form>
                      
                    </li>
                  </ul>
              </li>
            </ul>
          </div>
      </div>
    </div>  
  </header>
    <div role="main" id="main">
      <div id="wrap-form-menu" class="tab-menu-wrap">  
        <ul class="tabs">
            <li><a href="#tab1">General Average</a></li>
            <li><a href="#tab2">Curriculum</a></li>
                    
        </ul>           
      </div>

      


      <div id="tab-container">
          <div id="tab1" class="tab-content">
            
          </div>

          <div id="tab2" class="tab-content">
              
          </div>

          

      </div>

        

      </div>

    <footer>
    </footer>  
  </div>  

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>

  <script src="js/jscript-global.js"></script>
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

