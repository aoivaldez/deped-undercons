 <!doctype html>

<?php
  session_start();

 

  $log_session = $_SESSION['accnt_typ_admin'];

  if(!isset($log_session) || empty($log_session)){

    	die();
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
  <link rel="stylesheet" href="css/style-manage-deped.css">
 
  
  
  
 
 
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
                    <li><a href="account_setting_deped.php" class="nav-submenu" >Account Settings</a></li>
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

      <div id="tab-container">
          <div id="tab1" class="tab-content">
            <div class="wrap-search-nav">
              <form action="manage_deped.php" method="post">
              <ul class="search-by-ul"> 
                <li>
                  <label>Search By:</label>
                </li>
                <li>
                  <label>School:</label>
                  <input type="text" name="srch_sch_name" class="input" placeholder="School">
                </li>
                <li>
                  <label>School Year:</label>
                  <input type="text" name="srch_sch_year" class="input" placeholder="School-year">  
                </li>
                <li>
                  <label>District:</label>
                  <select name="srch_sch_dstrct">
                    <option value="frst_dstrct">1st District</option>
                    <option value="scnd_dstrct">2nd District</option>
                    <option value="thrd_dstrct">3rd District</option>
                    <option value="frth_dstrct">4th District</option>
                    <option value="fth_dstrct">6th District</option>
                    <option value="sxth_dstrct">6th District</option>
                  </select>  
                </li>
              </ul>

            </form>
          </div>
          <div class="search-wrap">
                <div class="header-name-wrap">
                  <h3>Search</h3>
                </div>

                <div class="search-hits">
                  <div id="search-content">

                   <table border="1" cellpadding="0" cellborder="0" class="table-global">
                    <tr>
                        <th align="center">Selected</th>
                        <th align="center"> School Name</th>
                        <th align="center">Year<br>Established</th>
                        <th align="center">Password</th>
                    </tr>
                    <tr>
                        <td align="center">
                        <form>
                        <input type="radio" name="rad">
                        </form>
                        </td>
                        <td align="center">Saint Jude Parish School</td>
                        <td align="center">1990</td>
                        <td align="center">***********</td>
                    </tr>
                        <td align="center">
                        <form>
                        <input type="radio" name="rad">
                        </form>
                        </td>
                        <td align="center">Saint Aloysius Gonzaga</td>
                        <td align="center">1992</td>
                        <td align="center">***********</td>
                    </tr>
                    <tr>
                        <td align="center">
                        <form>
                        <input type="radio" name="rad">
                        </form>
                        </td>
                        <td align="center">Sample School Name</td>
                        <td align="center">1988</td>
                        <td align="center">***********</td>
                    </tr>
                    <tr>
                        <td align="center">
                        <form>
                        <input type="radio" name="rad">
                        </form>
                        </td>
                        <td align="center">Sample School Name</td>
                        <td align="center">1988</td>
                        <td align="center">***********</td>
                    </tr>
                    <tr>
                        <td align="center">
                        <form>
                        <input type="radio" name="rad">
                        </form>
                        </td>
                        <td align="center">Sample School Name</td>
                        <td align="center">1988</td>
                        <td align="center">***********</td>
                    </tr>
                    <tr>
                        <td align="center">
                        <form>
                        <input type="radio" name="rad">
                        </form>
                        </td>
                        <td align="center">Sample School Name</td>
                        <td align="center">1988</td>
                        <td align="center">***********</td>
                    </tr>
                        <tr>
                        <td align="center">
                        <form>
                        <input type="radio" name="rad">
                        </form>
                        </td>
                        <td align="center">Sample School Name</td>
                        <td align="center">1988</td>
                        <td align="center">***********</td>
                    </tr>
                    <tr>
                        <td align="center">
                        <form>
                        <input type="radio" name="rad">
                        </form>
                        </td>
                        <td align="center">Sample School Name</td>
                        <td align="center">1988</td>
                        <td align="center">***********</td>
                    </tr>
                    <tr>
                        <td align="center">
                        <form>
                        <input type="radio" name="rad">
                        </form>
                        </td>
                        <td align="center">Sample School Name</td>
                        <td align="center">1988</td>
                        <td align="center">***********</td>
                    </tr>
                    <tr>
                        <td align="center">
                        <form>
                        <input type="radio" name="rad">
                        </form>
                        </td>
                        <td align="center">Sample School Name</td>
                        <td align="center">1988</td>
                        <td align="center">***********</td>
                    </tr>
                    <tr>
                        <td align="center">
                        <form>
                        <input type="radio" name="rad">
                        </form>
                        </td>
                        <td align="center">Sample School Name</td>
                        <td align="center">1988</td>
                        <td align="center">***********</td>
                    </tr>
                    <tr>
                        <td align="center">
                        <form>
                        <input type="radio" name="rad">
                        </form>
                        </td>
                        <td align="center">Sample School Name</td>
                        <td align="center">1988</td>
                        <td align="center">***********</td>
                    </tr>
                    <tr>
                        <td align="center">
                        <form>
                        <input type="radio" name="rad">
                        </form>
                        </td>
                        <td align="center">Sample School Name</td>
                        <td align="center">1988</td>
                        <td align="center">***********</td>
                    </tr>
                    <tr>
                        <td align="center">
                        <form>
                        <input type="radio" name="rad">
                        </form>
                        </td>
                        <td align="center">Sample School Name</td>
                        <td align="center">1988</td>
                        <td align="center">***********</td>
                    </tr>
                    
                    </table>
                   
                  </div>  
                  
                </div>



                <input type="button" name="view_school_inf"  class="button" value="View">

                
             </div>  

          </div>

          
          </div>

      </div>
         
    </div>

    <div class="boxes">

      <div id="announcement-window" class="window">
          <span class="close-button-wrap">
            <a href="#" class="close close-link"/><div class="close-button">Close it</div></a>
          </span>
          <div id="add-anncemnt-wrap">
            <form action="manage_deped.php" method="post">
            <table>
              <tr>
                <td>
                  <label>Name:</label>
                </td>
                <td>
                  <input type="text" name="anncmnt_name" style="width:300px;" class="input" placeholder="Announcement Name">
                </td>  
              </tr>

              <tr>
                <td>
                  <label>Details:</label>
                </td>
                <td>
                  <textarea  name="anncmnt_details" style="width:300px;height:150px;" class="text-area-des" placeholder="Announcement details"></textarea>
                </td>  
              </tr>
            </table>

            <input type="submit" name="anncmnt_add" class="button" value="Add">
          </form>
          </div>         
      </div>
     <div id="mask"></div>
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
      var elem_height = $('.search-hits').height();  

        var height = $(this).height();

        $('#search-content').slimScroll({
          height:elem_height,
          start: 'top',
          wheelStep: 10,
          railVisible: true,
        }).css({ paddingRight: '10px' });


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

