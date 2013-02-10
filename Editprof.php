<!doctype html>
<?php
require('DBconnect.php');

  session_start();

  $log_session = $_SESSION['accnt_typ'];
  $sch_id_reg = $_SESSION['school_id'];

 

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
  <link rel="stylesheet" href="css/style-edit-profile.css">
  
 
</head>

<body>
  <div id="wrap-body">
  
<?php

      require_once('header_registrar.php');



      $query = "SELECT * FROM schools WHERE school_id = $sch_id_reg";

      $result = mysql_query($query) or die(mysql_error());

      while ($row = mysql_fetch_array($result)){

?>

  <div role="main" id="main">
      <div id="edit-schoolprofile">
        <div id="profheader" class="header-name-wrap">
              <h3>Edit Profile</h3>
        </div> 
         <div id="picture-holder">
            <div id="picture-box">

            </div>
            <div id="button-div">
                <input type="button" size="10" class="button" value="Upload Picture">
            </div>
        </div>
          <div id="editprofile">
            <table id="edit_area">
              <tr>
                <td>
                  School Name: <br><label class="result"><?php echo $row['school_name']; ?></label>
                </td>
              </tr>
              <tr>
                <td>
                  School Address: <br><label class="result"><?php echo $row['school_address']; ?></label>
                </td>
              </tr>
              <tr>
                <td id="principal"> 
                  Principal: <br><input id="principal" class="inputbox" type='text' name='principal' placeholder=<?php echo $row['principal']; ?>>
                </td>
              </tr>
              <tr>
                <td id="contact">
                  Contact Information: <br><input id="contact" class="inputbox" type='text' name='contact' placeholder=<?php echo $row['contact']; ?>>
                </td>
              </tr>
              <tr>
                <td id="enrollees">
                  Enrollees: <br><input id="enrollees" class="inputbox" type='text' name='enrollees' placeholder=<?php echo $row['enrollees']; ?>>
                </td>
              </tr>
              <tr>
                <td id="div_btns">
                      <input id="btn_save" type="submit" class="button" value="Save" name="btn_save_post">
                </td>
              </tr>
              </table>
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

    $('#btn_save').click(function(){

      ajax = $.ajax({
                          type: "post",
                          url: "registrar_editproffunc.php",
                          dataType:'json',
                          cache:false,
                          data:{'principal':principal, 'contact':contact, 'enrollees':enrollees},


                          success: function(data){
                            
                            alert(data);

                            $(location).attr("href","registrar_school_profile.php?sch_id"+<?php echo $sch_id_reg?>+"");

                          }
                });

    });

  });
  </script>
  </body>

</html>

<?php
}
}
?>