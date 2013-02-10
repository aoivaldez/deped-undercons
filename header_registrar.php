<?php
require_once('DBconnect.php');


$registrar_id =$_SESSION['user_id_regis'];
  $school_id = $_SESSION['school_id'];


  $select_name = "SELECT lastname,firstname 
                  FROM school_admin
                  WHERE school_admin_id = '$registrar_id' AND school_id = '$school_id' ";

                  $result = mysql_query($select_name);

                         if(@!$result){
                              die('error header'.mysql_error());
                           }

                           while($row = mysql_fetch_array($result)){

                                   $registrar_lastname = $row['lastname'];
                                 
                                   $registrar_firstname = $row['firstname'];
                                }

?>


<header>
    <div id="page-nav-bar">
      <img src="./images/headerlogo.png" id="header-logo">
      <div id="nav-bar">
          <div id="nav-bar-right">
            <ul id="first-lvl-nav">
              <li><span>Registrar: <?php echo $registrar_firstname." ".$registrar_lastname; ?></span></li>
              <li><span><a href="home_registrar.php">Home</a></span></li>
              <li><span ><a href="#" id="user-nav-submenu"><div  class="utility">Arrow-down</div></a></span>
                  <ul id="sec-lvl-menu">
                    <li><a href="registrar_school_profile.php?<?php echo "sch_id=".$school_id;  ?>" class="nav-submenu" >Profile</a></li>
                    <li><a href="registrar_manage.php" class="nav-submenu" >Manage</a></li>
                    <li><a href="registrar_forms.php" class="nav-submenu" >Forms</a></li>
                    <li><a href="account_setting_registrar.php" class="nav-submenu" >Account Settings</a></li>
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