<?php
  require_once('DBconnect.php');



 $deped_accnt_id =  $_SESSION['deped_account_id'];


  $select_name = "SELECT lastname,firstname 
                  FROM deped_accounts 
                  WHERE deped_id = '$deped_accnt_id' ";

                  $result = mysql_query($select_name);

                         if(@!$result){
                              die('error header'.mysql_error());
                           }

                           while($row = mysql_fetch_array($result)){

                                   $sadmin_lastname = $row['lastname'];
                                 
                                   $sadmin_firstname = $row['firstname'];
                                }




?>



<header>
    <div id="page-nav-bar">
      <img src="./images/headerlogo.png" id="header-logo">
      <div id="nav-bar">
          <div id="nav-bar-right">
            <ul id="first-lvl-nav">
              <li><span>Super Admin: <?php echo $sadmin_firstname." ".$sadmin_lastname; ?></span></li>
              <li><span><a href="home_deped.php">Home</a></span></li>
              <li><span><a href="#" id="user-nav-submenu"><div  class="utility">Arrow-down</div></a></span>
                  <ul id="sec-lvl-menu">
                    <li><a href="manage_deped.php" class="nav-submenu" >Manage</a></li>
                    <li><a href="deped_forms.php" class="nav-submenu" >Archives</a></li>
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