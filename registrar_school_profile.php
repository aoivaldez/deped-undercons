<!doctype html>

<?php


  require('DBconnect.php');

  session_start();

  $log_session = $_SESSION['accnt_typ'];
  $sch_id_reg = $_SESSION['school_id'];


  $school_id_url = $_GET['sch_id'];


  $select_exist_img = "SELECT path_name FROM image_upload WHERE school_id = '$school_id_url'";

                  $query_img_path = mysql_query($select_exist_img);

                        if(@!$query_img_path){
                             die('error header'.mysql_error());
                           }


                           $count_exist =  mysql_num_rows($query_img_path);

          
          if($count_exist > 0 ){

            while ($row = mysql_fetch_assoc($query_img_path)) {

              $path_name = $row['path_name'];
            }

            $image_path= $path_name;
           
          }
          else{



            $image_path = "default.jpg";


          }


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
  <link rel="stylesheet" href="css/style-schoolprofile.css">
  
 
 
</head>

<body>
  <div id="wrap-body">
  

    <?php

      require_once('header_registrar.php');

 
    ?>

  
  <div role="main" id="main">
      <div id="content-schoolprofile">
        <div id="profile-header" class="header-name-wrap">
              <h3>School Profile</h3>
        </div>
        <div id="picture-holder">
           <img src="./uploads_images/schools/<?php echo $image_path; ?>" id="logo-profile">
        </div>
          <div id="profile">

            <?php

             $query = "SELECT * FROM schools WHERE school_id = $sch_id_reg";

             $result = mysql_query($query) or die(mysql_error());

             while ($row = mysql_fetch_array($result)){

            ?>

            <table cellpadding="20"  >
              <tr>
                <td>
                  School Name: <label class="result"><?php echo $row['school_name']; ?></label>
                </td>
              </tr>
              <tr>
                <td>
                  School Address:  <label class="result"><?php echo $row['school_address']; ?></label>
                </td>
              </tr>
              <tr>
                <td id="principal"> 
                  Principal: <label class="result"><?php if($row['principal'] == ""){ echo "No information yet"; } else{echo $row['principal'];} ?></label>
                </td>
              </tr>
              <tr>
                <td id="contact">
                  Contact Information: <label class="result"><?php if($row['contact'] == ""){ echo "No information yet"; } else{echo $row['contact'];}  ?></label>
                </td>
              </tr>
              <tr>
                <td id="enrollees">
                  Enrollees: <label class="result"><?php if($row['enrollees'] == ""){ echo "No information yet"; } else{echo $row['enrollees'];} ?></label>
                </td>
              </tr>
              <tr>
                <td id="date">
                  Date Registered: <label class="result"><?php echo $row['date_registered']; ?></label>
                </td>
              </tr>
              <tr>
                <td id="Button">
                  <input id="edit_btn" type="button" class="button" value="Edit Profile">
                </td>
              </tr>
              <table>
           </div>
           
            

    </div>

    </div>


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>

    <script src="js/jscript-global.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>        
    <script type="text/javascript" src="js/slimScroll.min.js"></script>

    <script>

    $(document).ready(function(){

      $('#edit_btn').click(function(){

        $(location).attr("href","edit_profile_registrar.php?sch_id="+<?php echo $school_id_url; ?>+"");

      });

    });

    </script>

  </body>



<?php
}
}
?>

</html>