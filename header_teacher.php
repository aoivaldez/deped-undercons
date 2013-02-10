<?php
  require_once('DBconnect.php');



  $faculty_id =$_SESSION['user_id_fac'];
  $school_id = $_SESSION['school_id'];


  $select_name = "SELECT f_lastname,f_firstname 
                  FROM school_faculty 
                  WHERE faculty_id = '$faculty_id' AND school_id = '$school_id' ";

                  $result = mysql_query($select_name);

                         if(@!$result){
                              die('error header'.mysql_error());
                           }

                           while($row = mysql_fetch_array($result)){

                                   $faculty_lastname = $row['f_lastname'];
                                 
                                   $faculty_firstname = $row['f_firstname'];
                                }




?>



<header>
      <div id="page-nav-bar">
        <img src="./images/headerlogo.png" id="header-logo">
        <div id="nav-bar">
            <div id="nav-bar-right">
              <ul id="first-lvl-nav">
                <li><span>Teacher: <?php echo $faculty_firstname." ".$faculty_lastname; ?> </span></li>
                <li><span><a href="home.php">Home</a></span></li>
                <li><span><a href="#" id="user-nav-submenu"><div  class="utility">Arrow-down</div></a></span>
                    <ul id="sec-lvl-menu">
                      <li><a href="handle_subjects.php" class="nav-submenu" >Subjects</a></li>
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