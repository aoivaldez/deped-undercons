<!doctype html>

<?php
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
  <link rel="stylesheet" href="css/style-home.css">
  
  
 
 
</head>

<body>
  <div id="wrap-body">

 

  <header>
    <div id="page-nav-bar">
      <img src="./images/headerlogo.png" id="header-logo">
      <div id="nav-bar">
          <div id="nav-bar-right">
            <ul id="first-lvl-nav">
              <li><span><a href="#">Registrar</a></span></li>
              <li><span><a href="home_registrar.php">Home</a></span></li>
              <li><span><a href="#" id="user-nav-submenu"><div  class="utility">Arrow-down</div></a></span>
                  <ul id="sec-lvl-menu">
                    <li><a href="registrar_manage.php" class="nav-submenu" >Manage</a></li>
                    <li><a href="registrar_forms" class="nav-submenu" >Forms</a></li>
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
<br>
<br>

<div id="approval-wrap">
              <div id="approval-header" class="header-name-wrap">
                <h3>Grade Four to Grade Six</h3>
              </div>
              <div id="approval"> 
                <div id="approval-content"  class="to_scroll"  >
                 
                 <table id="table-approval-content" class="table-content-all">
                    <tr>
                      <td>
                        <label>Subject Name</label>
                      </td>
                      <td>
                        <label>Units</label>
                      </td>
                    </tr>
                    <tr>
                      <td >
                        <label>Filipino</label>
                      </td>
                      <td >
                        <label>1.2</label>
                      </td>
                    </tr>
                    <tr>
                      <td >
                        <label>English</label>
                      </td>
                      <td >
                        <label>1.5</label>
                      </td>
                    </tr>
                    <tr>
                      <td >
                        <label>Math</label>
                      </td>
                      <td >
                        <label>1.5</label>
                      </td>
                    </tr>
                    <tr>
                      <td >
                        <label>Sci. &amp; Tech.</label>
                      </td>
                      <td >
                        <label>1.8</label>
                      </td>
                    </tr>
                    <tr>
                      <td >
                        <label>MAKABAYAN</label>
                      </td>
                      <td >
                        <label>4.5</label>
                      </td>
                    </tr>
                    <tr>
                      <td >
                        <label>Araling Panlipunan</label>
                      </td>
                      <td >
                        <label>1.2</label>
                      </td>
                    </tr>
                    <tr>
                      <td >
                        <label>TLE</label>
                      </td>
                      <td >
                        <label>1.2</label>
                      </td>
                    </tr>
                    <tr>
                      <td >
                        <label>MAPEH</label>
                      </td>
                      <td >
                        <label>1.2</label>
                      </td>
                    </tr>
                    <tr>
                        <td >
                        <label>EP</label>
                      </td>
                      <td >
                        <label>0.9</label>
                      </td>
                      </td>
                    </tr>
                 </table>


              </div>
          </div>
        </div>       
    </div>

    <footer>
    </footer>
  </div>  

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
  <script src="js/jscript-global.js"></script>
  <script type="text/javascript" src="js/slimScroll.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui.js"></script>    
  <script>
   $(document).ready(function (){
         var windowSizeArray = [ "width=200,height=200",
                            "width=300,height=400,scrollbars=yes" ];

      $('#view_form18A').click(function() {

        if($('.advisory_radio').is(':checked')){
          var link = $('.advisory_radio').attr('rel');

          var NWin = window.open((link), '', 'height=800,width=800,scrollbars=yes');

         

          alert(combined_link);

                 if (window.focus)

                 {

                   NWin.focus();
                 }
        }
        else{
          alert("please choose your advisory");
        }         
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

?>

</html>

