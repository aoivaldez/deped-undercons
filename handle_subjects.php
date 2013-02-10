<!doctype html>

<?php
  session_start();
  $log_session = $_SESSION['accnt_typ_fac'];

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
  <link rel="stylesheet" href="css/style-teacher-class.css">
  <link rel="stylesheet" href="css/style-handle-subject.css">
  
  
 
 
</head>

<body>
  <div id="wrap-body">

 
    
  <?php

    require_once('header_teacher.php');

  ?>
  
    <div role="main" id="main">

       <div id="wrap-subjects-menu">  
        <ul class="tabs">
            <li><a href="#tab1">Acquire Subjects</a></li>
            <li><a href="#tab2">Organize Subjects</a></li>        
        </ul>           
      </div>

      <div id="tab-container">
         <div id="tab1" class="tab-content">

              <div id="subjects-wrap">
                    <label>Year Level:</label>
                    <select id="subject-level" name="subject_level">
                            <option value="grade1">Grade 1</option>
                            <option value="grade2">Grade 2</option>
                            <option value="grade3">Grade 3</option>
                            <option value="grade4">Grade 4</option>
                            <option value="grade5">Grade 5</option>
                            <option value="grade6">Grade 6</option>
                            <option value="firstyear">First year</option>
                            <option value="secondyear">Second year</option>
                            <option value="thirdyear">Third year</option>
                            <option value="fourthyear">Fourth year</option>
                    </select>

                    

                    <div id="advisory-header" class="header-name-wrap">
                      <h3>Subjects</h3>
                    </div>
                    

                    <div id="subjects-list-wrap"> 
                          <table id="table-subject-header" class="table-header-all">
                              <tr>
                                <td style="width:15%;">
                                  <label>Select</label>
                                </td>
                                <td style="width:50%;">
                                  <label>Subject Name</label>
                                </td>
                                <td style="width:35%">
                                  <label>Units</label>
                                </td>
                              </tr>
                          </table>    
                         <div id="subjects-list-content"  class="to_scroll"  >
                       
                       <table id="table-subject-content" class="table-content-all">
                           
                       </table>
                    </div>

                      <div id="view-form-wrap">

                        <input type="button" name="get_subject" id="get-subject-button" class="button" value="Get Subject">

                      </div>
                  </div>
                      
                </div>

          <div id="subjcthandle-wrap">
              
              <div id="advisory-header" class="header-name-wrap">
                <h3>Subjects You Handle</h3>
              </div>
              

              <div id="subjecthandle-list-wrap"> 
                    <table id="table-subject-header" class="table-header-all">
                        <tr>
                          <td style="width:15%;">
                            <label>Select</label>
                          </td>
                          <td style="width:50%;">
                            <label>Subject Name</label>
                          </td>
                          
                          <td style="width:10.5%">
                            <label>Units</label>
                          </td>
                          <td style="width:20.5%">
                            <label>level</label>
                          </td>
                        </tr>
                    </table>
                   <div id="subject-list-content"  class="to_scroll" >                 
                      <table id="my-subjects-table" class="table-content-all">

                        </table>
                  </div>

                
            </div>
                <div id="view-form-wrap">

                  <input type="button" id="widthraw-subject" class="button" value="Widthdraw Subject">

                </div>
          </div>
          
          
        
        </div>

        <div id="tab2" class="tab-content">

          

                 <div id="teaher-handle-wrap">
                    
                        <div id="teacher-handler-header" class="header-name-wrap">
                          <h3>Faculty Incharge</h3>
                        </div>

                        <div id="wrap-org-subjcts">

           
                                <label>Year Level Advisory: </label>
                                <select id="org-subject-advisory-level" name="subject_level">
                                        
                                </select>
                            

                             
                                <label>Subjects: </label>
                                <select id="subjects-list">
                              
                                </select>

                                <input type="button" id="search-subject-handlr-button" class="button" value="Search">
                          </div>

                         <div id="teacher-handler-list-wrap"> 
                                  <table id="table-teacher-handler-header" class="table-header-all">
                                      <tr>
                                        <td style="width:15%;">
                                          <label>Select</label>
                                        </td>
                                        <td style="width:40%;">
                                          <label>Subject Name</label>
                                        </td>
                                        <td style="width:45%;">
                                          <label>Assigned</label>
                                        </td>
                                        
                                      </tr>
                                  </table>
                                 <div id="teacher-handler-list-content"  class="to_scroll" >                 
                                    <table id="teacher-handler-table" class="table-content-all">
                                            
                                      </table>
                                </div>

                              
                          </div>

                          <div id="wrap-org-section">

           
                                <label>Section: </label>
                                <select id="section-list" >
                                        
                                </select>
                            
                          </div>

                          <div id="view-form-wrap">

                            <input type="button" id="assign-teacher-subject" class="button" value="Assign">

                          </div>
                </div>

                  <div id="assigned-faculty-subject-wrap">
                    
                        <div id="assigned-faculty-header" class="header-name-wrap">
                          <h3>Assigned Faculties In Subjects</h3>
                        </div>

                        <div id="wrap-check-subjcts">

           
                                <label>Year Level Advisory: </label>
                                <select id="advisory-level-options" name="subject_level">
                                        
                                </select>
  
                        </div>

                         <div id="assigned-faculty-list-wrap"> 
                                  <table id="table-assigned-handler-header" class="table-header-all">
                                      <tr>
                                        <td style="width:15%;">
                                          <label>Select</label>
                                        </td>
                                        <td style="width:20%;">
                                          <label>Subject Name</label>
                                        </td>
                                        <td style="width:45%;">
                                          <label>Assigned</label>
                                        </td>
                                        <td style="width:20%;">
                                          <label>Section Name</label>
                                        </td>
                                        
                                      </tr>
                                  </table>
                                 <div id="assigned-faculty-list-content"  class="to_scroll" >                 
                                    <table id="assigned-faculty-table" class="table-content-all">
                                            
                                      </table>
                                </div>

                              
                          </div>

                          <div id="view-form-wrap">

                            

                            <input type="button" id="remove-assigned" class="button" value="Remove">

                          </div>
                </div>
                
          </div>

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



    $('#subjects-list').val("");
      
    var html;
    var ajax;

    $('#subject-level').live("change",function(){

       var level = $('#subject-level').val();

                $.ajax({
                        type:'POST',
                        url:'add_subject.php',
                   dataType:'json',
                       data:{'func_numbr':'9','year_level':level},
                  beforeSend: function(data){

                            $('#table-subject-content').html('');
              
                          },
                    success:function (data){
                       $.each(data, function(i, item) {
                            html = "<tr>";

                                  html += "<td style='width:15%;'><input type='radio' name='subject' id='subject["+i+"]' value='"+data[i].subj_id+"'></td>";
                                  html += "<td style='width:50%;'><label for='subject["+i+"]'> "+data[i].subj_name+"</label> </td> ";
                                  html += "<td style='width:35%;'><label for='subject["+i+"]'> "+data[i].subj_units+"</label> </td> ";
                                  html += "</tr>";
                         $('#table-subject-content').append(html);

                       });
                      }

                    });


                


    });

    $('#subject-level').trigger("change");


      $('#get-subject-button').click(function(){
          
        if($('input[name=subject]').is(':checked')){

              var val_rad = $('input[name=subject]:checked').val();

              

              $('#my-subjects-table').html("");

               $.ajax({
                        type:'POST',
                        url:'add_subject.php',
                   dataType:'json',
                       data:{'func_numbr':'10','subject_id':val_rad,},
                    success:function (data){

                      teacher_subjects();

                       if(data.error){
                          alert("You're already handling this subject")
                       }
                    }

                    });
            }

      });

      $('#remove-assigned').click(function(){

          if($('input[name=my_assigned_faculty]').is(':checked')){

              var val_rad = $('input[name=my_assigned_faculty]:checked').val();

              

              $('#assigned-faculty-table').html("");

               $.ajax({
                        type:'POST',
                        url:'add_subject.php',
                   dataType:'json',
                       data:{'func_numbr':'21','assigned_handler_id':val_rad},
                    success:function (data){

                       $('#advisory-level-options').trigger("change");
                      
                    }

                    });
            }
            else{


              alert("Please Choose a Subject");
            }


      });

      $('#widthraw-subject').click(function(){
         if($('input[name=subject_handled]').is(':checked')){

              var val_rad = $('input[name=subject_handled]:checked').val();

              
               $('#my-subjects-table').html("");

              $.ajax({
                             type:'POST',
                             url:'add_subject.php',
                        dataType:'json',
                           data:{'func_numbr':'12','subjctHandle_id':val_rad},
                        success:function (data){

                         teacher_subjects();

                           
                       }

                     });
            }

      });

      function get_my_advisory(){

         $.ajax({                
                url:'func_students.php',
                type:'POST',
                dataType:'json',
                data:{'func_num':'1'},
                success: function (data){

                   $.each(data, function(i, item) {
                       var options = "<option value="+data[i].sec_level+">"+data[i].sec_level+"</option>";

                         $('#org-subject-advisory-level').append(options);

                         $('#advisory-level-options').append(options);
                       }); 

                   $('#org-subject-advisory-level').trigger("change");

                   $('#advisory-level-options').trigger("change");
              }
        });
      }
    get_my_advisory();


    $('#search-subject-handlr-button').on('click',function (){

       var subject_id = $('#subjects-list').val();
       
      $('#teacher-handler-table').html("");


           if(ajax){

            ajax.abort();
          }

           ajax = $.ajax({                
                        url:'add_subject.php',
                        type:'POST',
                        dataType:'json',
                        data:{'func_numbr':'18','subject_id':subject_id},
                        success: function (data){

                           $.each(data, function(i, item) {
                              html = "<tr>";

                                          html += "<td style='width:15%;'><input type='radio' name='subject_handler' id='subject["+i+"]' value='"+data[i].faculty_id+"'></td>";
                                          html += "<td style='width:40%;'><label for='subject["+i+"]'  >"+data[i].subject_name+" </label> </td> ";
                                          html += "<td style='width:45%;'><label for='subject["+i+"]' rel="+data[i].subject_id+"> "+data[i].faculty_lname+","+data[i].faculty_fname+" "+data[i].faculty_lname+"</label> </td> ";
                                          html += "</tr>";


                                    $('#teacher-handler-table').append(html);      
                               }); 

                          }
                    });


    });



    

      $('#assign-teacher-subject').click(function(){

          if($('input[name=subject_handler]').is(':checked')){

           var subjct_handler_id = $('input[name=subject_handler]:checked').val();

           var subject_id =  $('input[name=subject_handler]:checked').parent().parent().find('td:last').children().attr('rel');
          
            var section_id = $('#section-list').val();
           

                 $.ajax({                
                url:'add_subject.php',
                type:'POST',
                dataType:'json',
                data:{'func_numbr':'19','subject_id':subject_id,'subject_handler_id':subjct_handler_id,'section_id':section_id},
                success: function (data){

                              $('#advisory-level-options').trigger("change");

                            }
                    });

           


          }
          else{


            alert("Please choose Assigned Faculty for the subject");
          }

        
      });

      $('#advisory-level-options').on("change",function(){

          var advisory_level = $('#advisory-level-options').val();

            $('#assigned-faculty-table').html("");
            
          $.ajax({                
                url:'add_subject.php',
                type:'POST',
                dataType:'json',
                data:{'func_numbr':'20','year_level':advisory_level},
                success: function (data){

                   $.each(data, function(i, item) {
                      html = "<tr>";

                                  html += "<td style='width:15%;'><input type='radio' name='my_assigned_faculty' id='subject["+i+"]' value='"+data[i].assigned_handler+"'></td>";
                                  html += "<td style='width:20%;'><label for='subject["+i+"]'  >"+data[i].subject_name+" </label> </td> ";
                                  html += "<td style='width:45%;'><label for='subject["+i+"]' rel="+data[i].subject_id+"> "+data[i].faculty_lname+","+data[i].faculty_fname+" "+data[i].faculty_lname+"</label> </td> ";
                                  html += "<td style='width:20%;'><label for='subject["+i+"]'  >"+data[i].sec_name+" </label> </td> ";
                                  html += "</tr>";


                            $('#assigned-faculty-table').append(html);      
                       }); 

                  }
            });
        });

        
    

      $('#org-subject-advisory-level').on("change", function(){

        var advisory_year_level = $('#org-subject-advisory-level').val();

        $.ajax({
                        type:'POST',
                        url:'add_subject.php',
                   dataType:'json',
                       data:{'func_numbr':'9','year_level':advisory_year_level},
                    success:function (data){
                       $('#subjects-list').html("");



                      $.each(data, function(i, item) {

                       html = "<option value="+data[i].subj_id+">"+data[i].subj_name+"</option>";



                         $('#subjects-list').append(html);
                       });
                    }

                    });

        $.ajax({
                         type:'POST',
                         url:'func_students.php',
                    dataType:'json',
                        data:{'func_num':'2','year_level':advisory_year_level},
                   beforeSend: function(data){

                             $('#section-list').html('');
              
                           },
                     success:function (data){
                        $.each(data, function(i, item) {
                           

                                                         
                          $('#section-list').append("<option value='"+data[i].sec_id+"'>"+data[i].sec_name+"</option>");

                        });
                       }

                     });



      });

      



      
      function teacher_subjects(){


               $.ajax({
                        type:'POST',
                        url:'add_subject.php',
                   dataType:'json',
                       data:{'func_numbr':'11'},
                    success:function (data){
                      $.each(data, function(i, item) {
                       html = "<tr>";

                                  html += "<td style='width:15%;'><input type='radio' name='subject_handled' id='subject-handled["+i+"]' value='"+data[i].subjthandle_id+"'></td>";
                                  html += "<td style='width:50%;'><label for='subject-handled["+i+"]'> "+data[i].subject_name+"</label> </td> ";
                                  
                                  html += "<td style='width:10.5%;'><label for='subject-handled["+i+"]'> "+data[i].subject_units+"</label> </td> ";
                                  html += "<td style='width:20.5%;'><label for='subject-handled["+i+"]'> "+data[i].year_level+"</label> </td> ";
                                  html += "</tr>";

                         $('#my-subjects-table').append(html);
                       });
                    }

                    });
             }



     teacher_subjects();


    
     
            

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

