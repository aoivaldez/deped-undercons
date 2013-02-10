<!doctype html>

<?php
  session_start();

 

  $log_session = $_SESSION['accnt_typ'];
  $sch_id_reg = $_SESSION['school_id'];
  if(!isset($log_session) || empty($log_session) ){

    die("dsafaff");
     header('location:index.php');
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
  <link rel="stylesheet" href="css/style-manage-registrar.css">
 
  
  
  
 
 
</head>

<body>
  <div id="wrap-body">

  
    <?php

      require_once('header_registrar.php');

    ?>

  
    <div role="main" id="main">



      <div id="wrap-manage-menu">  
        <ul class="tabs">
            <li><a href="#tab1">Users</a></li>
            <li><a href="#tab2">Class sections</a></li>
            <li><a href="#tab3">Announcements</a></li>        
        </ul>           
      </div>  

      <div id="tab-container">
         <div id="tab1" class="tab-content">
            <div class="wrap-search-nav">
              <form action="manage_deped.php" method="post">
              <ul class="search-by-ul"> 
                <li>
                  <label>Faculty Name:</label>
                  <input type="text" name="sch_faculty_name" id="sch-faculty-name" class="input" placeholder="* = To Search All Faculty">
                </li>
                <li>
                  <input type="button" id="btn_search_faculty" name="search" class="button" value="Search">  
                </li>
              </ul>  
            </form>
          </div>
          <div class="search-wrap">
                <div class="header-name-wrap">
                  <h3>Search</h3>
                </div>

                <div class="search-hits">
                  <div id="search-content">

                    
                    <table id="tbl_faculty_details"  class="table-header-all">
                     
                      <tr>
                          <th style="width:20%;" align="center">Select</th>
                          <th style="width:30%;" align="center">Faculty Name</th>
                          <th style="width:15%;" align="center">Section</th>
                          <th style="width:15%;" align="center">Level</th>
                          <th style="width:20%;" align="center">Status</th>
                      </tr>                  
                    </table>

                    <table id="tbl_faculty_result"  class="table-content-all">
                    </table>

                  </div>  
                  
                </div>

                

                <input type="button" name="add_faculty" rel="#addfaculty-window" class="button modal" value="Add Faculties">

                <input type="button" name="deactivate_faculty" id="deactivate-faculty" class="button" value="Deactivate">
                <input type="button" name="activate_faculty" id="activate-faculty" class="button" value="Activate">
                
             </div>  

          </div>




          <div id="tab2" class="tab-content">
                  <div id="class-wrap">
                  <div id="advisory-header" class="header-name-wrap">
                    <h3>Class Advisory</h3>
                  </div>

                  <div id="class-list-wrap"> 

                        <table id="table-section-list-header" class="table-header-all">
                        <tr>
                          <td style="width:10%;">
                            <label>Select</label>
                          </td>
                          <td style="width:15%;">
                            <label>Year</label>
                          </td>
                          <td style="width:25%;">
                            <label>Section</label>
                          </td>
                            <td style="width:30%;">
                            <label>Status</label>
                          </td>
                           <td style="width:20%;">
                            <label>level</label>
                          </td>
                        </tr> 
                     </table>

                      <div id="class-list-content"  class="to_scroll"  >
                         <table id="table-section-list-content" class="table-content-all">
                         </table>
                      </div>

                    <div id="view-form-wrap">
                     

                       <input type="button" name="add_section" rel="#createsection-window" class="button modal" value="Add Section">

                       <input type="button" name="delete_section" id="delete-section" class="button"  value="Delete Section">
                       
                    </div>
                </div>
                    
              </div>
        
             
          </div>

          <div id="tab3" class="tab-content">            
            <div id="announcemnts-wrap">
                <div id="announcements-header" class="header-name-wrap">
                  <h3>Announcements:</h3>
                </div>

                <div id="announcements"  class="height-scroll">
                  <div id="anncmnts-content" class="to_scroll" >

                    <ul id="announcement-list">
                      

                    </ul>

                  </div>  
                  
                </div>



                <input type="button" name="add_anncemnt" rel="#announcement-window" class="button modal" value="Add Announcement">

                
             </div>
          </div>

      </div>
         
    </div>

    <div class="boxes">

      <div id="announcement-window" class="window">
          <div class="modal-header">
              <h3>Add Announcement</h3>
          </div>        
          <span class="close-button-wrap">
            <a href="#" class="close close-link"/><div class="close-button">Close it</div></a>
          </span>
          <div id="add-anncemnt-wrap">
            
            <table>
              <tr>
                <td>
                  <label>Title:</label>
                </td>
                <td>
                  <input type="text" name="anncmnt_title" id="anncmnt-title" style="width:300px;" class="input">
                </td>  
              </tr>
               <tr>
                <td>
                  <label>Details:</label>
                </td>
                <td>
                </td>  
              </tr>

              <tr >
                <td>
                  
                </td>
                <td >
                  <textarea  name="anncmnt_message" id="anncmnt-message" style="width:300px;height:150px;" class="text-area-des"></textarea>
                </td>  
              </tr>

            </table>
            <input type="submit" name="anncmnt_add" id="anncmnt-add" class="button" value="Add">
          
          </div>         
      </div>
     <div id="mask"></div>
    </div>
    <div class="boxes">     
      <div id="addfaculty-window" class="window">
          <div class="modal-header">
              <h3>Add Faculty</h3>
          </div>

          <span class="close-button-wrap">
            <a href="#" class="close close-link"/><div class="close-button">Close it</div></a>
          </span>
          <div id="addfaculty-wrap">
            <form action="register_get.php" method="post">
            <table>
              <tr>
                <td>
                  <label>Last Name:</label>
                </td>
                 <td>
                  <input type="text" name="faclty_lname" style="width:300px;" class="input letters-only">
                </td>
              </tr>
              <tr>
                <td>
                  <label>First Name:</label>
                </td>
                 <td>
                  <input type="text" name="faclty_fname" style="width:300px;" class="input letters-only">
                </td>
              </tr>
              <tr>
                <td>
                  <label>Middle Name:</label>
                </td>
                 <td>
                  <input type="text" name="faclty_mname" style="width:300px;" class="input letters-only">
                </td>
              </tr>

              <tr>
                <td>
                  <label>Gender:</label>
                </td>
                <td>
                  <input type="radio" name="faclty_gender" value="male"> Male
                  <input type="radio" name="faclty_gender" value="female"> Female
                </td>                   
              </tr>

              <tr>
                <td>
                  <label>Email-add</label>
                </td>
                <td>
                  <input type="text" name="faclty_eadd" style="width:300px;" class="input">
                </td>  
              </tr>

              
            </table>

            <input type="submit" name="add_faculty" class="button" value="Add">
          </form>
          </div>         
      </div>

      <div id="mask"></div>
    </div>

    <div class="boxes">     
      <div id="createsection-window" class="window">
          <div class="modal-header">
              <h3>Create Section</h3>
          </div>

          <span class="close-button-wrap">
            <a href="#" class="close close-link"/><div class="close-button">Close it</div></a>
          </span>
          <div id="addsection-wrap">
            <div id="section-info-wrap">
                <table>
                  <tr>
                    <td>
                      <label>Department</label>
                    </td>
                    
                      <td>
                          <select name="class_department" id="class_department_addsection" class="class-dept-add-sec">
                            <option value="elementary">Elementary</option>
                            <option value="highschool">HighSchool</option>                 
                          </select>
                      </td>
                  </tr>
                  <tr>
                    <td>
                      <label>Year/Grade</label>
                    </td>
                    <td>
                      <select name="new_sec_year" id="addsection_advse_year">
                        <option value="firstyear">1st Year</option>
                        <option value="secondyear">2nd Year</option>
                        <option value="thirdyear">3rd Year</option>
                        <option value="fourthyear">4th Year</option>                    
                      </select>

                      <select name="new_sec_grade" id="addsection_advse_grade">
                        <option value="grade1">Grade 1</option>
                        <option value="grade2">Grade 2</option>
                        <option value="grade3">Grade 3</option>
                        <option value="grade4">Grade 4</option>
                        <option value="grade5">Grade 5</option>
                        <option value="grade6">Grade 6</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label>Section</label>
                    </td>
                    <td>
                      <input type="text"id="section_name" name="section_name" class="input">
                    </td>
                  </tr>

                                
                </table>
            </div>
            <div class="modal-footer">
              <input type="submit" id="add-section" name="add_section" class="button" value="Create">
            </div>
          </div>         
      </div>

      <div id="mask"></div>
    </div>

    <footer>
    </footer>
  </div>  

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>

  <script src="js/jscript-global.js"></script>
  <script type="text/javascript" src="js/jquery-ui.js"></script>        
  <script type="text/javascript" src="js/slimScroll.min.js"></script>

  <script>
    $(document).ready(function(){
      var elem_height = $('.search-hits').height();  

        var height = $(this).height();

        var ajax;

        $('#search-content').slimScroll({
          height:elem_height,
          start: 'top',
          wheelStep: 10,
          railVisible: true,
        }).css({ paddingRight: '10px' });


        /**************add section department selection*******************/

        $('#class_department_addsection').live('change',function(){
          
          

          if($(this).val() == "elementary"){

            

             $('#addsection_advse_grade').show();
             $('#addsection_advse_year').hide();

          }
          else{
            

             $('#addsection_advse_year').show();
             $('#addsection_advse_grade').hide();
          }
        });  

        

        $('#class_department_addsection').trigger("change");
       


        /********************end *********************/

        /*****************add faculty department selection**************************/

        $('#faclty-department').on('change',function(){
          

          if($(this).val() == "1"){

            $('#add-fac-dept-grade').show();
            $('#add-fac-dept-year').hide();

          }
          else{
            

            $('#add-fac-dept-year').show();
            $('#add-fac-dept-grade').hide();
          }
        });  

        
        $('#faclty-department').trigger("change");


        /*******************end***************************/
        var availability;

        function get_sections(){
         $.ajax({                
        url: 'teacher_class_get.php',
        dataType: 'json',
        type: 'POST', //u missed this line.
        data:{'func_num':'5'},
        success: function (data){
          $.each(data, function(i, item) {

            if(data[i].sec_status == '1'){

                availability = "Unavailable";
            }
            else{

                 availability = "Available";
            } 

            html = "<tr>";

                                  html += "<td style='width:10%;'><input type='radio' name='section_id' rel='"+data[i].advisory_id+"' value='"+data[i].sec_id+"'></td>";
                                  html += "<td style='width:15%;'><label>"+data[i].sec_lvl+"</label></td>";
                                  html += "<td style='width:25%;'><label>"+data[i].sec_name+"</label></td>";
                                  html += "<td style='width:30%;'><label>"+availability+"</label></td>";                                 
                                  html += "<td style='width:20%;'>"+data[i].sec_dept+"</td>";
                                  html += "</tr>";




           $('#table-section-list-content').append(html);
           });
 
               }
          });

       }


         var rad_but;
          var rad_val;
          

         $('#delete-section').click(function(){


          if($('input[name="section_id"]').is(':checked')){


           rad_but = $('input[name="section_id"]:checked');

           rad_val = $(rad_but).val();

          

           $.ajax({
                type: 'POST',
                url: 'teacher_class_get.php',
                dataType: 'json',
                data:{'func_num':'2','sect_id':rad_val},
                beforeSend: function(data){

                   $('#table-section-list-content').html("");

                },
                success: function (data){

                    get_sections();
                    alert("Section was deleted successfully");
                    
                 }
            });
         }

         else{
              alert("Please Select A Section");
         }


         });

        


        $('#add-section').click(function(){

          var  department = $('#class_department_addsection').val();
          var year_grade;

          // addsection_advse_year
          // addsection_advse_grade

          if($('#addsection_advse_year').is(":visible")){
          
           year_grade= $('#addsection_advse_year').val();

         }
         else{

          year_grade= $('#addsection_advse_grade').val();

         }


          var section_name =$('#section_name').val();


           $.ajax({
                type: 'POST',
                url: 'teacher_class_get.php',
                dataType: 'json',
                data:{'func_num':'4','department':department, 'year_grade':year_grade, 'section_name':section_name},
                 beforeSend:function(data){

                  $('#createsection-window').hide();
                  $('#mask').hide();
                  $('#class_department_addsection').val("elementary");
                  $('#addsection_advse_year').val("grade1");
                  $('#section_name').val("");
                  $('#table-section-list-content').html("");
                },

                success: function (data){
                    
                    get_sections();
                    alert(data);

                 }
            }).error(function(){
              alert("error");
            });

         });

         function get_announcement(){
         $.ajax({
                    type:'POST',
                    url:'announcement_func.php',
               dataType:'json',
                   data:{'swt_num':'2'},
                   
                success:function (data){
                  $.each(data, function(i, item) {
                   $('#announcement-list').append("<li><a href='announcement_window.php?announcement_id="+data[i].ann_id+"&school_id="+data[i].schl_id+"'>"+data[i].ann_title+"</a></li>");
                  });
 
               }
          });
       }

          /***add announcement registrar  ***/

         $('#anncmnt-add').click(function (){
           var title_anncmnt =  $('#anncmnt-title').val();
            var msg_anncmnt = $('#anncmnt-message').val();

            if( title_anncmnt != "" && msg_anncmnt != ""  ){
                $.ajax({
                    type:'POST',
                    url:'announcement_func.php',
               dataType:'json',
                   data:{'swt_num':'1','announcement_title':title_anncmnt,'announcement_message':msg_anncmnt},
                beforeSend: function(data){
                  $('#announcement-window').hide();
                  $('#mask').hide();
                  $('#anncmnt-title').val("");
                  $('#anncmnt-message').val("");
                  $('#announcement-list').html("");
                },

                success:function (data){

                  if(data.error == false){
                    get_announcement();
                    alert("Announcement successfully added");
                  }
                  else{
                    alert("Something went wrong");
                  }
                }

                });
            }
            else{

              alert("Please complete all fields");
            }

         });

         /*end add announcement script*/



        $('#btn_search_faculty').click(function(){

          var faculty_name = $('#sch-faculty-name').val();
          var sch_id = $('#SessionValue').val();


           if(ajax){

            ajax.abort();
          }

           ajax = $.ajax({
                          type: "post",
                          url: "registrar_manage_search_faculty.php",
                          dataType:'json',
                          cache:false,
                          data:{'switch_num':'1','faculty_name': faculty_name, 'sch_id': sch_id},

                          
                          beforeSend: function(data){

                            $('#tbl_faculty_result').html('');
                             

                          },

                          success: function(data){                
                            

                            $.each(data, function(i, item) {

                              html = "<tr>";

                                  html += "<td style='width:20%;'><input type='radio' name='faculty_id' id='faculty_id["+i+"]' value='"+data[i].faculty_id+"'></td>";
                                  html += "<td  style='width:30%;'>"+data[i].search_f_firstname+" "+data[i].search_f_lastname+"</td>";
                                  html += "<td style='width:15%;'>"+data[i].search_section+"</td>";
                                  html += "<td style='width:15%;'><label> "+data[i].section_level+"</label> </td> ";
                                  html += "<td align='center' style='width:20%;'>"+data[i].status+"</td>";
                                  html += "</tr>";
                              $('#tbl_faculty_result').append(html);



                              //++++

                            });
                          }

                }).error(function(){
                  alert('');
                });

        });


        

         $('#deactivate-faculty').click(function (){

            if($('input[name=faculty_id]').is(':checked')){

                var faculty_id = $('input[name=faculty_id]:checked').val();

                   $.ajax({
                      type:'POST',
                      url:'registrar_manage_search_faculty.php',
                 dataType:'json',
                     data:{'switch_num':'2','faculty_id':faculty_id},
                     
                  success:function (data){
                    
                    
                        if(data.result == "1"){

                          alert("The Faculty Acount Is Successfuly Disactivated");
                          $('#btn_search_faculty').trigger('click');
                        }
                        else{
                          alert("Deactivation Is Unsucessful");
                        }
                     }
                 });

                 }  
             else{

                    alert("Please Select A Faculty");

                  } 
         });


          $('#activate-faculty').click(function (){

            if($('input[name=faculty_id]').is(':checked')){

                var faculty_id = $('input[name=faculty_id]:checked').val();

                   $.ajax({
                      type:'POST',
                      url:'registrar_manage_search_faculty.php',
                 dataType:'json',
                     data:{'switch_num':'3','faculty_id':faculty_id},
                     
                  success:function (data){
                    
                    
                        if(data.result == "1"){

                          alert("The Faculty Acount Is Successfuly Activated");

                          $('#btn_search_faculty').trigger('click');
                        }
                        else{
                          alert("Activation Is Unsucessful");
                        }
                     }
                 });

                 }  
             else{

                    alert("Please Select A Faculty");

                  } 
         });

         

         get_sections();
         get_announcement();

    });


    

  </script>

  <script>

      

       

        

        


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

