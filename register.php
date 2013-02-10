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
  <link rel="stylesheet" href="css/style-register.css">
  
  
  
 
 
</head>

<body>
  <div id="wrap-body">

 

  <header>
    <div id="page-nav-bar">
      <img src="./images/headerlogo.png" id="header-logo">
     <div id="nav-bar">
          <div id="nav-bar-right">
            <ul id="first-lvl-nav">
              <li><span><a href="index.php">Login</a></span></li>
            </ul>
          </div>
      </div>
    </div>  
  </header>
    <div role="main" id="main">



      <div id="wrap-reg-menu">  
        <ul id="reg-menu-tabs" class="tabs ">
            <li><a href="#tab1">Faculty</a></li>
            <li><a href="#tab2">School</a></li>       
        </ul>           
      </div>  

      <div id="tab-container">
          <div id="tab1" class="tab-content">
            
              

          </div>

          <div id="tab2" class="tab-content">
            <div class="wrap-reg-info">
              <form action="register.php" method="post"> 
             <table>
                <tr>
                  <td><label>Last Name:</label></td>
                  <td><input type="text" name="fac_lst_name" class="input" placeholder="Last Name"></td>
                </tr>
                <tr>
                  <td><label>First Name:</label></td>
                  <td><input type="text" name="fac_frst_name" class="input" placeholder="First Name"></td>
                </tr>

                <tr>
                  <td><label>Middle Name:</label></td>
                  <td><input type="text" name="fac_mid_name" class="input" placeholder="Middle Name"></td>
                </tr>

                <tr>
                  <td><label>Gender:</label></td>
                  <td><select>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                  </td>
                </tr>

                <tr>
                  <td><label>School Email Address:</label></td>
                  <td><input type="text" name="fac_eadd" class="input" placeholder="emailadd@yahoo.com"></td>
                </tr>

                <tr>
                  <td><label>School ID:</label></td>
                  <td><input type="text" name="fac_sch_id" class="input" placeholder="School ID"></td>
                </tr>

                <tr>
                  <td><label>School Login name:</label></td>
                  <td><input type="text" name="fac_user_name" class="input" placeholder="Username"></td>
                </tr>
                <tr>
                  <td><label>School Password:</label></td>
                  <td><input type="password" name="fac_user_pass" class="input" placeholder="**********"></td>
                </tr>
                <tr>
                  <td><label>Confirm Password:</label></td>
                  <td><input type="password" name="fac_user_pass_cnfrm" class="input" placeholder="**********"></td>
                </tr>
              </table>

              <input type="submit" name="regstr_fac" value="Submit" class="button">
            </form>  
             </div>              
          </div>

      </div>
         
    </div>

    <div id="boxes">

      <div id="announcement-window" class="window">
        <a href="#" class="close"/>Close it</a>
          <div id="add-anncemnt-wrap">

            <table>
              <tr>
                <td>
                  <label>Name::</label>
                </td>
                <td>
                  <input type="text" name="anncmnt_name" style="width:300px;" class="input" placeholder="Announcement Name">
                </td>  
              </tr>

              <tr>
                <td>
                  <label>Details::</label>
                </td>
                <td>
                  <textarea  name="anncmnt_details" style="width:300px;height:150px;" class="text-area-des" placeholder="Announcement details"></textarea>
                </td>  
              </tr>

              <tr>
                <td>
                  <label>Where::</label>
                </td>
                <td>
                  <input type="text" name="anncmnt_venue" style="width:300px;" class="input" placeholder="Place">
                </td>  
              </tr>
            </table>

          </div>         
      </div>
  

      <div id="mask"></div>
    </div>

    <footer>
    </footer>
  </div>  

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
  <script>
   $(document).ready(function (){

    /*script for arrow down*/
      $('#user-nav-submenu').click(function () {
       $(this).parent().parent().find('ul').toggle();

         return false; 
      });

      $('#wrap-body').click(function (){

        $('#sec-lvl-menu').hide();
      });

    /*end*/
    
    /*for tabs*/
      $(".tab-content").hide();
      $(".tab-content:first").show();

      $("ul.tabs li").click(function() {

          $(".tab-content").hide();
          var activeTab = $(this).find("a").attr("href");
          $(activeTab).fadeIn();
        return false;  
      });
    /*end*/  

    /*modal for add announcement*/

        $('.modal').click(function(e) {
        //Cancel the link behavior
           
        e.preventDefault();

        

        //Get the A tag

        var id = $(this).attr('rel');

      

        //Get the screen height and width

        var maskHeight = $(document).height();

        var maskWidth = $(window).width();

      

        //Set heigth and width to mask to fill up the whole screen

        $('#mask').css({'width':maskWidth,'height':maskHeight});

        

        //transition effect   

        $('#mask').fadeIn(1000);  

        $('#mask').fadeTo("slow",0.8);  

      

        //Get the window height and width 512

        var winH = $(window).height();

        var winW = $(window).width();

                  

        //Set the popup window to center

        $(id).css('top',  winH/2-$(id).height()/2);

        $(id).css('left', winW/2-$(id).width()/2);

      

        //transition effect

        $(id).fadeIn(1000); 

  

  });

  

  //if close button is clicked

      $('.window .close').click(function (e) {

        //Cancel the link behavior

        e.preventDefault();

        

        $('#mask').hide();

        $('.window').hide();

      });   

  

  //if mask is clicked

      $('#mask').click(function () {

        $(this).hide();

        $('.window').hide();

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

</html>

