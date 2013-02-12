<!doctype html>

<?php
  session_start();

 

  $log_session = $_SESSION['accnt_typ_admin'];

  $school_id = $_SESSION['school_id'];


  if(!isset($log_session) || empty($log_session)){

      die();
    
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
  <link rel="stylesheet" href="css/style-manage-deped.css">

 
 
</head>

<body>
  <div id="wrap-body">
    

    <?php

      require_once('header_superadmin.php');

    ?>
      <div role="main" id="main">



        <div id="wrap-manage-menu">  
          <ul class="tabs">
              <li><a href="#tab1">Users</a></li>
              <li><a href="#tab2">Curriculum</a></li>
              <li><a href="#tab3">Announcements</a></li>
              <li><a href="#tab4">Evaluation</a></li>          
          </ul>           
        </div>  

        <div id="tab-container">
            <div id="tab1" class="tab-content">
              <div class="wrap-search-nav">
                <form action="manage_deped.php" method="post">
                <ul class="search-by-ul"> 
                  <li>
                    <label>Filter by:</label>
                  </li>
                  <li>
                        <input type="radio" name="rb_filter" value="schools">Schools
                        <input type="radio" name="rb_filter" value="admin">Admin
                  </li>
                  <div id="school-search">
                      <li>
                        
                        <label>School:</label>
                        <input type="text" id="tb_school" name="srch_sch_name" class="input" >
                      </li>
                  </div>
                  <div id="admins-search">
                   <div id="search-admin">
                      <li>
                        <label>Admin Name:</label>
                        <input type="text" id="tb_admin" name="srch_sch_name" class="input" >
                      </li>
                    </div>
                  </div> 
                  <div id="search_btnschool">   
                  <li>
                    <input type="button" id="btn_searchschool" name="search" class="button" value="Search">  
                  </li>
                </div>
                 <div id="search_btnadmin">   
                  <li>
                    <input type="button" id="btn_searchadmin" name="search" class="button" value="Search">  
                  </li>
                </div>
                </ul>

              </form>
            </div>
            <div class="search-wrap">
                  <div class="header-name-wrap">
                    <h3>Search</h3>
                  </div>

                  <div class="search-hits">
                    <div id="search-content">

                     <table id="tbl_schooldetails" border="1" cellpadding="0" cellborder="0" class="table-global">
                      <tr>
                          <th style="width:15%;" align="center">Selected</th>
                          <th style="width:50%;" align="center"> School Name</th>
                          <th style="width:50%;" align="center">Address</th>
                      </tr>
                    </table>

                    <table id="tbl_admindetails" border="1" cellpadding="0" cellborder="0" class="table-global">
                      <tr>
                          <th style="width:50%;" align="center">Admin Name</th>
                          <th style="width:50%;" align="center">Position</th>
                      </tr>
                    </table>

                    <table id="tbl_searchschool" cellpadding="0" cellborder="0">
                      
                    </table>

                    <table id="tbl_searchadmin" cellpadding="0" cellborder="0">

                    </table>
                     
                    </div>  
                    
                  </div>



                  <input  type="button" name="view_school_inf" id="btn_view" class="button" value="View">

                  <input type="button" name="add_user"  rel="#add-admin-modal" class="button modal" value="Add Admin">

                  <input type="button" name="add_school"  rel="#add-school-modal" class="button modal" value="Add School">

                  
               </div>  

            </div>

            <div id="tab2" class="tab-content">
                <div id="curr-wrap">
                   <input type="submit" rel="#add-subject-modal" name="addbut_subjects_2ndyr" class="button modal" value="Add Subject +">

                  <div id="curr-elem-grd1" class="curr-wrap">
                        <div class="box-header">
                          <h3>Grade 1 Subjects</h3>
                        </div>


                        <div id="curr-elem-grd1-content">
                        <table id="curr-grd1-tble">
                         

                        </table>
                    </div>
                  </div>

                   <div id="curr-elem-grd2" class="curr-wrap">
                        <div class="box-header">
                          <h3>Grade 2 Subjects</h3>
                        </div>


                        <div id="curr-elem-grd2-content">
                        <table id="curr-grd2-tble">
                         

                        </table>
                    </div>
                  </div>

                  <div id="curr-elem-grd3" class="curr-wrap">
                        <div class="box-header">
                          <h3>Grade 3 Subjects</h3>
                        </div>


                        <div id="curr-elem-grd3-content">
                        <table id="curr-grd3-tble">
                         

                        </table>
                    </div>
                  </div>

                  <div id="curr-elem-grd4" class="curr-wrap">
                        <div class="box-header">
                          <h3>Grade 4 Subjects</h3>
                        </div>


                        <div id="curr-elem-grd4-content">
                        <table id="curr-grd4-tble">
                         

                        </table>
                    </div>
                  </div>

                  <div id="curr-elem-grd5" class="curr-wrap">
                        <div class="box-header">
                          <h3>Grade 5 Subjects</h3>
                        </div>


                        <div id="curr-elem-grd5-content">
                        <table id="curr-grd5-tble">
                         

                        </table>
                    </div>
                  </div>

                  <div id="curr-elem-grd6" class="curr-wrap">
                        <div class="box-header">
                          <h3>Grade 6 Subjects</h3>
                        </div>


                        <div id="curr-elem-grd6-content">
                        <table id="curr-grd6-tble">
                         

                        </table>
                    </div>
                  </div>

                  <div id="curr-1styear" class="curr-wrap">
                        <div class="box-header">
                          <h3>1st year Subject</h3>
                        </div>
                        <div id="curr-1styear-content">
                        <table id="curr-1sthigh-tble">
                          
                        </table>
                      </div>
                  </div>

                   <div id="curr-2ndyear" class="curr-wrap">
                        <div class="box-header">
                          <h3>2nd year Subject</h3>
                        </div>
                        <div id="curr-2ndyear-content">
                        <table id="curr-2ndhigh-tble">
                         
                        </table>
                      </div>
                  </div>

                   <div id="curr-3rdyear" class="curr-wrap">
                        <div class="box-header">
                          <h3>3rd year Subject</h3>
                        </div>
                        <div id="curr-3rdyear-content">
                        <table id="curr-3rdhigh-tble">
                          
                        </table>
                      </div>
                  </div>

                  <div id="curr-4thyear" class="curr-wrap">
                        <div class="box-header">
                          <h3>4th year Subject</h3>
                        </div>
                        <div id="curr-4thyear-content">
                        <table id="curr-4thhigh-tble">
                          
                        </table>
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

            <div id="tab4" class="tab-content">

               <div id="evaluate-wrap">

                <div id="updates-header" class="header-name-wrap">
                  <h3>Evaluation:</h3>
                </div>
                  
                      

                <div id="evaluate">
                  <table id="table-evaluate-header" class="table-header-all">

                  <tr>
                      <td style="width:10%">
                        <label>Select</label>
                      </td>
                      <td style="width:15%">
                        <label>Status</label>
                      </td>
                       <td style="width:25%">
                        <label>Evaluation</label>
                      </td>
                      <td style="width:50%">
                        <label>School Name</label>
                      </td>
                     
                      
                    </tr>
                    
                 </table>
                  <div id="evaluate-content"  class="to_scroll"  >
                    <table id="table-evaluate-schools-content" class="table-content-all">
                    
                    
                    </table>
                    
                 </div>
                </div>
                  <div id="view-form-wrap">
                      <input type="button" id="view-school-button" class="button" value="View School">
                      <input type="button" id="authen-school-button" class="button" value="Authenticate">


                     
                  </div>
              </div>

               <div class="wrap-search-nav">
                         <label>Seach School Name:</label>
                            
                        <input type="text" id="school-name-search" name="srch_sch_name" class="input" >

                         <input type="button"  id="school-search-btn"  class="button " value="Search">
                </div>        
              <div id="search-school-wrap">
                  <div class="header-name-wrap">
                    <h3>Search</h3>
                  </div>

                  

                  <div id="search-school-hits">
                    <div id="search-school-content">

                     <table id="tbl_schooldetails" class="table-header-all">
                      <tr>
                          <th style="width:15%;" align="center">Selected</th>
                          <th style="width:25%;" align="center"> School Name</th>
                          <th style="width:25%;" align="center"> Status</th>
                          <th style="width:35%;" align="center">Address</th>
                      </tr>
                    </table>


                    <table id="table_searchschool_content" class="table-content-all">
                      
                    </table>

                    
                     
                    </div>  
                    
                  </div>

                  <input type="button"  id="check-all-btn"  class="button " value="Check All">
                  <input type="button"  id="uncheck-all-btn"  class="button " value="Uncheck">
                  <input  type="button"  id="reset-btn" class="button" value="Reset">

                  <input type="button"  id="allow-btn"  class="button " value="Allow">

                 

                  
               </div> 

            </div>
           
      </div>

      <div class="boxes">

        <div id="announcement-window" class="window">
            <span class="close-button-wrap">
              <a href="#" class="close close-link"/><div class="close-button">Close it</div></a>
            </span>
            <div class="modal-header">
                <h3>Add Announcement</h3>
            </div>

            <div id="add-anncemnt-wrap">
              
              <table>
                <tr>
                  <td>
                    <label>Title:</label>
                  </td>
                  <td>
                    <input type="text" name="anncmnt_name" id="anncmnt-title" style="width:300px;" class="input">
                  </td>  
                </tr>

                <tr>
                  <td>
                    <label>Details:</label>
                  </td>
                  <td>
                    <textarea  name="anncmnt_details" id="anncmnt-message" style="width:300px;height:150px;" class="text-area-des"></textarea>
                  </td>  
                </tr>
              </table>

              <input type="submit" name="anncmnt_add" id="anncmnt-add" class="button" value="Add">
            
            </div>         
        </div>
       <div id="mask"></div>
      </div>

      <div class="boxes">

        <div id="add-admin-modal" class="window">
            <span class="close-button-wrap">
              <a href="#" class="close close-link"/><div class="close-button">Close it</div></a>
            </span>
            <div class="modal-header">
                <h3>Add Administrator</h3>
            </div>

            <div id="add-admin-wrap">
              <form action="register_get.php" method="post">
              <table>
                <tr>
                  <td>
                    <label>Last Name:</label>
                  </td>
                   <td>
                    <input type="text" name="admin_lname" style="width:300px;" class="input letters-only">
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>First Name:</label>
                  </td>
                   <td>
                    <input type="text" name="admin_fname" style="width:300px;" class="input letters-only">
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>Middle Name:</label>
                  </td>
                   <td>
                    <input type="text" name="admin_mname" style="width:300px;" class="input letters-only">
                  </td>
                </tr>

                <tr>
                  <td>
                    <label>Gender:</label>
                  </td>
                  <td>
                    <input type="radio" name="admin_gender" value="male"> Male
                    <input type="radio" name="admin_gender" value="female"> Female
                  </td>                   
                </tr>   

                  <tr>
                  <td>
                    <label>Position</label>
                  </td>
                  <td>
                    <input type="text" name="admin_position" style="width:300px;" class="input">
                  </td>  
                </tr>      

                <tr>
                  <td>
                    <label>Email-add</label>
                  </td>
                  <td>
                    <input type="text" name="admin_eadd" style="width:300px;" class="input">
                  </td>  
                </tr>


                <tr>
                  <td>
                    <label>Level</label>
                  </td>
                  <td>
                    <select name="admin_level">
                      <option value="super">Super Admin</option>
                      <option value="admin">Admin</option>                   
                    </select>
                  </td>  
                </tr>

                

                
              </table>

              <input type="submit" name="add_admin" class="button" value="Add">
            </form>
            </div>         
        </div>
       <div id="mask"></div>
      </div>

      <div class="boxes">

        <div id="add-school-modal" class="window">
            <span class="close-button-wrap">
              <a href="#" class="close close-link"/><div class="close-button">Close it</div></a>
            </span>
            <div class="modal-header">
                <h3>Add School</h3>
            </div>

            <div id="add-school-wrap">
              <table>
                <tr>
                  <td>
                    <label>School Name:</label>
                  </td>
                  <td>
                    <input type="text" id="school_name" name="school_name" style="width:300px;" class="input">
                  </td>  
                </tr>

                <tr>
                  <td>
                    <label>Address:</label>
                  </td>
                  <td>
                    <textarea id="school_address"  name="school_address" style="width:300px;height:150px;" class="text-area-des"></textarea>
                  </td>  
                </tr>
              </table>

              <input type="submit" id="btn_school" name="school_add" class="button" value="Add">
            </div>         
        </div>
       <div id="mask"></div>
      </div>

      <div class="boxes">

        <div id="add-subject-modal" class="window">
            <span class="close-button-wrap">
              <a href="#" class="close close-link"/><div class="close-button">Close it</div></a>
            </span>
            <div class="modal-header">
                <h3>Add Subject</h3>
            </div>

            <div id="add-subject-wrap">
              <table>
                <tr>
                  <td>
                    <label>Subject Name:</label>
                  </td>
                  <td>
                    <input type="text" name="subject_name" id="subject-name" style="width:300px;" class="input letters-only">
                  </td>  
                </tr>

                 <tr>
                  <td>
                    <label>Subject Units:</label>
                  </td>
                  <td>
                    <input type="text" name="subject_units" id="subject-units" style="width:300px;" class="input numbers-only">
                  </td>  
                </tr>

                <tr>
                  <td>
                    <label>Level:</label>
                  </td>
                  <td>
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
                  </td>  
                </tr>
              </table>

              <input type="button" name="subject_add" rel="#loading-window" id="subjct_add_but" class="button modal2" value="Add +">
            
            </div>         
        </div>
       <div id="mask"></div>
      </div>

        <div class="boxes">

        




      <div class="boxes">

        <div id="loading-window" >
            
          <img src="./images/loader.gif" title="Loader" alt="Loader">                  
        </div>


       <div id="mask2"></div>
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

          var ajax_request;

          $('#check-all-btn').live('click',function (){

            $('input[name=school_checkbx]').attr('checked',true);

          });


          $('#uncheck-all-btn').live('click',function (){

            $('input[name=school_checkbx]').attr('checked',false);

          });






          $('#search-content').slimScroll({
            height:elem_height,
            start: 'top',
            wheelStep: 10,
            railVisible: true,
          }).css({ paddingRight: '10px' });

          /****************search users filter*****************/




          $('#filter_users').on("change",function (){
             if($(this).val() == "schools"){
              $('#school-search').show();
              $('#admins-search').hide();
             }
             else{
              $('#school-search').hide();
              $('#admins-search').show();
             }

          });

          $('#school-search-btn').click(function (){

            var search_word = $('#school-name-search').val();

            $('#table_searchschool_content').html("");

               if(ajax_request){

            ajax_request.abort();
          }

            ajax_request = $.ajax({
                          type: "post",
                          url: "deped_functions.php",
                          dataType:'json',
                          cache:false,
                          data:{'func_num':'6','school':search_word},

                          
                          beforeSend: function(data){

                            $('#tbl_searchschool').html('');
              
                          },

                          success: function(data){
                            
                             $.each(data, function(i, item) {

                           var element= "<tr>";

                              element+="<td class='test' style='width:15%;' align='center'><input type='checkbox' name='school_checkbx' value='"+data[i].search_school_id+"'></td>";
                             element+="<td align='center' style='width:25%;'>"+data[i].search_school+"</td>";
                             element+="<td align='center' style='width:25%;'>"+data[i].status+"</td>";
                              element+="<td align='center' style='width:35%;'>"+data[i].search_address+"</td></tr>";

                             $('#table_searchschool_content').append(element);

                            });
                          }
                });

          });

          $('#filter_users').trigger("change");

          /************search user filter end***********************/
                      var counter=1;
                      var counter2=1;
                $("body").on('click','#add-subject-2ndyr',function () {
                          counter+=1;

                         $(this).parent().parent().after("<tr><td><label>Subject:</label></td><td><input type='text' name='subject["+counter+"]' > <input type='button' id='add-subject-2ndyr' name='add_subject_2ndyr'class='button' value='+''> <input type='button' id='remove-subject-2ndyr' name='remove_subject_2ndyr'class='button' value='-''></td></tr>");
                  });

                $("body").on('click','#add-subject-1styr',function () {
                          counter2+=1;

                         $(this).parent().parent().after("<tr><td><label>Subject:</label></td><td><input type='text' name='subject["+counter2+"]' > <input type='button' id='add-subject-1styr' name='add_subject_1styr'class='button' value='+''> <input type='button' id='remove-subject-1styr' name='remove_subject_1styr'class='button' value='-''></td></tr>");
                 });

                $("body").on('click','#remove-subject-2ndyr',function () {
                   $(this).parent().parent().remove();
                });

                 $("body").on('click','#remove-subject-1styr',function () {
                           $(this).parent().parent().remove();
                });

                  /***add announcement registrar  ***/

           function schools_4_evaluation(){

              $.ajax({
                    type:'POST',
                    url:'deped_functions.php',
               dataType:'json',
                   data:{'func_num':'3'},
                success:function (data){

                          $.each(data, function(i, item) {
                            html = "<tr>";

                                            html += "<td style='width:10%;'><input type='radio' name='school_id_chkbx' value='"+data[i].school_id+"'></td>";
                                            html += "<td style='width:15%;'><label>"+data[i].eval_stat+"</label></td>";
                                            html += "<td style='width:25%;'><label >"+data[i].authen_status+"</label></td>";
                                            html += "<td style='width:50%;'><label >"+data[i].school_name+"</label></td>";                                           
                                            //html += "<td style='width:30%;'><input type='button' rel='#reject-remarks-modal' id='remarks-school-button' class='button modal' value='Remarks'></td>";

                                            html += "</tr>";

                                  $('#table-evaluate-schools-content').append(html);
                          });
                    }

                });



            }

            schools_4_evaluation();

             $('#reset-btn').click(function (){

              if($('input[name=school_checkbx]').is(':checked')){


                var schools = [] ;

                 $.each($('input[name=school_checkbx]:checked'), function(i, item) {

                            var  school_id = $(item).val();  
                                 
                                   schools.push({"school_id":school_id});
                               });

                 if( ajax_request){


                    ajax_request.abort();
                 }

                   ajax_request  = $.ajax({

                                type:'POST',
                                url:'deped_functions.php',
                                dataType:'json',
                                data:{'func_num':'7','schools_id':schools},
                                 success:function (data){

                                        if(data.pki_unset == "1"){

                                          alert("Successfuly Changed");

                                          $('#school-search-btn').trigger('click');

                                        }
                                        else{

                                          alert("Ooopss There was an error");

                                        }


                                    }

                                 });
                
              }
              else{

                alert("Please Choose A School");

              }


          });


          $('#allow-btn').click(function (){

              if($('input[name=school_checkbx]').is(':checked')){


                var schools = [] ;

                 $.each($('input[name=school_checkbx]:checked'), function(i, item) {

                            var  school_id = $(item).val();  
                                 
                                   schools.push({"school_id":school_id});
                               });

                 if( ajax_request){


                    ajax_request.abort();
                 }

                   ajax_request  = $.ajax({

                                type:'POST',
                                url:'deped_functions.php',
                                dataType:'json',
                                data:{'func_num':'8','schools_id':schools},
                                 success:function (data){

                                        if(data.pki_set == "1"){

                                          alert("Successfuly Changed");

                                          $('#school-search-btn').trigger('click');

                                        }
                                        else{

                                          alert("Ooopss There was an error");

                                        }


                                    }

                                 });
                
              }
              else{

                alert("Please Choose A School");

              }


          });
            

             $('#view-school-button').click(function (){

              var status = "Viewed"

              

                  if($('input[name=school_id]').is(':checked')){

                      var school_id = $('input[name=school_id]:checked').val();


                       $.ajax({
                          type:'POST',
                          url:'deped_functions.php',
                     dataType:'json',
                         data:{'func_num':'5','school_id':school_id,'status':status},
                      success:function (data){

                              if(data.success = '1'){

                                

                                    $(location).attr('href','deped_sections_view.php?sch_id='+school_id);

                                }else{

                                  alert("Error Cannot Redirect");
                                }
                          }
                      });

                      

                  }
                  else
                  {


                    alert("Please Choose a School");
                  }

         });
         


           $('#anncmnt-add').click(function (){
             var title_anncmnt =  $('#anncmnt-title').val();
              var msg_anncmnt = $('#anncmnt-message').val();

              
  

              if( title_anncmnt != "" && msg_anncmnt != ""  ){
                  $.ajax({
                      type:'POST',
                      url:'announcement_func.php',
                 dataType:'json',
                     data:{'swt_num':'1','announcement_title':title_anncmnt,'announcement_message':msg_anncmnt},
                  beforeSend:function (data){
                    $('#announcement-list').html("");
                    $('#anncmnt-title').val("");
                    $('#anncmnt-message').val("");
                  },

                  success:function (data){

                    if(data.error == false){

                      $('#announcement-window').hide();
                      $('#mask').hide();

                      alert("Announcement sucessfully added");

                      getAnnouncements();

                    }
                    else{
                      alert("something is wrong in your insert");
                    }
                  }

                  });
              }
              else{

                alert("please put the neccesary detais");
              }

           });

           /*end add announcement script*/

            function getAnnouncements(){
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

            getAnnouncements();

          

           /************************activating subject*****************************/ 

           $('.active').live('click',function (){

                var prev = $(this).parent().prev().find('input[type=text]');
                  var valText = $(prev).val();

                  var relVal = $(this).parent().prev().find('input[type=text]').attr('rel');
                 
                     var div = $(this).parent().parent().parent().parent().parent().parent().attr('id');

                     var table = $(this).parent().parent().parent().attr('id');

                   
                
                   $.ajax({
                              type:'POST',
                              url:'add_subject.php',
                         dataType:'json',
                             data:{'func_numbr':'7','subjct_name':valText,'subjct_id':relVal},
                          success:function (data){
                            $('#mask2').hide();

                            $('#loading-window').hide();

                             var find_table = $("[id*="+div+"]").children().find("table").attr('id');

                             $("[id*="+find_table+"]").html("");
                            
                             switch(find_table){

                              case "curr-grd1-tble":
                                      load_elementary_grd1();
                                      break;
                              case "curr-grd2-tble":
                                      load_elementary_grd2();
                                      break;        
                              case "curr-grd3-tble":
                                      load_elementary_grd3();
                                      break;
                              case "curr-grd4-tble":
                                      load_elementary_grd4();
                                      break;
                              case "curr-grd5-tble":
                                      load_elementary_grd5();
                                      break;
                              case "curr-grd6-tble":
                                      load_elementary_grd6();
                                      break;                                
                                      
                              case "curr-1sthigh-tble":
                                      load_frstyear_high();
                                      break;
                              case "curr-2ndhigh-tble":
                                      load_secondyear_high();
                                      break;
                                      
                              case "curr-3rdhigh-tble":                                      
                                      load_thirdyear_high();
                                      break;
                              case "curr-4thhigh-tble":                                    
                                      load_fourthyear_high();
                                      break;

                            
                             }
                          }     
                   });



           });

           /*********************************end*********************************/

            /************************deactivating subject*****************************/ 

           $('.inactive').live('click',function (){

                var prev = $(this).parent().prev().find('input[type=text]');
                  var valText = $(prev).val();

                  var relVal = $(this).parent().prev().find('input[type=text]').attr('rel');
                 
                  var div = $(this).parent().parent().parent().parent().parent().parent().attr('id');

                     var table = $(this).parent().parent().parent().attr('id');
                
                   $.ajax({
                              type:'POST',
                              url:'add_subject.php',
                         dataType:'json',
                             data:{'func_numbr':'8','subjct_name':valText,'subjct_id':relVal},
                          success:function (data){
                            $('#mask2').hide();
                            $('#loading-window').hide();
                            
                            var find_table = $("[id*="+div+"]").children().find("table").attr('id');

                             $("[id*="+find_table+"]").html("");
                            
                            switch(find_table){

                              case "curr-grd1-tble":
                                      load_elementary_grd1();
                                      break;
                              case "curr-grd2-tble":
                                      load_elementary_grd2();
                                      break;        
                              case "curr-grd3-tble":
                                      load_elementary_grd3();
                                      break;
                              case "curr-grd4-tble":
                                      load_elementary_grd4();
                                      break;
                              case "curr-grd5-tble":
                                      load_elementary_grd5();
                                      break;
                              case "curr-grd6-tble":
                                      load_elementary_grd6();
                                      break;                                
                                      
                              case "curr-1sthigh-tble":
                                      load_frstyear_high();
                                      break;
                              case "curr-2ndhigh-tble":
                                      load_secondyear_high();
                                      break;
                                      
                              case "curr-3rdhigh-tble":                                      
                                      load_thirdyear_high();
                                      break;
                              case "curr-4thhigh-tble":                                    
                                      load_fourthyear_high();
                                      break;                        

                            }
                            
                          }     
                   });



           });

           /*********************************end*********************************/


           $('#subjct_add_but').click(function (){



            var subject_name = $('#subject-name').val();
            var units_number =  $('#subject-units').val();                
            var level  =  $('#subject-level').val();

                  $('#mask').hide();
                  $('.window').hide();
                 


                if(subject_name != "" && units_number != "" && level != ""){
                      $.ajax({
                              type:'POST',
                              url:'add_subject.php',
                         dataType:'json',
                             data:{'func_numbr':'1','year_level':level,'subjct_name':subject_name,'subjct_units':units_number},
                          success:function (data){

                          if(data.error == false){

                              $('#mask2').hide();

                              $('#loading-window').hide();


                              $(location).attr('href','manage_deped.php');
                            }
                            else{
                              alert("something is wrong in your insert");
                            }
                          }     
                   });
                  }
              else{
                alert("please complete the fields");
              }
          });

           /************load subjects of elementary**************/
         function load_elementary_grd1(){ 
           var html;
           
                    $.ajax({
                              type:'POST',
                              url:'add_subject.php',
                         dataType:'json',
                             data:{'func_numbr':'2'},
                          success:function (data){
                            var activator;

                            var disabler;
                             var counter_sub = 0 ;

                             $.each(data, function(i, item) {

                              if(data[i].subj_status == "0"){

                                classToAddInactve = "inactiveButton";
                                DisableInactve = "disabled=\"disabled\""
                                classToAddActve   = "";
                                DisableActve = ""
                               }

                               else{

                                classToAddInactve = ""
                                 DisableInactve = ""
                                 classToAddActve   = "inactiveButton";
                                 DisableActve = "disabled=\"disabled\""
                               }
                              

                              

                              html = "<tr>";

                              html += "<td><lable>Subject: </label><input type='text' name='subject["+counter_sub+"]' rel='"+data[i].subj_id+"' value='"+data[i].subj_name+"' readonly='readonly'></td>";
                              html += "<td><input type='button'  id='activate["+counter_sub+"]' name='active' class='button active  "+classToAddActve+"' value='Apply' "+DisableActve+"> ";
                              html += "<input type='button'  id='inactivate["+counter_sub+"]' name='active' class='button inactive "+classToAddInactve+"' value='Remove from list' "+DisableInactve+"></td>";
                              html += "</tr>";

                     $('#curr-grd1-tble').append(html);

                     counter_sub = counter_sub +1;
                    });
                          }     
                   });
}

function load_elementary_grd2(){ 
           var html;
           
                    $.ajax({
                              type:'POST',
                              url:'add_subject.php',
                         dataType:'json',
                             data:{'func_numbr':'13'},
                          success:function (data){
                            var activator;

                            var disabler;
                             var counter_sub = 0 ;

                             $.each(data, function(i, item) {

                              if(data[i].subj_status == "0"){

                                classToAddInactve = "inactiveButton";
                                DisableInactve = "disabled=\"disabled\""
                                classToAddActve   = "";
                                DisableActve = ""
                               }

                               else{

                                classToAddInactve = ""
                                 DisableInactve = ""
                                 classToAddActve   = "inactiveButton";
                                 DisableActve = "disabled=\"disabled\""
                               }
                              

                              

                              html = "<tr>";

                              html += "<td><lable>Subject: </label><input type='text' name='subject["+counter_sub+"]' rel='"+data[i].subj_id+"' value='"+data[i].subj_name+"' readonly='readonly'></td>";
                              html += "<td><input type='button'  id='activate["+counter_sub+"]' name='active' class='button active  "+classToAddActve+"' value='Apply' "+DisableActve+"> ";
                              html += "<input type='button'  id='inactivate["+counter_sub+"]' name='active' class='button inactive "+classToAddInactve+"' value='Remove from list' "+DisableInactve+"></td>";
                              html += "</tr>";

                     $('#curr-grd2-tble').append(html);

                     counter_sub = counter_sub +1;
                    });
                          }     
                   });
}

function load_elementary_grd3(){ 
           var html;
           
                    $.ajax({
                              type:'POST',
                              url:'add_subject.php',
                         dataType:'json',
                             data:{'func_numbr':'14'},
                          success:function (data){
                            var activator;

                            var disabler;
                             var counter_sub = 0 ;

                             $.each(data, function(i, item) {

                              if(data[i].subj_status == "0"){

                                classToAddInactve = "inactiveButton";
                                DisableInactve = "disabled=\"disabled\""
                                classToAddActve   = "";
                                DisableActve = ""
                               }

                               else{

                                classToAddInactve = ""
                                 DisableInactve = ""
                                 classToAddActve   = "inactiveButton";
                                 DisableActve = "disabled=\"disabled\""
                               }
                              

                              

                              html = "<tr>";

                              html += "<td><lable>Subject: </label><input type='text' name='subject["+counter_sub+"]' rel='"+data[i].subj_id+"' value='"+data[i].subj_name+"' readonly='readonly'></td>";
                              html += "<td><input type='button'  id='activate["+counter_sub+"]' name='active' class='button active  "+classToAddActve+"' value='Apply' "+DisableActve+"> ";
                              html += "<input type='button'  id='inactivate["+counter_sub+"]' name='active' class='button inactive "+classToAddInactve+"' value='Remove from list' "+DisableInactve+"></td>";
                              html += "</tr>";

                     $('#curr-grd3-tble').append(html);

                     counter_sub = counter_sub +1;
                    });
                          }     
                   });
}

function load_elementary_grd4(){ 
           var html;
           
                    $.ajax({
                              type:'POST',
                              url:'add_subject.php',
                         dataType:'json',
                             data:{'func_numbr':'15'},
                          success:function (data){
                            var activator;

                            var disabler;
                             var counter_sub = 0 ;

                             $.each(data, function(i, item) {

                              if(data[i].subj_status == "0"){

                                classToAddInactve = "inactiveButton";
                                DisableInactve = "disabled=\"disabled\""
                                classToAddActve   = "";
                                DisableActve = ""
                               }

                               else{

                                classToAddInactve = ""
                                 DisableInactve = ""
                                 classToAddActve   = "inactiveButton";
                                 DisableActve = "disabled=\"disabled\""
                               }
                              

                              

                              html = "<tr>";

                              html += "<td><lable>Subject: </label><input type='text' name='subject["+counter_sub+"]' rel='"+data[i].subj_id+"' value='"+data[i].subj_name+"' readonly='readonly'></td>";
                              html += "<td><input type='button'  id='activate["+counter_sub+"]' name='active' class='button active  "+classToAddActve+"' value='Apply' "+DisableActve+"> ";
                              html += "<input type='button'  id='inactivate["+counter_sub+"]' name='active' class='button inactive "+classToAddInactve+"' value='Remove from list' "+DisableInactve+"></td>";
                              html += "</tr>";

                     $('#curr-grd4-tble').append(html);

                     counter_sub = counter_sub +1;
                    });
                          }     
                   });
}

function load_elementary_grd5(){ 
           var html;
           
                    $.ajax({
                              type:'POST',
                              url:'add_subject.php',
                         dataType:'json',
                             data:{'func_numbr':'16'},
                          success:function (data){
                            var activator;

                            var disabler;
                             var counter_sub = 0 ;

                             $.each(data, function(i, item) {

                              if(data[i].subj_status == "0"){

                                classToAddInactve = "inactiveButton";
                                DisableInactve = "disabled=\"disabled\""
                                classToAddActve   = "";
                                DisableActve = ""
                               }

                               else{

                                classToAddInactve = ""
                                 DisableInactve = ""
                                 classToAddActve   = "inactiveButton";
                                 DisableActve = "disabled=\"disabled\""
                               }
                              

                              

                              html = "<tr>";

                              html += "<td><lable>Subject: </label><input type='text' name='subject["+counter_sub+"]' rel='"+data[i].subj_id+"' value='"+data[i].subj_name+"' readonly='readonly'></td>";
                              html += "<td><input type='button'  id='activate["+counter_sub+"]' name='active' class='button active  "+classToAddActve+"' value='Apply' "+DisableActve+"> ";
                              html += "<input type='button'  id='inactivate["+counter_sub+"]' name='active' class='button inactive "+classToAddInactve+"' value='Remove from list' "+DisableInactve+"></td>";
                              html += "</tr>";

                     $('#curr-grd5-tble').append(html);

                     counter_sub = counter_sub +1;
                    });
                          }     
                   });
}

function load_elementary_grd6(){ 
           var html;
           
                    $.ajax({
                              type:'POST',
                              url:'add_subject.php',
                         dataType:'json',
                             data:{'func_numbr':'17'},
                          success:function (data){
                            var activator;

                            var disabler;
                             var counter_sub = 0 ;

                             $.each(data, function(i, item) {

                              if(data[i].subj_status == "0"){

                                classToAddInactve = "inactiveButton";
                                DisableInactve = "disabled=\"disabled\""
                                classToAddActve   = "";
                                DisableActve = ""
                               }

                               else{

                                classToAddInactve = ""
                                 DisableInactve = ""
                                 classToAddActve   = "inactiveButton";
                                 DisableActve = "disabled=\"disabled\""
                               }
                              

                              

                              html = "<tr>";

                              html += "<td><lable>Subject: </label><input type='text' name='subject["+counter_sub+"]' rel='"+data[i].subj_id+"' value='"+data[i].subj_name+"' readonly='readonly'></td>";
                              html += "<td><input type='button'  id='activate["+counter_sub+"]' name='active' class='button active  "+classToAddActve+"' value='Apply' "+DisableActve+"> ";
                              html += "<input type='button'  id='inactivate["+counter_sub+"]' name='active' class='button inactive "+classToAddInactve+"' value='Remove from list' "+DisableInactve+"></td>";
                              html += "</tr>";

                     $('#curr-grd6-tble').append(html);

                     counter_sub = counter_sub +1;
                    });
                          }     
                   });
}
          /*********end load subjects of elementary************/

           /************load subjects of firstyear high**************/
          
  function load_frstyear_high(){
             var html;
                      $.ajax({
                                type:'POST',
                                url:'add_subject.php',
                           dataType:'json',
                               data:{'func_numbr':'3'},
                            success:function (data){
                               var counter_sub = 0 ;
                               $.each(data, function(i, item) {

                                if(data[i].subj_status == "0"){

                                  classToAddInactve = "inactiveButton";
                                  DisableInactve = "disabled=\"disabled\""
                                  classToAddActve   = "";
                                  DisableActve = ""
                                 }

                                 else{

                                  classToAddInactve = ""
                                   DisableInactve = ""
                                   classToAddActve   = "inactiveButton";
                                   DisableActve = "disabled=\"disabled\""
                                 }

                                html = "<tr>";

                                html += "<td><lable>Subject: </label><input type='text' name='subject["+counter_sub+"]' rel='"+data[i].subj_id+"' value='"+data[i].subj_name+"' readonly='readonly'></td>";
                                html += "<td><input type='button'  id='activate["+counter_sub+"]' name='active' class='button active  "+classToAddActve+"' value='Apply' "+DisableActve+"> ";
                                html += "<input type='button' id='inactivate["+counter_sub+"]' name='active' class='button inactive  "+classToAddInactve+"' value='Remove from list' "+DisableInactve+"></td>";
                                html += "</tr>";
                       $('#curr-1sthigh-tble').append(html);

                       counter_sub = counter_sub +1;
                      });
                            }     
                     });

  }

          /*********end load subjects of firstyear ************/

           /************load subjects of secondyear high**************/
           
  function load_secondyear_high(){         
           var html;
                    $.ajax({
                              type:'POST',
                              url:'add_subject.php',
                         dataType:'json',
                             data:{'func_numbr':'4'},
                          success:function (data){
                            var counter_sub = 0 ;
                             $.each(data, function(i, item) {

                              if(data[i].subj_status == "0"){

                                classToAddInactve = "inactiveButton";
                                DisableInactve = "disabled=\"disabled\""
                                classToAddActve   = "";
                                DisableActve = ""
                               }

                               else{

                                classToAddInactve = ""
                                 DisableInactve = ""
                                 classToAddActve   = "inactiveButton";
                                 DisableActve = "disabled=\"disabled\""
                               }


                              html = "<tr>";

                              html += "<td><lable>Subject: </label><input type='text' name='subject["+counter_sub+"]' rel='"+data[i].subj_id+"' value='"+data[i].subj_name+"' readonly='readonly'></td>";
                              html += "<td><input type='button'  id='activate["+counter_sub+"]' name='active' class='button active  "+classToAddActve+"' value='Apply' "+DisableActve+"> ";
                              html += "<input type='button'  id='inactivate["+counter_sub+"]' name='active' class='button inactive  "+classToAddInactve+"' value='Remove from list' "+DisableInactve+"></td>";
                              html += "</tr>";
                     $('#curr-2ndhigh-tble').append(html);

                     counter_sub = counter_sub +1;
                    });
                          }     
                   });
  }


          /*********end load subjects of secondyear high************/

          /************load subjects of thirdyear high**************/
  function load_thirdyear_high(){        
           var counter_sub = 0 ;

           var html;
                    $.ajax({
                              type:'POST',
                              url:'add_subject.php',
                         dataType:'json',
                             data:{'func_numbr':'5'},
                          success:function (data){
                           var counter_sub = 0 ;
                             $.each(data, function(i, item) {

                              if(data[i].subj_status == "0"){

                                classToAddInactve = "inactiveButton";
                                DisableInactve = "disabled=\"disabled\""
                                classToAddActve   = "";
                                DisableActve = ""
                               }

                               else{

                                classToAddInactve = ""
                                 DisableInactve = ""
                                 classToAddActve   = "inactiveButton";
                                 DisableActve = "disabled=\"disabled\""
                               }

                              html = "<tr>";

                              html += "<td><lable>Subject: </label><input type='text' name='subject["+counter_sub+"]' rel='"+data[i].subj_id+"' value='"+data[i].subj_name+"' readonly='readonly'></td>";
                              html += "<td><input type='button'  id='activate["+counter_sub+"]' name='active' class='button active  "+classToAddActve+"' value='Apply' "+DisableActve+"> ";
                              html += "<input type='button'  id='inactivate["+counter_sub+"]' name='active' class='button inactive  "+classToAddInactve+"' value='Remove from list' "+DisableInactve+"></td>";
                              html += "</tr>";
                     $('#curr-3rdhigh-tble').append(html);

                     counter_sub = counter_sub +1;
                    });
                          }     
                   });

  }

          /*********end load subjects of third high************/

           /************load subjects of fourthyear high**************/
          
  function load_fourthyear_high(){         
           var html;
                    $.ajax({
                              type:'POST',
                              url:'add_subject.php',
                         dataType:'json',
                             data:{'func_numbr':'6'},
                          success:function (data){
                               var counter_sub = 0 ;
                             $.each(data, function(i, item) {
                              if(data[i].subj_status == "0"){

                                classToAddInactve = "inactiveButton";
                                DisableInactve = "disabled=\"disabled\""
                                classToAddActve   = "";
                                DisableActve = ""
                               }

                               else{

                                classToAddInactve = ""
                                 DisableInactve = ""
                                 classToAddActve   = "inactiveButton";
                                 DisableActve = "disabled=\"disabled\""
                               }
                              

                              html = "<tr>";

                              html += "<td><lable>Subject: </label><input type='text' name='subject["+counter_sub+"]' rel='"+data[i].subj_id+"' value='"+data[i].subj_name+"' readonly='readonly'></td>";
                              html += "<td><input type='button'  id='activate["+counter_sub+"]' name='active' class='button active  "+classToAddActve+"' value='Apply' "+DisableActve+"> ";
                              html += "<input type='button'  id='inactivate["+counter_sub+"]' name='active' class='button inactive  "+classToAddInactve+"' value='Remove from list' "+DisableInactve+"></td>";
                              html += "</tr>";
                     $('#curr-4thhigh-tble').append(html);

                     counter_sub = counter_sub +1;
                    });
                          }     
                   });
  }


          /*********end load subjects of fourth high************/

      /**********making all call function work******************/    
        load_elementary_grd1();
        load_elementary_grd2();
        load_elementary_grd3();
        load_elementary_grd4();
        load_elementary_grd5();
        load_elementary_grd6();
        load_frstyear_high();
        load_secondyear_high();
        load_thirdyear_high();
        load_fourthyear_high();
      /**************************end*******************************/  
});   
        

    </script>
    <script>
      var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
      (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
      g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
      s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>

<script>

   $(document).ready(function(){

        var ajax;

        $('#tbl_schooldetails').hide(); $('#search-admin').hide(); $('#search_btnadmin').hide(); $('#tbl_admindetails').hide(); $('#school-search').hide(); $('#search_btnschool').hide();


        $.fn.onRadioSchool = function(){
           $('#tbl_searchschool').html('');
           $('#tbl_searchadmin').html('');
           $('#tbl_admindetails').hide();
           $('#tbl_schooldetails').fadeIn(500);
           $('#search-admin').hide();
           $('#search_btnadmin').hide();
           $('#school-search').show(); $('#search_btnschool').show();
           $('#btn_view').show();
        
        }

        $.fn.onRadioAdmin = function(){
           $('#tbl_searchschool').html('');
           $('#tbl_searchadmin').html('');
           $('#tbl_schooldetails').hide();
           $('#tbl_admindetails').fadeIn(500);
           $('#school-search').hide();
           $('#search_btnschool').hide();
           $('#search-admin').show(); $('#search_btnadmin').show();
           $('#btn_view').hide();
           
        }


        $("input:radio[@name='rb_filter']").on("change",function (){
          if($(this).val()=='schools'){
                $(this).onRadioSchool();
          } else {
                $(this).onRadioAdmin();
          }
        });

        $("#btn_searchschool").click(function(){

          var school = $("#tb_school").val();
          var district = $("#cb_district").val();

          if(ajax){

            ajax.abort();
          }

            ajax = $.ajax({
                          type: "post",
                          url: "manage_deped_searchschool.php",
                          dataType:'json',
                          cache:false,
                          data:{'school': school},

                          
                          beforeSend: function(data){

                            $('#tbl_searchschool').html('');
              
                          },

                          success: function(data){
                            
                             $.each(data, function(i, item) {

                             $('#tbl_searchschool').append("<tr><td class='test' style='width:15%;' align='center'><input type='radio' name='rb_selectedschool' value='"+data[i].search_school_id+"'></td><td align='center' style='width:50%;'>"+data[i].search_school+"</td><td align='center' style='width:50%;'>"+data[i].search_address+"</td></tr>");

                            });
                          }
                });

        });



        $('#btn_view').click(function (){

          if($('input[name=rb_selectedschool]').is(':checked')){

            var id_value = $('input[name=rb_selectedschool]:checked').val();
            
            $(location).attr("href","SchoolProfile.php?id_value="+id_value+"");
          }

          
        });








        $("#btn_searchadmin").click(function(){

          
          var adminname = $("#tb_admin").val();
         
                
          if(ajax){

            ajax.abort();
          }

           ajax = $.ajax({
                          type: "post",
                          url: "manage_deped_searchadmin.php",
                          dataType:'json',
                          cache:false,
                          data:{'adminname': adminname},

                          
                          beforeSend: function(data){

                            $('#tbl_searchadmin').html('');


                          },

                          success: function(data){
                            
                            

                            $.each(data, function(i, item) {

                              $('#tbl_searchadmin').append("<tr><td style='width:50%;' align='center'>"+data[i].adminfname+" "+data[i].adminlname+"</td><td style='width:50%;' align='center'>"+data[i].position+"</td>");

                            });
                          }
                });

        });

      });


    $("#btn_school").click(function(){

      var school_name = $('#school_name').val();
      var school_address = $('#school_address').val();

       ajax = $.ajax({
                          type: "post",
                          url: "manage_deped_func.php",
                          dataType:'json',
                          cache:false,
                          data:{'school_name': school_name, 'school_address': school_address},


                          success: function(data){

                             alert(data);

                              $(location).attr("href","manage_deped.php");
                          }
                });


    });

  </script>




  </body>

<?php
}
?>

</html>

