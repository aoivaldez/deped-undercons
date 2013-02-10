<!doctype html>

<?php
  session_start();

 

  $log_session = $_SESSION['accnt_typ_fac'];

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
  <link rel="stylesheet" href="css/style-teacher-class.css">
  <link rel="stylesheet" href="css/style-manage-registrar.css">
  
  
 
 
</head>

<body>
  <div id="wrap-body">

 

  <header>
      <div id="page-nav-bar">
        <img src="./images/headerlogo.png" id="header-logo">
        <div id="nav-bar">
            <div id="nav-bar-right">
              <ul id="first-lvl-nav">
                <li><span><a href="#">Teacher</a></span></li>
                <li><span><a href="home.php">Home</a></span></li>
                <li><span><a href="#" id="user-nav-submenu"><div  class="utility">Arrow-down</div></a></span>
                    <ul id="sec-lvl-menu">
                    <li><a href="#" class="nav-submenu" >Class</a></li>
                    <li><a href="account_setting_teacher.php" class="nav-submenu" >Account Settings</a></li>
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
      <div id="class-content">
        <div id="class-wrap">
              <div id="advisory-header" class="header-name-wrap">
                <h3>Subjects</h3>
              </div>
              <div id="class-list-wrap"> 
                               <div id="class-list-content"  class="to_scroll"  >
                 
                 <table id="table-class-content" class="table-content-all">
                    <tr>
                      <td>
                        <label><p>Wrong input of grade for Mark Anthony P. Caballejo's subject in his Science and Technology subject.Your input does not match the grade in the class record.</p></label>
                      </td>
                    </tr>
                 </table>
              </div>

            </div>
                
          </div>
        
        </div>       
    </div>

    <footer>

      <div id="mask"></div>
    </div>
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

        var counter=10;
        var counter2=10;

      $("body").on('click','.add-bstudent',function () {
                  
                 counter+=1;  

                 $(this).parent().parent().after("<tr><td><label>Name:</label></td><td><input type='text' name='subject_name["+counter+"]' class='input' placeholder='Subject Name'><td><label>Units:</label></td></td><td><input type='text' name='subject_units["+counter+"]' class='input' placeholder='No. of Units'> <input type='button' id='' name='add_bstudent' class='button add-bstudent' value='+'> <input type='button' id='' name='add_bstudent' class='button remove-bstudent' value='-'></td></tr>");

                 var windwheight = $('.window').height();

                 var tothcon = (windwheight/10)/2;

                 

                 var maskWidth = $(window).width();
                 var id = $('.modal').attr('rel');
                 var containerH = $(id).height()/2 ;

                 var totalh = windwheight + containerH + tothcon; 

                 

                 $('#mask').css({'width':maskWidth,'height':totalh});


      });

   $("body").on('click','.add-gstudent',function () {
                  
                 counter2+=1;  

                 $(this).parent().parent().after("<tr><td><label>Name:</label></td><td><input type='text' name='gstudnt_lname["+counter2+"]' class='input' placeholder='Last Name'></td><td><input type='text' name='gstudnt_mname['"+counter2+"]' class='input' placeholder='Middle Name'></td><td><input type='text' name='gstudnt_fname["+counter2+"]' class='input' placeholder='First Name'> <input type='button' id='' name='add_gstudent' class='button add-gstudent' value='+'> <input type='button' id='' name='add_gstudent' class='button remove-gstudent' value='-'></td></tr>");

                 var windwheight = $('.window').height();

                 var tothcon = (windwheight/10)/2;

                 

                 var maskWidth = $(window).width();
                 var id = $('.modal').attr('rel');
                 var containerH = $(id).height()/2 ;

                 var totalh = windwheight + containerH + tothcon; 
                 $('#mask').css({'width':maskWidth,'height':totalh});


      });

      $("body").on('click','.remove-bstudent',function () {
                 $(this).parent().parent().remove();
      });

       $("body").on('click','.remove-gstudent',function () {
                 $(this).parent().parent().remove();
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

