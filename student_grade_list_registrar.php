<!doctype html>

<?php
  session_start();

  include_once('DBconnect.php');
 

  $log_session = $_SESSION['accnt_typ'];
  $school_id = $_SESSION['school_id'];


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
  <link rel="stylesheet" href="css/style-student-grade-list.css">
  
  
 
 
</head>

<body>
  <div id="wrap-body">

 

 
    <?php

      require_once('header_registrar.php');

        

    ?>


    <div role="main" id="main">
      <div id="content">
          <div id="content-student-list-header-wrap">



            <?php

            $advisor_id = mysql_real_escape_string($_GET['advisor_id']);
             $advisory_id = mysql_real_escape_string($_GET['advisory_id']);
            $section_id = mysql_real_escape_string($_GET['sec_id']);

                  $select_year_grade = "SELECT year_grade  
                                              FROM students 
                                              WHERE advisory_id=' $advisory_id' LIMIT 1";

                      $select_year_grade_connect = mysql_query( $select_year_grade) or die(mysql_error());

                        while($row = mysql_fetch_assoc($select_year_grade_connect)) {

                          $year_grade = $row['year_grade'];

                        echo  "<label>Year/Grade Level:</label>"."<label id='year-label'>$year_grade</label>" ;
                        echo " <input type='hidden' id='year_grade_lvl' value='$year_grade' >";
                        }



            ?>

                    
                    <label>Subject: </label>
                     <select id="subjects-list">
                              
                     </select>


                     <div id="authenticity-notice-wrap"> 

                        <h1 id="authenticity-notice"></h1>

                     </div>
          </div>

        <div id="student-list-wrap">
              <div id="students-wrap-boy">
                <div id="student-listB-header" class="header-name-wrap">
                      <h3>Boy Students List</h3>
                </div>

                <table id="table-Bstudents-list">
                    <?php


                           

                     $countB = 0; 

                    $select_students_boys = "SELECT firstname,middlename,lastname,student_id
                                              FROM students 
                                              WHERE faculty_id='$advisor_id'
                                              AND section_id = '$section_id'
                                              AND gender='male' ORDER BY lastname ASC ";

                      $select_boys_connect = mysql_query($select_students_boys) or die(mysql_error());

                        while($row = mysql_fetch_assoc($select_boys_connect)) {

                          



                    ?>
                  


                  <tr>
                    <td ><label><?php echo $row['lastname']." ,".$row['middlename']." ".$row['lastname'] ?></label></td>
                    <td></td>
                    <td > <input type="text" rel="<?php echo $row['student_id']; ?>"  class="numbers-only grades-val" id="student_grde_B[<?php echo $countB; ?>]" ></td>
                  </tr>

                  <?php $countB++; } ?>

                </table>
              </div>

              <div id="students-wrap-girl">
                 <div id="student-listG-header" class="header-name-wrap">
                      <h3>Girl Students List</h3>
                </div>
                <table id="table-Gstudents-list">

                  <?php 
                    
                    $countG=0;

                    $select_students_girls = "SELECT firstname,middlename,lastname,student_id
                                              FROM students 
                                              WHERE faculty_id='$advisor_id' 

                                              AND section_id = '$section_id'
                                              AND gender='female' ORDER BY lastname ASC ";

                      $select_girls_connect = mysql_query($select_students_girls) or die(mysql_error());

                        while($row = mysql_fetch_assoc($select_girls_connect)) {

                         
                  ?>

                  <tr>
                    <td ><label><?php echo $row['lastname']." ,".$row['middlename']." ".$row['lastname'] ?></label></td>
                    <td></td>
                    <td > <input type="text" rel="<?php echo $row['student_id']; ?>" class="numbers-only grades-val" id="student_grde_G[<?php echo $countG; ?>]" ></td>
                  </tr>

                  <?php  $countG++; } ?>

                </table>
              </div>

        </div>  
        <div id="content-student-list-footer-wrap">
                
                <input type="hidden" id="year_grade_students" value="<?php echo $year_grade; ?>" >
                <input type="hidden" id="assign-handler-id" value="" >
                <input type="hidden" id="section-id" value="<?php echo $section_id; ?>" >
                <input type="hidden" id="advisor-id" value="<?php echo $advisor_id; ?>" >
    
                

                 <input type="button" id="view_pdf" class="button" value="View PDF">

                 <input type="button" id="send-deped" class="button" value="Send To Deped">

                 <input type="button" id="auth-grds" class="button" value="Authenticate Grades">


                
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

        var subjct_id;
        var year_grade_level;
        var sbjct_handler_id;
        var section_id;
       



            var advisory_year_level = $('#year_grade_students').val();

            function check_authen_grades()
            {

               section_id = $('#section-id').val();

               $.ajax({
                        type:'POST',
                        url:'grades.php',
                   dataType:'json',
                       data:{'swtch_numbr':'14','sec_id':section_id},
                    success:function (data){

                          if(data.authen == '1')
                          {

                             $('#auth-grds').unbind('click');
                             
                            $('#auth-grds').addClass("inactiveButton");

                            $('#authenticity-notice').html("This Grades are Authentic").addClass('authentic');

                          }

                          else if(data.authen == '2'){

                            $('#auth-grds').bind('click');
                             
                            $('#auth-grds').removeClass("inactiveButton");

                            $('#authenticity-notice').html("This Grades are Not Authentic").addClass('not-authentic');

                          }

                          else{

                            $('#auth-grds').bind('click');
                             
                            $('#auth-grds').removeClass("inactiveButton");

                             $('#authenticity-notice').html("This Grades are For Authenticaion ").addClass('to-authentic');

                          }

                      
                        }

                    });


            } 


             check_authen_grades();


             $('#auth-grds').click(function (){


                  section_id = $('#section-id').val();

                   $.ajax({
                              type:'POST',
                              url:'grades.php',
                         dataType:'json',
                             data:{'swtch_numbr':'13','sec_id':section_id},
                          success:function (data){

                                if(data.status)
                                {

                                  alert("The Grades are authenticated");

                                  check_authen_grades();

                                }

                            
                              }

                          });


             });



             $.ajax({
                        type:'POST',
                        url:'add_subject.php',
                   dataType:'json',
                       data:{'func_numbr':'9','year_level':advisory_year_level},
                    success:function (data){

                      $.each(data, function(i, item) {

                       html = "<option value="+data[i].subj_id+">"+data[i].subj_name+"</option>";
                             $('#subjects-list').append(html);

                           });
                             $('#subjects-list').trigger('change');
                        }

                    });

             





             $('#send-deped').click(function (){

              section_id = $('#section-id').val();

                $.ajax({
                        type:'POST',
                        url:'grades.php',
                   dataType:'json',
                       data:{'swtch_numbr':'7','section_id':section_id},
                    success:function (data){


                          if(data.success == "1"){
                            alert("Informations was successfully sent");
                            check_grades_deped_archives();
                          }
                          else{
                            alert("There was a problem");
                          }
                        
                      }

                    });

             });


            

             function check_grades_archive_status (){

                  section_id = $('#section-id').val();


                        $.ajax({

                              type:'POST',
                              url:'grades.php',
                              dataType:'json',
                              data:{'swtch_numbr':'6','section_id':section_id,},
                              success:function (data){

                                    if(data.status == "complete"){
                                      $('#send-deped').bind('click');
                                      $('#send-deped').removeClass("inactiveButton");

                                    } 
                                    else {
                                      $('#send-deped').unbind('click');
                                      $('#send-deped').addClass("inactiveButton");
                                    }


                                }
                                
                              
                          });
              }

       

            $('#save_grade_button').click(function (){

              var ajax_request;

              if(ajax_request){

                       alert("ajax_request.abort()");
                      }

                      else{

                              var B_grade = [];
                              var G_grade = [];


                         $.each($("input[id^='student_grde_B']"), function(i, item) {

                           var grade_B =  $(item).val();

                           var stud_id_B = $(item).attr('rel');

                           B_grade.push({"studnt_B_id":stud_id_B,"studnt_grade_B":grade_B});

                               });

                            $.each($("input[id^='student_grde_G']"), function(i, item) {

                                 var grade_G =  $(item).val();

                                 var stud_id_G = $(item).attr('rel');
                                 
                                   G_grade.push({"studnt_G_id":stud_id_G,"studnt_grade_G":grade_G});
                               });

                               subjct_id =  $('#subjects-list').val();
                                year_grade_level  = $('#year_grade_lvl').val();
                                sbjct_handler_id = $('#assign-handler-id').val();
                                section_id = $('#section-id').val();
                            ajax_request  = $.ajax({

                                          type:'POST',
                                            url:'grades.php',
                                            dataType:'json',
                                            data:{'swtch_numbr':'1','section_id':section_id,'subject_id':subjct_id,'year_level':year_grade_level,'subject_handler_id':sbjct_handler_id,'student_grades_boy':B_grade,'student_grades_girl':G_grade},
                                            success:function (data){

                                              if(data.error){

                                                alert("Grades didnt save");
                                                
                                              }
                                              else{

                                                alert("Grades are saved");
                                                $('#save_grade_button').hide();
                                                $('#edit_grade_button').show();
                                                check_grades_archive_status();

                                               

                                              }
                                              
                                            }
                                });


                      }


                  




                    });

          //this function will retrieve the grades if there is already grades saved when you check on the DB

                function retrieve_grades(){
                            $('#table-Bstudents-list').html("");
                            $('#table-Gstudents-list').html("");

                           var subject_id = $('#subjects-list').val();

                           advisor_id =$('#advisor-id').val();

                            
                     $.ajax({

                              type:'POST',
                              url:'grades.php',
                              dataType:'json',
                              data:{'swtch_numbr':'5','subject_id':subject_id,'advisor_id':advisor_id},
                              success:function (data){
                              var  boys = data.boys;
                              var  girls = data.girls
                                
                                $.each(girls, function(i, item) {

                                 

                                   html="<tr><td><label>"+girls[i].lname_g+" ,"+girls[i].fname_g+" "+girls[i].mname_g+"</laber></td><td></td>";   

                                   html +=  "<td><input type='text' rel="+girls[i].studnt_id_g+" class='numbers-only grades-val' value="+girls[i].grade_g+" id='student_grde_G["+i+"]' ></td></tr>";

                                         $('#table-Gstudents-list').append(html);

                                   });

                               $.each(boys, function(i, item) {

                                  html="<tr><td><label>"+boys[i].lname_b+" ,"+boys[i].fname_b+" "+boys[i].mname_b+"</label></td><td></td>";   

                                  html +=  "<td><input type='text' rel="+boys[i].studnt_id_b+" class='numbers-only grades-val' value="+boys[i].grade_b+" id='student_grde_B["+i+"]' ></td></tr>";

                                        $('#table-Bstudents-list').append(html);

                                      });
                                
                                
                              }
                          });

                       

                }


            

                  

            $('#subjects-list').on("change",function(){

               $('#assign-handler-id').val("");



                subjct_id = $('#subjects-list').val();

                advisor_id =$('#advisor-id').val();
                  

                  $.ajax({
                              type:'POST',
                              url:'add_subject.php',
                         dataType:'json',
                             data:{'func_numbr':'24','subject_id':subjct_id,'advisor_id':advisor_id},
                          success:function (data){
                             

                             html = data.subject_handler_id;
                              

                              $('#assign-handler-id').val(html);

                                   
                                 if(html == "0"){

                                  alert("Oooops! there is no assigned teacher in this subjects\nYou will be redirected to Orginize Subject to assign teacher in this subject");

                                   

                                 }
                              }

                          });

                  $.ajax({

                              type:'POST',
                              url:'add_subject.php',
                              dataType:'json',
                              data:{'func_numbr':'25','subject_id':subjct_id,'advisor_id':advisor_id},
                              success:function (data){

                                if(data.saved){

                                  

                                  $('#save_grade_button').hide();
                                  $('#edit_grade_button').show();
                                   retrieve_grades();

                                }
                                else{
                                  $('.grades-val').val("");
                                  $('#save_grade_button').show();
                                  $('#edit_grade_button').hide();


                                }
                                
                              }
                          });



                   });
            
            $('#edit_grade_button').click(function (){

                var B_grade = [];
                  var G_grade = [];


                   $.each($("input[id^='student_grde_B']"), function(i, item) {

                     var grade_B =  $(item).val();

                     var stud_id_B = $(item).attr('rel');

                     B_grade.push({"studnt_B_id":stud_id_B,"studnt_grade_B":grade_B});

                         });

                      $.each($("input[id^='student_grde_G']"), function(i, item) {

                           var grade_G =  $(item).val();

                           var stud_id_G = $(item).attr('rel');
                           
                             G_grade.push({"studnt_G_id":stud_id_G,"studnt_grade_G":grade_G});
                         });

                         subjct_id =  $('#subjects-list').val();
                          year_grade_level  = $('#year_grade_lvl').val();
                          sbjct_handler_id = $('#assign-handler-id').val();


                           $.ajax({

                              type:'POST',
                              url:'grades.php',
                              dataType:'json',
                              data:{'swtch_numbr':'3','subject_id':subjct_id,'year_level':year_grade_level,'subject_handler_id':sbjct_handler_id,'student_grades_boy':B_grade,'student_grades_girl':G_grade},
                              success:function (data){

                                
                                  check_grades_archive_status();
                                 

                                
                                
                              }
                          });

            });

       $('#view_pdf').click(function(){
                  var year_grade = $('#year_grade_students').val();
                  

                  if(year_grade == "firstyear" || year_grade == "secondyear" || year_grade == "thirdyear" || year_grade == "fourthyear"){

                    $(location).attr("href","tcpdf/New Form18A.php?sec_id="+<?php echo $section_id; ?>+"&adviser_id="+<?php echo $advisor_id; ?>+"&level="+year_grade+"");
                  } else if (year_grade == "grade1" || year_grade == "grade2" || year_grade == "grade3"){

                    $(location).attr("href","tcpdf/New Form18E1.php?sec_id="+<?php echo $section_id; ?>+"&adviser_id="+<?php echo $advisor_id; ?>+"&level="+year_grade+"");
                  } else if (year_grade == "grade4" || year_grade == "grade5" || year_grade == "grade6"){

                    $(location).attr("href","tcpdf/New Form18E2.php?sec_id="+<?php echo $section_id; ?>+"&adviser_id="+<?php echo $advisor_id; ?>+"&level="+year_grade+"");
                  }
          });

        var section_id;

      function pdf(){  

              var advisor_id = $('#advisor-id').val();
                  section_id = $('#section-id').val();
              var year_grade = $('#year_grade_students').val(); 
       $.ajax({

                              type:'POST',
                              url:'teacher_class_get.php',
                              dataType:'json',
                              data:{'func_num':'7','faculty_id':advisor_id,'section_id':section_id, 'year_grade':year_grade},
                              success:function (data){

                                if(data.status == "1"){
                                  $('#view_pdf').bind('click');
                                  $('#view_pdf').removeClass("inactiveButton");
                                } else {
                                  $('#view_pdf').unbind('click');
                                  $('#view_pdf').addClass("inactiveButton");
                                }


                                }
                                
                              
                          });

     }

     function check_grades_deped_archives(){

                section_id = $('#section-id').val();

                 $.ajax({

                              type:'POST',
                              url:'grades.php',
                              dataType:'json',
                              data:{'swtch_numbr':'8','section_id':section_id},
                              success:function (data){

                                    if(data.checked == "1"){
                                      $('#send-deped').unbind('click').addClass("inactiveButton");

                                    } 
                                    else {
                                      
                                      $('#send-deped').bind('click').removeClass("inactiveButton");
                                    }


                                }
                                
                              
                          });


             }

      

     

     

     pdf();
     check_grades_archive_status();
    check_grades_deped_archives();
                    
               
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

