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
                <li><span><a href="#">Teacher</a></span></li>
                <li><span><a href="home.php">Home</a></span></li>
                <li><span><a href="#" id="user-nav-submenu"><div  class="utility">Arrow-down</div></a></span>
                    <ul id="sec-lvl-menu">
                    <li><a href="teacher_class.php" class="nav-submenu" >Class</a></li>
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
      <div id="content">
        <div id="lft-col">
            <div id="advisory-wrap">
              <div id="advisory-header" class="header-name-wrap">
                <h3>Form 18A</h3>
              </div>
              <div id="advisory-list-wrap"> 
                <div id="advisory-list-content"  class="to_scroll"  >
                 
                 <table id="table-advisory-content" class="table-content-all">
                    <tr>
                      <td>
                        <label>Select</label>
                      </td>
                      <td>
                        <label>Year</label>
                      </td>
                      <td>
                        <label>Section</label>
                      </td>
                      <td>
                        <label>Status</label>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <label><input type="radio" class="advisory_radio" rel="form 18-A_1styear.php" name="advisory_form" value=""> </label>
                      </td>
                      <td >
                        <label>1st year</label>
                      </td>
                      <td >
                        <label >1B</label>
                      </td>
                      <td >
                        <label>For Approval</label>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <label><input type="radio" class="advisory_radio" rel="form 18-A_1styear.php" name="advisory_form" value=""> </label>
                      </td>
                      <td >
                        <label>1st year</label>
                      </td>
                      <td >
                        <label >1B</label>
                      </td>
                      <td >
                        <label>For Approval</label>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <label><input type="radio" class="advisory_radio" rel="form 18-A_1styear.php" name="advisory_form" value=""> </label>
                      </td>
                      <td >
                        <label>1st year</label>
                      </td>
                      <td >
                        <label >1B</label>
                      </td>
                      <td >
                        <label>For Approval</label>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <label><input type="radio" class="advisory_radio" rel="form 18-A_1styear.php" name="advisory_form" value=""> </label>
                      </td>
                      <td >
                        <label>1st year</label>
                      </td>
                      <td >
                        <label >1B</label>
                      </td>
                      <td >
                        <label>For Approval</label>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <label><input type="radio" class="advisory_radio" rel="form 18-A_1styear.php" name="advisory_form" value=""> </label>
                      </td>
                      <td >
                        <label>1st year</label>
                      </td>
                      <td >
                        <label >1B</label>
                      </td>
                      <td >
                        <label>For Approval</label>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <label><input type="radio" class="advisory_radio" rel="form 18-A_1styear.php" name="advisory_form" value=""> </label>
                      </td>
                      <td >
                        <label>1st year</label>
                      </td>
                      <td >
                        <label >1B</label>
                      </td>
                      <td >
                        <label>For Approval</label>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <label><input type="radio" class="advisory_radio" rel="form 18-A_1styear.php" name="advisory_form" value=""> </label>
                      </td>
                      <td >
                        <label>1st year</label>
                      </td>
                      <td >
                        <label >1B</label>
                      </td>
                      <td >
                        <label>For Approval</label>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <label><input type="radio" class="advisory_radio" rel="form 18-A_1styear.php" name="advisory_form" value=""> </label>
                      </td>
                      <td >
                        <label>1st year</label>
                      </td>
                      <td >
                        <label >1B</label>
                      </td>
                      <td >
                        <label>For Approval</label>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <label><input type="radio" class="advisory_radio" rel="form 18-A_1styear.php" name="advisory_form" value=""> </label>
                      </td>
                      <td >
                        <label>1st year</label>
                      </td>
                      <td >
                        <label >1B</label>
                      </td>
                      <td >
                        <label>For Approval</label>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <label><input type="radio" rel="" name="advisory_form" value=""></label>
                      </td>
                      <td >
                        <label>1st year</label>
                      </td>
                      <td >
                        <label >1B</label>
                      </td>
                      <td >
                        <label>For Approval</label>
                      </td>
                    </tr>
                 </table>


              </div>
                <div id="view-form-wrap">
                  <input type="button" id="view_form18A" name="view_form_18A" class="button" value="view">
                </div>
            </div>
                
          </div>


            <div id="announcemnts-wrap" >
              <div id="announcements-header" class="header-name-wrap">
                <h3>Announcements:</h3>
              </div>

              <div id="announcements" class="height-scroll">
                <div id="anncmnts-content"  class="to_scroll"  >
                    <ul>
                      <li><a href="http://www.deped.gov.ph/">Letter of Secretary Br. Armin A. Luistro FSC to all DepEd Employees</a></li>
                      <li><a href="http://www.deped.gov.ph/">Module for August 28, 2012 - A tribute to the late DILG Secretary Jesse Robredo</a></li>
                      <li><a href="http://www.deped.gov.ph/">DepEd statement on the passing of DILG Secretary Jesse Robredo</a></li>
                      <li><a href="http://www.deped.gov.ph/">Vacancy Announcement</a></li>
                      <li><a href="http://www.deped.gov.ph/">Notice of Petition for Accreditation with the Civil Service Commission </a></li>
                      <li><a href="http://www.deped.gov.ph/">DepEd to train science high school teachers for K to 12 </a></li>
                      <li><a href="http://www.deped.gov.ph/">DepEd announces PSIP Pre-Qualified Bidders</a></li>
                      <li><a href="http://www.deped.gov.ph/">Schools that train athletes get P500K subsidy each</a></li>
                      <li><a href="http://www.deped.gov.ph/">Bantay Eskwela goes Region-wide</a></li>
                      <li><a href="http://www.deped.gov.ph/">DepEd, Pru Life UK teach kids proper money handling</a></li>
                      <li><a href="http://www.deped.gov.ph/">DepEd: Palaro promotes values formation among athletes</a></li>
                      <li><a href="http://www.deped.gov.ph/">DepEd convenes officials for a more organized 2012 Palaro</a></li>
                      <li><a href="http://www.deped.gov.ph/">DepEd to hire science scholars to teach in public high schools</a></li>
                      <li><a href="http://www.deped.gov.ph/">DepEd increases budget for SPED centers</a></li>
                      <li><a href="http://www.deped.gov.ph/">Public school teachers hone skills in teaching Spanish</a></li>
                      <li><a href="http://www.deped.gov.ph/">Multigrade classes bring more children to school</a></li>
                      <li><a href="http://www.deped.gov.ph/">DepEd engages Rappler as Palarong Pambansa social media partner</a></li>
                      <li><a href="http://www.deped.gov.ph/">Public school students join in the first peace building video conference</a></li>

                    </ul>
                </div>  
              </div>
            </div>
        </div>
        <div id="right-col">

            <div id="approval-wrap">
              <div id="approval-header" class="header-name-wrap">
                <h3>For Approval</h3>
              </div>
              <div id="approval"> 
                <div id="approval-content"  class="to_scroll"  >
                 
                 <table id="table-approval-content" class="table-content-all">
                    <tr>
                      <td>
                        <label>Select</label>
                      </td>
                      <td>
                        <label>Subject</label>
                      </td>
                      <td>
                        <label>Year</label>
                      </td>
                      <td>
                        <label>Section</label>
                      </td>
                      <td>
                        <label>Status</label>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <label><input type="radio" name="for_approval" value=""></label>
                      </td>
                      <td >
                        <label>Math</label>
                      </td>
                      <td >
                        <label>1st year</label>
                      </td>
                      <td >
                        <label >1B</label>
                      </td>
                      <td >
                        <label>For Approval</label>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <label><input type="radio" name="for_approval" value=""></label>
                      </td>
                      <td >
                        <label>Math</label>
                      </td>
                      <td >
                        <label>1st year</label>
                      </td>
                      <td >
                        <label >1B</label>
                      </td>
                      <td >
                        <label>For Approval</label>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <label><input type="radio" name="for_approval" value=""></label>
                      </td>
                      <td >
                        <label>Math</label>
                      </td>
                      <td >
                        <label>1st year</label>
                      </td>
                      <td >
                        <label >1B</label>
                      </td>
                      <td >
                        <label>For Approval</label>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <label><input type="radio" name="for_approval" value=""></label>
                      </td>
                      <td >
                        <label>Math</label>
                      </td>
                      <td >
                        <label>1st year</label>
                      </td>
                      <td >
                        <label >1B</label>
                      </td>
                      <td >
                        <label>For Approval</label>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <label><input type="radio" name="for_approval" value=""></label>
                      </td>
                      <td >
                        <label>Math</label>
                      </td>
                      <td >
                        <label>1st year</label>
                      </td>
                      <td >
                        <label >1B</label>
                      </td>
                      <td >
                        <label>For Approval</label>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <label><input type="radio" name="for_approval" value=""></label>
                      </td>
                      <td >
                        <label>Math</label>
                      </td>
                      <td >
                        <label>1st year</label>
                      </td>
                      <td >
                        <label >1B</label>
                      </td>
                      <td >
                        <label>For Approval</label>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <label><input type="radio" name="for_approval" value=""></label>
                      </td>
                      <td >
                        <label>Math</label>
                      </td>
                      <td >
                        <label>1st year</label>
                      </td>
                      <td >
                        <label >1B</label>
                      </td>
                      <td >
                        <label>For Approval</label>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <label><input type="radio" name="for_approval" value=""></label>
                      </td>
                      <td >
                        <label>Math</label>
                      </td>
                      <td >
                        <label>1st year</label>
                      </td>
                      <td >
                        <label >1B</label>
                      </td>
                      <td >
                        <label>For Approval</label>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <label><input type="radio" name="for_approval" value=""></label>
                      </td>
                      <td >
                        <label>Math</label>
                      </td>
                      <td >
                        <label>1st year</label>
                      </td>
                      <td >
                        <label >1B</label>
                      </td>
                      <td >
                        <label>For Approval</label>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <label><input type="radio" name="for_approval" value=""></label>
                      </td>
                      <td >
                        <label>Math</label>
                      </td>
                      <td >
                        <label>1st year</label>
                      </td>
                      <td >
                        <label >1B</label>
                      </td>
                      <td >
                        <label>For Approval</label>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <label><input type="radio" name="for_approval" value=""></label>
                      </td>
                      <td >
                        <label>Math</label>
                      </td>
                      <td >
                        <label>1st year</label>
                      </td>
                      <td >
                        <label >1B</label>
                      </td>
                      <td >
                        <label>For Approval</label>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <label><input type="radio" name="for_approval" value=""></label>
                      </td>
                      <td >
                        <label>Math</label>
                      </td>
                      <td >
                        <label>1st year</label>
                      </td>
                      <td >
                        <label >1B</label>
                      </td>
                      <td >
                        <label>For Approval</label>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <label><input type="radio" name="for_approval" value=""></label>
                      </td>
                      <td >
                        <label>Math</label>
                      </td>
                      <td >
                        <label>1st year</label>
                      </td>
                      <td >
                        <label >1B</label>
                      </td>
                      <td >
                        <label>For Approval</label>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <label><input type="radio" name="for_approval" value=""></label>
                      </td>
                      <td >
                        <label>Math</label>
                      </td>
                      <td >
                        <label>1st year</label>
                      </td>
                      <td >
                        <label >1B</label>
                      </td>
                      <td >
                        <label>For Approval</label>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <label><input type="radio" name="for_approval" value=""></label>
                      </td>
                      <td >
                        <label>Math</label>
                      </td>
                      <td >
                        <label>1st year</label>
                      </td>
                      <td >
                        <label >1B</label>
                      </td>
                      <td >
                        <label>For Approval</label>
                      </td>
                    </tr>
                    
                 </table>


              </div>
              <div id="view-approval-wrap">
                <input type="button" name="view_approval" class="button" value="view">
              </div>
            </div>  
          </div>  
            <div id="updates-wrap">

              <div id="updates-header" class="header-name-wrap">
                <h3>Updates:</h3>
              </div>
              <div id="updates">
                <div id="updates-content"  class="to_scroll"  >
                  <ul>
                      <li><a href="#">Mr. Caballejo has submitted Form 18-A</a></li>
                      <li><a href="#">Mr. Labrador has submitted Form 18-A</a></li>
                      <li><a href="#">Mr. Valdez Submitted Form 18-A</a></li>
                      <li><a href="#">Mr. Esposo has submitted Form 18-A</a></li>
                      <li><a href="#">Mr. Pulido has submitted Form 18-A</a></li>
                      <li><a href="#">Mr. Sosing has submitted Form 18-A</a></li>
                      <li><a href="#">Ms. Alvarez has submitted Form 18-A</a></li>
                      <li><a href="#">Mrs. Rodriguez has submitted Form 18-A</a></li>
                      <li><a href="#">Mr. Alcaraz has submitted Form 18-A</a></li>
                      <li><a href="#">Mrs. El Nido has submitted Form 18-A</a></li>
                      <li><a href="#">Mr. Chavez has submitted Form 18-A</a></li>
                      <li><a href="#">Mrs. Ocampo submitted Form 18-A</a></li>
                      <li><a href="#">Mr. Macapagal submitted Form 18-A</a></li>
                      <li><a href="#">Mr. Alapag has submitted Form 18-A</a></li>
                      <li><a href="#">sample update</a></li>
                      <li><a href="#">sample update</a></li>
                      <li><a href="#">sample update</a></li>
                      <li><a href="#">sample update</a></li>
                      <li><a href="#">sample update</a></li>
                    </ul>
               </div>   
              </div>
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
}

?>

</html>

