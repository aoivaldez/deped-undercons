<!doctype html>

<?php
  session_start();

  include_once('DBconnect.php');
 

  $log_session = $_SESSION['accnt_typ_fac'];
  
  $school_id = $_SESSION['school_id'];

  


  if(!isset($log_session) || empty($log_session) ){

      
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
                <input type="button" id="edit-grades-button" class="button " value="Students Grades">

                <input type="button" id="add-single-student-button" class="button " value="Add Student">
          </div>

        <div id="student-list-wrap">
              <div id="students-wrap-boy">
                <div id="student-listB-header" class="header-name-wrap">
                      <h3>Boy Students List</h3>
                </div>

                <table id="table-Bstudents-list">

                  <?php 
                    $advisory_id = mysql_real_escape_string($_GET['advisory_id']);
                    $section_id = mysql_real_escape_string($_GET['sec_id']);
                    $select_students_boys = "SELECT firstname,middlename,lastname,student_id 
                                              FROM students 
                                              WHERE advisory_id=' $advisory_id' AND gender='male' ORDER BY lastname ASC ";

                      $select_boys_connect = mysql_query($select_students_boys) or die(mysql_error());

                        while($row = mysql_fetch_assoc($select_boys_connect)) { 
                  ?>

                  <tr>
                    <td ><label><?php echo $row['lastname']." ,".$row['middlename']." ".$row['lastname'] ?></label></td>
                    <td></td>
                    <td > <input type="button" rel="<?php echo $row['student_id']; ?>" class="button student_info" value="Info"></td>
                  </tr>

                  <?php } ?>

                </table>
              </div>

              <div id="students-wrap-girl">
                 <div id="student-listG-header" class="header-name-wrap">
                      <h3>Girl Students List</h3>
                </div>
                <table id="table-Bstudents-list">

                  <?php 
                    

                    $select_students_girls = "SELECT firstname,middlename,lastname,student_id 
                                              FROM students 
                                              WHERE advisory_id=' $advisory_id' AND gender='female' ORDER BY lastname ASC ";

                      $select_girls_connect = mysql_query($select_students_girls) or die(mysql_error());

                        while($row = mysql_fetch_assoc($select_girls_connect)) { 
                  ?>

                  <tr>
                    <td ><label><?php echo $row['lastname']." ,".$row['middlename']." ".$row['lastname'] ?></label></td>
                    <td></td>
                    <td > <input type="button" rel="<?php echo $row['student_id']; ?>" class="button student_info" value="Info"></td>
                  </tr>

                  <?php } ?>

                </table>
              </div>

        </div>  
        <div id="content-student-list-footer-wrap">
                <input type="button" id="edit-grades-button2" class="button " value="Students Grades">

                <input type="button" id="add-single-student-button2" class="button " value="Add Student">
                <input type="hidden" id="hidden-advisory-id" value="<?php echo $advisory_id ;?>">
                <input type="hidden" id="section-id" value="<?php echo $section_id; ?>" >
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

            $('.student_info').click(function(){
              var id_value = $(this).attr('rel');
            
            $(location).attr("href","student_info.php?id_value="+id_value+"");
            });

            $('#edit-grades-button').click(function(){

               var advisory_id_value = $('#hidden-advisory-id').val();

               var sec_id = $('#section-id').val();
            
            $(location).attr("href","student_grade_list.php?id_value="+advisory_id_value+"&sec_id="+sec_id);

            });

            function num_1(){

              alert("working");
            }

            function num_2(){

              alert("working again");
            }


            $('#add-single-student-button').click(function (){

                num_1.call(this);
                num_2.call(this);


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

