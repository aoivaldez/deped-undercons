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
                <h3>Class Advisory</h3>
              </div>
              <div id="class-list-wrap"> 
                <div id="class-list-content"  class="to_scroll"  >
                 
                 <table id="table-class-content" class="table-content-all">
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
                    </tr>
                    <tr>
                      <td>
                        <label><input type="radio" class="advisory_radio" rel="Sample Section.php" name="advisory_form" value=""> </label>
                      </td>
                      <td >
                        <label>1st year</label>
                      </td>
                      <td >
                        <label >I-Sapphire</label>
                    </tr>
                    <tr>
                      <td>
                        <label><input type="radio" class="advisory_radio" rel="Sample Section.php" name="advisory_form" value=""> </label>
                      </td>
                      <td >
                        <label>2nd year</label>
                      </td>
                      <td >
                        <label >II-Orchid</label>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <label><input type="radio" class="advisory_radio" rel="Sample Section.php" name="advisory_form" value=""> </label>
                      </td>
                      <td >
                        <label>3rd year</label>
                      </td>
                      <td >
                        <label >III-Pacific</label>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <label><input type="radio" rel="Sample Section.php" name="advisory_form" value=""></label>
                      </td>
                      <td >
                        <label>4th year</label>
                      </td>
                      <td >
                        <label >IV-Rizal</label>
                      </td>
                    </tr>
                 </table>
              </div>


                <div id="view-form-wrap">
                  <input type="button" id="view_form18A" name="view_form_18A" class="button" value="View">

                  <input type="button" name="add_anncemnt" rel="#addstudent-window" class="button modal" value="Add Students">

                  <input type="button" name="add_anncemnt" rel="#createsection-window" class="button modal" value="Add Section">
                </div>
            </div>
          </div>
        </div>       
    </div>

    <footer>

      <div class="boxes">     
      <div id="addstudent-window" class="window">
          <div class="modal-header">
              <h3>Section: I-Sapphire</h3>
          </div>

          <span class="close-button-wrap">
            <a href="#" class="close close-link"/><div class="close-button">Close it</div></a>
          </span>
          <div id="addstudent-wrap">
            <form action="manage_deped.php" method="post">
             <div id="students-info-wrap"> 
              
              <table>
                <th colspan="4"><h2>Boys</h2></th>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="bstudnt_lname1" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_mname1" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_fname1" class="input" placeholder="First Name">
                  </td>  
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="bstudnt_lname2" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_mname2" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_fname2" class="input" placeholder="First Name">
                  </td>  
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="bstudnt_lname3" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_mname3" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_fname3" class="input" placeholder="First Name">
                  </td>  
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="bstudnt_lname4" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_mname4" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_fname4" class="input" placeholder="First Name">
                  </td>  
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="bstudnt_lname5" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_mname5" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_fname5" class="input" placeholder="First Name">
                  </td>  
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="bstudnt_lname6" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_mname6" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_fname6" class="input" placeholder="First Name">
                  </td>  
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="bstudnt_lname7" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_mname7" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_fname7" class="input" placeholder="First Name">
                  </td>  
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="bstudnt_lname8" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_mname8" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_fname8" class="input" placeholder="First Name">
                  </td>  
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="bstudnt_lname9" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_mname9" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_fname9" class="input" placeholder="First Name">
                  </td>  
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="bstudnt_lname10" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_mname10" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_fname10" class="input" placeholder="First Name">

                    <input type="button" id="" name="add_bstudent" class="button add-bstudent" value="+">
                  </td>  
                </tr>              
              </table>
    
            
              <table>
                <th colspan="4"><h2>Girls</h2></th>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="gstudnt_lname1" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_mname1" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_fname1" class="input" placeholder="First Name">
                  </td>  
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="gstudnt_lname2" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_mname2" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_fname2" class="input" placeholder="First Name">
                  </td>  
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="gstudnt_lname3" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_mname3" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_fname3" class="input" placeholder="First Name">
                  </td>  
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="gstudnt_lname4" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_mname4" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_fname4" class="input" placeholder="First Name">
                  </td>  
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="gstudnt_lname5" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_mname5" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_fname5" class="input" placeholder="First Name">
                  </td>  
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="gstudnt_lname6" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_mname6" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_fname6" class="input" placeholder="First Name">
                  </td>  
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="gstudnt_lname7" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_mname7" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_fname7" class="input" placeholder="First Name">
                  </td>  
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="gstudnt_lname8" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_mname8" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_fname8" class="input" placeholder="First Name">
                  </td>  
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="gstudnt_lname9" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_mname9" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_fname9" class="input" placeholder="First Name">
                  </td>  
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="gstudnt_lname10" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_mname10" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_fname10" class="input" placeholder="First Name">

                    <input type="button" id="add-gstudent" name="add_gstudent" class="button" value="+">
                  </td>  
                </tr>              
              </table>
            </div>
            
            <div class="modal-footer">
              <input type="submit" id="add-students" name="add_students" class="button" value="Add">
            </div>
          </form>
          </div>       
      </div>

      <div id="createsection-window" class="window">
          <div class="modal-header">
              <h3>Create Section</h3>
          </div>

          <span class="close-button-wrap">
            <a href="#" class="close close-link"/><div class="close-button">Close it</div></a>
          </span>
          <div id="addstudent-wrap">
            <form action="manage_deped.php" method="post">
             <div id="students-info-wrap">
              <table>
                <th colspan="4"><h2>Boys</h2></th>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="bstudnt_lname1" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_mname1" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_fname1" class="input" placeholder="First Name">
                  </td>  
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="bstudnt_lname2" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_mname2" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_fname2" class="input" placeholder="First Name">
                  </td>  
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="bstudnt_lname3" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_mname3" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_fname3" class="input" placeholder="First Name">
                  </td>  
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="bstudnt_lname4" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_mname4" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_fname4" class="input" placeholder="First Name">
                  </td>  
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="bstudnt_lname5" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_mname5" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_fname5" class="input" placeholder="First Name">
                  </td>  
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="bstudnt_lname6" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_mname6" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_fname6" class="input" placeholder="First Name">
                  </td>  
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="bstudnt_lname7" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_mname7" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_fname7" class="input" placeholder="First Name">
                  </td>  
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="bstudnt_lname8" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_mname8" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_fname8" class="input" placeholder="First Name">
                  </td>  
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="bstudnt_lname9" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_mname9" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_fname9" class="input" placeholder="First Name">
                  </td>  
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="bstudnt_lname10" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_mname10" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_fname10" class="input" placeholder="First Name">

                    <input type="button" id="" name="add_bstudent" class="button add-bstudent" value="+">
                  </td>  
                </tr>              
              </table>

              <table>
                <th colspan="4"><h2>Girls</h2></th>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="gstudnt_lname1" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_mname1" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_fname1" class="input" placeholder="First Name">
                  </td>  
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="gstudnt_lname2" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_mname2" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_fname2" class="input" placeholder="First Name">
                  </td>  
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="gstudnt_lname3" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_mname3" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_fname3" class="input" placeholder="First Name">
                  </td>  
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="gstudnt_lname4" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_mname4" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_fname4" class="input" placeholder="First Name">
                  </td>  
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="gstudnt_lname5" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_mname5" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_fname5" class="input" placeholder="First Name">
                  </td>  
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="gstudnt_lname6" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_mname6" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_fname6" class="input" placeholder="First Name">
                  </td>  
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="gstudnt_lname7" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_mname7" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_fname7" class="input" placeholder="First Name">
                  </td>  
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="gstudnt_lname8" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_mname8" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_fname8" class="input" placeholder="First Name">
                  </td>  
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="gstudnt_lname9" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_mname9" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_fname9" class="input" placeholder="First Name">
                  </td>  
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="gstudnt_lname10" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_mname10" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_fname10" class="input" placeholder="First Name">

                    <input type="button" id="add-gstudent" name="add_gstudent" class="button" value="+">
                  </td>  
                </tr>              
              </table>
            </div>  

          <div id="section-info-wrap">
                <table>
                  <tr>
                    <td>
                      <label>Department</label>
                    </td>
                    
                      <td>
                          <select name="class_department">
                            <option value="elem">Elementary</option>
                            <option value="highschool">HighSchool</option>                 
                          </select>
                      </td>
                  </tr>
                  <tr>
                    <td>
                      <label>Section</label>
                    </td>
                    <td>
                      <input type="text" name="section_name" class="input" placeholder="Section Name">
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <label>Year/Grade</label>
                    </td>
                    <td>
                      <select name="faclty_advse_year">
                        <option value="frst_year">1st Year</option>
                        <option value="scnd_year">2nd Year</option>
                        <option value="thrd_year">3rd Year</option>
                        <option value="frth_year">4th Year</option>                    
                      </select>
                    </td>
                  </tr>              
                </table>
            </div>
            <div class="modal-footer">
              <input type="submit" id="add-students" name="create_section" class="button" value="Create">
            </div>
            <div class="modal-footer">
              <input type="submit" id="add-students" name="create_section" class="button" value="Delete">
            </div>
          </form>
          </div>         
      </div>


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


      $("body").on('click','.add-bstudent',function () {
                 var counter="10"; 
                 counter+=counter;  

                 $(this).parent().parent().after("<tr><td><label>Name:</label></td><td><input type='text' name='bstudnt_lname10' class='input' placeholder='Last Name'></td><td><input type='text' name='bstudnt_mname10' class='input' placeholder='Middle Name'></td><td><input type='text' name='bstudnt_fname10' class='input' placeholder='First Name'> <input type='button' id='' name='add_bstudent' class='button add-bstudent' value='+'> <input type='button' id='' name='add_bstudent' class='button remove-bstudent' value='-'></td></tr>");

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

