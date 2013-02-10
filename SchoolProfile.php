<!doctype html>

<?php

require('DBconnect.php');

   $id = $_GET['id_value'];

   $query = "SELECT * FROM schools WHERE school_id = $id";

   $result = mysql_query($query) or die(mysql_error());


   $select_exist_img = "SELECT path_name FROM image_upload WHERE school_id = '$id'";

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

   while ($row = mysql_fetch_array($result)){

   $status = $row['status'];
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
  <header>
    <div id="page-nav-bar">
      <img src="./images/headerlogo.png" id="header-logo">
    </div>  
  </header>
  <div role="main" id="main">
      <div id="content-schoolprofile">
        <div id="profile-header" class="header-name-wrap">
              <h3>School Profile</h3>
        </div>
        <div id="picture-holder">
           <img src="./uploads_images/schools/<?php echo $image_path; ?>" id="logo-profile">
        </div>


          <div id="profile">
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
                  Principal:
                </td>
              </tr>
              <tr>
                <td id="contact">
                  Contact Information:
                </td>
              </tr>
              <tr>
                <td id="enrollees">
                  Enrollees:
                </td>
              </tr>
              <tr>
                <td id="status_result">
                  Status: 
                </td>
              </tr>
              <tr>
                <td id="date">
                  Date Registered: 
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

          $("#principal").hide(); $("#contact").hide(); $("#enrollees").hide(); $('#date').hide();

          var status = '<?php echo $status; ?>';

          if(status == ""){
            $("#status_result").append("<label id='status_notregistered'>Not yet registered</label>");
          } else{
            $("#principal").append("<label class='result'><?php echo $row['principal'] ?></label>").show();
            $("#contact").append("<label class='result'><?php echo $row['contact'] ?></label>").show();
            $("#enrollees").append("<label class='result'><?php echo $row['enrollees'] ?></label>").show();
            $("#status_result").append("<label id='status_registered'>Registered</label>");
            $("#date").append("<label><?php echo $row['date_registered'] ?></label>").show();
          }

        });
    </script>

  </body>

</html>

<?php
}
?>