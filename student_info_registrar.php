<!doctype html>

<?php

require('DBconnect.php');

  session_start();

  $log_session = $_SESSION['accnt_typ'];
  $school_id = $_SESSION['school_id'];


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
  <link rel="stylesheet" href="css/style-student-info.css">
  
 
 
</head>

<body>
  <div id="wrap-body">
  

    <?php

      require_once('header_registrar.php');

      $id = $_GET['id_value'];

      $query = "SELECT * FROM students a
                          LEFT JOIN advisory_sections b ON (a.advisory_id = b.advisory_id)
                        WHERE student_id = $id";

      $result = mysql_query($query) or die(mysql_error());

      while ($row = mysql_fetch_array($result)){

    ?>

  <div role="main" id="main">
      <div id="content-schoolprofile">
        <div id="profile-header" class="header-name-wrap">
              <h3>Student Information</h3>
        </div>
          <div id="profile">
            <table cellpadding="20"  >
              <tr>
                <td>
                  Name: <label class="result"><?php echo $row['firstname']," ",$row['middlename']," ",$row['lastname']; ?></label>
                </td>
              </tr>
              <tr>
                <td>
                  Address:  <label class="result"><?php echo $row['address']; ?></label>
                </td>
              </tr>
              <tr>
                <td> 
                  Age: <label class="result"><?php echo $row['age']; ?></label>
                </td>
              </tr>
              <tr>
                <td>
                 Year and Section: <label class="result"><?php echo $row['year_grade'], " ", $row['section_name']; ?></label>
                </td>
              </tr>
              <tr>
                <td> 
                  Years in school:  <label class="result"><?php if($row['years_in_school'] == 0){
                    echo "No information yet"; } else {echo $row['years_in_school'];}?></label>
                </td>
              </tr>
               <tr>
                <td> 
                  Total Attendance:  <label class="result"><?php if($row['attendance'] == 0){
                    echo "No information yet"; } else {echo $row['attendance'];}?></label>
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

  </body>

</html>

<?php
}
?>