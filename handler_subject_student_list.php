<!doctype html>

<?php
  session_start();

  include_once('DBconnect.php');
 

  $log_session = $_SESSION['accnt_typ_fac'];
  $school_id = $_SESSION['school_id'];
  $handler_id = $_SESSION['user_id_fac'];
  $subject_id = mysql_real_escape_string($_GET['subject_id']);
  $section_id = mysql_real_escape_string($_GET['sect_id']);

  


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
  <link rel="stylesheet" href="css/style-student-list.css">
  
  
 
 
</head>

<body>
  <div id="wrap-body">

 

 
    <?php

      require_once('header_teacher.php');

    ?>


    <div role="main" id="main">
      <div id="content">
          <div id="content-student-list-header-wrap">
               
          </div>

        <div id="student-list-wrap">
              <div id="students-wrap-boy">
                <div id="student-listB-header" class="header-name-wrap">
                      <h3>Boy Students List</h3>
                </div>

                <table id="table-Bstudents-list">

                  <?php 
                    
                    

                    $select_students_boys = "SELECT *
                                              FROM registrar_grade_archive a
                                              LEFT JOIN students b ON (a.student_id = b.student_id)
                                              WHERE a.subject_id ='$subject_id'
                                              AND a.section_id ='$section_id'
                                              AND a.subject_handler_id = '$handler_id'
                                              AND a.school_id = '$school_id'
                                              AND b.gender ='male'
                                              ";

                      $select_boys_connect = mysql_query($select_students_boys) or die(mysql_error());



                        while($row = mysql_fetch_assoc($select_boys_connect)) { 
                  ?>

                  <tr>
                    <td ><label><?php echo $row['lastname']." ,".$row['middlename']." ".$row['lastname'] ?></label></td>
                    <td></td>
                    <td > <input type="text" value="<?php echo $row['grade']; ?>" readonly="readonly"></td>
                  </tr>

                  <?php } ?>

                </table>
              </div>

              <div id="students-wrap-girl">
                 <div id="student-listG-header" class="header-name-wrap">
                      <h3>Girl Students List</h3>
                </div>
                <table id="table-Gstudents-list">

                  <?php 
                    

                    $select_students_girls = "SELECT *
                                              FROM registrar_grade_archive a
                                              LEFT JOIN students b ON (a.student_id = b.student_id)
                                              WHERE a.subject_id ='$subject_id'
                                              AND a.section_id ='$section_id'
                                              AND a.subject_handler_id = '$handler_id'
                                              AND a.school_id = '$school_id'
                                              AND b.gender ='female'
                                              ";

                      $select_girls_connect = mysql_query($select_students_girls) or die(mysql_error());

                        while($row = mysql_fetch_assoc($select_girls_connect)) { 
                  ?>

                  <tr>
                    <td ><label><?php echo $row['lastname']." ,".$row['middlename']." ".$row['lastname'] ?></label></td>
                    <td></td>
                    <td > <input type="text" value="<?php echo $row['grade']; ?>" readonly="readonly"></td>
                  </tr>

                  <?php } ?>

                </table>
              </div>

        </div>  
        <div id="content-student-list-footer-wrap">
                
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

