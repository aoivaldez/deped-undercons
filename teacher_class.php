<!doctype html>

<?php
  session_start();

 

  $log_session = $_SESSION['accnt_typ_fac'];
  $school_id = $_SESSION['school_id'];

  if(!isset($log_session) || empty($log_session)){

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
  <link rel="stylesheet" href="css/style-teacher-class.css">
  
  
  
 
 
</head>

<body>
  <div id="wrap-body">


  <?php

      require_once('header_teacher.php');

    ?>



    <div role="main" id="main">
      <div id="class-content">
        <div id="sections-wrap">
              <div id="advisory-header" class="header-name-wrap">
                <h3>List Of Sections</h3>
              </div>
              <div id="section-list-wrap">
                <table id="table-sections-header" class="table-header-all">
                    <tr>
                      <td style="width:15%;">
                        <label>Select</label>
                      </td>
                      <td style="width:15%;">
                        <label >Year</label>
                      </td>
                      <td style="width:45%;">
                        <label>Section</label>
                      </td>
                       <td style="width:20%;">
                        <label>level</label>
                      </td>
                    </tr>

                    
                 </table>
                <div id="section-list-content"  class="to_scroll"  >
                 
                 <table id="table-sections-content" class="table-content-all">
                 </table>
              </div>

                <div id="view-form-wrap">
                  <input type="button" id="add-advisory" class="button" value="Add To My Advisory">

                  
                </div>
            </div>                
          </div>

          <div id="advisory-wrap">
              <div id="advisory-header" class="header-name-wrap">
                <h3>My Advisories</h3>
              </div>
              <div id="advisory-list-wrap">
                <table id="table-advisory-header" class="table-header-all">
                    <tr>
                      <td style="width:15%;">
                        <label>Select</label>
                      </td>
                      <td style="width:15%;">
                        <label >Year</label>
                      </td>
                      <td style="width:45%;">
                        <label>Section</label>
                      </td>
                       <td style="width:20%;">
                        <label>level</label>
                      </td>
                    </tr>

                    
                 </table>
                <div id="advisory-list-content"  class="to_scroll"  >
                 
                 <table id="table-advisory-content" class="table-content-all">
                 </table>
              </div>
            </div>
            <div id="view-form-wrap">
                  <input type="button" id="view-class" name="view-class" class="button" value="View">

                  <input type="button" name="add_students" id="add-students" rel="#addstudent-window" class="button " value="Add Students"> 

                  <input type="button"  id="remove-advisory"  class="button " value="Remove From My Advisory"> 
                </div>                
          </div>
        
        </div>       
    </div>

    <footer>

      <div class="boxes">     
      <div id="addstudent-window" class="window">
          <div class="modal-header">
              <h3>Add Students</h3>
          </div>

          <span class="close-button-wrap">
            <a href="#" class="close close-link"/><div class="close-button">Close it</div></a>
          </span>
          <div id="addstudent-wrap">
            <form action="add_student.php" method="post">
             <div id="students-info-wrap"> 
              <table>
                <th colspan="4"><h2>Boys</h2></th>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="bstudnt_lname[1]" class="input letters-only" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_fname[1]" class="input" placeholder="First Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_mname[1]" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <label>Address:</label>
                  </td>
                  <td>
                    <input type="text" name="bstudnt_address[1]" class="address input" placeholder="Address">
                  </td>
                  <td>
                    <label>Age:</label>
                  </td>
                  <td >
                    <input type="text" name="bstudnt_age[1]" class="age numbers-only" placeholder="Age">
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="bstudnt_lname[2]" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_fname[2]" class="input" placeholder="First Name">
                  </td>
                  <td>                    
                    <input type="text" name="bstudnt_mname[2]" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <label>Address:</label>
                  </td>
                  <td>
                    <input type="text" name="bstudnt_address[2]" class="address input" placeholder="Address">
                  </td>
                  <td>
                    <label>Age:</label>
                  </td>
                  <td >
                    <input type="text" name="bstudnt_age[2]" class="age numbers-only" placeholder="Age">
                  </td>  
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="bstudnt_lname[3]" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_fname[3]" class="input" placeholder="First Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_mname[3]" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <label>Address:</label>
                  </td>
                  <td>
                    <input type="text" name="bstudnt_address[3]" class="address input" placeholder="Address">
                  </td>
                  <td>
                    <label>Age:</label>
                  </td>
                  <td >
                    <input type="text" name="bstudnt_age[3]" class="age numbers-only" placeholder="Age">
                  </td>  
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="bstudnt_lname[4]" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_fname[4]" class="input" placeholder="First Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_mname[4]" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <label>Address:</label>
                  </td>
                  <td>
                    <input type="text" name="bstudnt_address[4]" class="address input" placeholder="Address">
                  </td>
                  <td>
                    <label>Age:</label>
                  </td>
                  <td >
                    <input type="text" name="bstudnt_age[4]" class="age numbers-only" placeholder="Age">
                  </td>  
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="bstudnt_lname[5]" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_fname[5]" class="input" placeholder="First Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_mname[5]" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <label>Address:</label>
                  </td>
                  <td>
                    <input type="text" name="bstudnt_address[5]" class="address input" placeholder="Address">
                  </td>
                  <td>
                    <label>Age:</label>
                  </td>
                  <td >
                    <input type="text" name="bstudnt_age[5]" class="age numbers-only" placeholder="Age">
                  </td>  
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="bstudnt_lname[6]" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_fname[6]" class="input" placeholder="First Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_mname[6]" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <label>Address:</label>
                  </td>
                  <td>
                    <input type="text" name="bstudnt_address[6]" class="address input" placeholder="Address">
                  </td>
                  <td>
                    <label>Age:</label>
                  </td>
                  <td >
                    <input type="text" name="bstudnt_age[6]" class="age numbers-only" placeholder="Age">
                  </td>  
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="bstudnt_lname[7]" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_fname[7]" class="input" placeholder="First Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_mname[7]" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <label>Address:</label>
                  </td>
                  <td>
                    <input type="text" name="bstudnt_address[7]" class="address input" placeholder="Address">
                  </td>
                  <td>
                    <label>Age:</label>
                  </td>
                  <td >
                    <input type="text" name="bstudnt_age[7]" class="age numbers-only" placeholder="Age">
                  </td>  
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="bstudnt_lname[8]" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_fname[8]" class="input" placeholder="First Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_mname[8]" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <label>Address:</label>
                  </td>
                  <td>
                    <input type="text" name="bstudnt_address[8]" class="address input" placeholder="Address">
                  </td>
                  <td>
                    <label>Age:</label>
                  </td>
                  <td >
                    <input type="text" name="bstudnt_age[8]" class="age numbers-only" placeholder="Age">
                  </td>  
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="bstudnt_lname[9]" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_fname[9]" class="input" placeholder="First Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_mname[9]" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <label>Address:</label>
                  </td>
                  <td>
                    <input type="text" name="bstudnt_address[9]" class="address input" placeholder="Address">
                  </td>
                  <td>
                    <label>Age:</label>
                  </td>
                  <td >
                    <input type="text" name="bstudnt_age[9]" class="age numbers-only" placeholder="Age">
                  </td>  
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="bstudnt_lname[10]" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_fname[10]" class="input" placeholder="First Name">
                  </td>
                  <td>
                    <input type="text" name="bstudnt_mname[10]" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <label>Address:</label>
                  </td>
                  <td>
                    <input type="text" name="bstudnt_address[10]" class="address input" placeholder="Address">
                    </td>
                  <td>
                    <label>Age:</label>
                  </td>
                  <td >
                    <input type="text" name="bstudnt_age[10]" class="age numbers-only" placeholder="Age">
                    <input type="button" id="" name="add_bstudent" class="button add-bstudent" value="+">
                  </td>  
                </tr>              
              </table>

              <table>
                <th colspan="4"><h2>Girls</h2></th>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="gstudnt_lname[1]" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_fname[1]" class="input" placeholder="First Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_mname[1]" class="input" placeholder="Middle Name">
                  </td>
                   <td>
                    <label>Address:</label>
                  </td>
                  <td>
                    <input type="text" name="gstudnt_address[1]" class="address input" placeholder="Address">
                  </td>
                  <td>
                    <label>Age:</label>
                  </td>
                  <td >
                    <input type="text" name="gstudnt_age[1]" class="age numbers-only" placeholder="Age">
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="gstudnt_lname[2]" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_fname[2]" class="input" placeholder="First Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_mname[2]" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <label>Address:</label>
                  </td>
                  <td>
                    <input type="text" name="gstudnt_address[2]" class="address input" placeholder="Address">
                  </td>
                  <td>
                    <label>Age:</label>
                  </td>
                  <td >
                    <input type="text" name="gstudnt_age[2]" class="age numbers-only" placeholder="Age">
                  </td>  
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="gstudnt_lname[3]" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_fname[3]" class="input" placeholder="First Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_mname[3]" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <label>Address:</label>
                  </td>
                  <td>
                    <input type="text" name="gstudnt_address[3]" class="address input" placeholder="Address">
                  </td>
                  <td>
                    <label>Age:</label>
                  </td>
                  <td >
                    <input type="text" name="gstudnt_age[3]" class="age numbers-only" placeholder="Age">
                  </td>  
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="gstudnt_lname[4]" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_fname[4]" class="input" placeholder="First Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_mname[4]" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <label>Address:</label>
                  </td>
                  <td>
                    <input type="text" name="gstudnt_address[4]" class="address input" placeholder="Address">
                  </td>
                  <td>
                    <label>Age:</label>
                  </td>
                  <td >
                    <input type="text" name="gstudnt_age[4]" class="age numbers-only" placeholder="Age">
                  </td>  
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="gstudnt_lname[5]" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_mname[5]" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_fname[5]" class="input" placeholder="First Name">
                  </td>
                  <td>
                    <label>Address:</label>
                  </td>
                  <td>
                    <input type="text" name="gstudnt_address[5]" class="address input" placeholder="Address">
                  </td>
                  <td>
                    <label>Age:</label>
                  </td>
                  <td >
                    <input type="text" name="gstudnt_age[5]" class="age numbers-only" placeholder="Age">
                  </td>   
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="gstudnt_lname[6]" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_fname[6]" class="input" placeholder="First Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_mname[6]" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <label>Address:</label>
                  </td>
                  <td>
                    <input type="text" name="gstudnt_address[6]" class="address input" placeholder="Address">
                  </td>
                  <td>
                    <label>Age:</label>
                  </td>
                  <td >
                    <input type="text" name="gstudnt_age[1]" class="age numbers-only" placeholder="Age">
                  </td>   
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="gstudnt_lname[7]" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_fname[7]" class="input" placeholder="First Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_mname[7]" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <label>Address:</label>
                  </td>
                  <td>
                    <input type="text" name="gstudnt_address[7]" class="address input" placeholder="Address">
                  </td>
                  <td>
                    <label>Age:</label>
                  </td>
                  <td >
                    <input type="text" name="gstudnt_age[7]" class="age numbers-only" placeholder="Age">
                  </td>   
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="gstudnt_lname[8]" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_fname[8]" class="input" placeholder="First Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_mname[8]" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <label>Address:</label>
                  </td>
                  <td>
                    <input type="text" name="gstudnt_address[8]" class="address input" placeholder="Address">
                  </td>
                  <td>
                    <label>Age:</label>
                  </td>
                  <td >
                    <input type="text" name="gstudnt_age[8]" class="age numbers-only" placeholder="Age">
                  </td>   
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="gstudnt_lname[9]" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_fname[9]" class="input" placeholder="First Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_mname[9]" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <label>Address:</label>
                  </td>
                  <td>
                    <input type="text" name="gstudnt_address[9]" class="address input" placeholder="Address">
                  </td>
                  <td>
                    <label>Age:</label>
                  </td>
                  <td >
                    <input type="text" name="gstudnt_age[9]" class="age numbers-only" placeholder="Age">
                  </td>   
                </tr>
                <tr>
                  <td>
                    <label>Name:</label>
                  </td>
                  <td>
                    <input type="text" name="gstudnt_lname[10]" class="input" placeholder="Last Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_fname[10]" class="input" placeholder="First Name">
                  </td>
                  <td>
                    <input type="text" name="gstudnt_mname[10]" class="input" placeholder="Middle Name">
                  </td>
                  <td>
                    <label>Address:</label>
                  </td>
                  <td>
                    <input type="text" name="gstudnt_address[10]" class="address input" placeholder="Address">
                  </td>
                  <td>
                    <label>Age:</label>
                  </td>
                  <td >
                    <input type="text" name="gstudnt_age[10]" class="age numbers-only" placeholder="Age">
                    <input type="button" id="add-gstudent" name="add_gstudent" class="button add-gstudent" value="+">
                  </td>   
                </tr>              
              </table>
            </div> 

            <div id="section-info-wrap">
                <table>
                  <tr>
                    <td>
                      <label>Department</label>
                    </td>
                    
                      <td>
                          <input type="text" name="class_dept" id="class-dept" class="input" readonly="readonly">
                      </td>
                  </tr>
                  <tr>
                    <td>
                      <label>Section</label>
                    </td>
                    <td>
                      <input type="text" name="section_name" id="section-name" class="input" readonly="readonly">
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <label>Year/Grade</label>
                    </td>
                    <td>
                      

                      <input type="text" name="class_year_grade" id="class-year-grade" class="input" readonly="readonly">
                    </td>
                  </tr>              
                </table>
            </div> 
            
            <div class="modal-footer">
               <input type="hidden" name="advisory_id" id="advisory-id" >
               <input type="hidden" name="section_id" id="section-id" val="">
              <input type="submit" id="add-students" name="add_students" class="button" value="Add">
            </div>
          </form>
          </div>         
        </div>
         <div id="mask"></div>
      </div>
      
    </footer>
  </div>  

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
  <script src="js/jscript-global.js"></script>
  <script type="text/javascript" src="js/slimScroll.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui.js"></script>
  <script src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>    
  <script>
   $(document).ready(function (){
         var windowSizeArray = [ "width=200,height=200",
                            "width=300,height=400,scrollbars=yes" ];

      $('#view_form18A').click(function() {

        if($('.advisory_radio').is(':checked')){
          var link = $('.advisory_radio').attr('rel');

          var NWin = window.open((link), '', 'height=800,width=800,scrollbars=yes');

         

          alert(combined_link);

                 if (window.focus)

                 {

                   NWin.focus();
                 }
        }
        else{
          alert("please choose your advisory");
        }         
       return false;

    });


    $('#add-advisory').click(function (){

      if($('input[name=section_id]').is(':checked')){

        var val_rad = $('input[name=section_id]:checked').val();
        


               $('#table-advisory-content').html("");

             $.ajax({                
                    url:'func_students.php',
                    type:'POST',
                    dataType:'json',
                    data:{'func_num':'3','section_id':val_rad},
                    success: function (data){

                      get_my_advisory2();

                     

                      if(data.error){
                          alert("You're already handling this subject")
                       }
                    }  
            });

          
 
         }
    });


        var counter=10;
        var counter2=10;

      $("body").on('click','.add-bstudent',function () {
                  
                 counter+=1;  

                 $(this).parent().parent().after("<tr><td><label>Name:</label></td><td><input type='text' name='bstudnt_lname["+counter+"]' class='input' placeholder='Last Name'></td><td><input type='text' name='bstudnt_mname["+counter+"]' class='input' placeholder='Middle Name'></td><td><input type='text' name='bstudnt_fname["+counter+"]' class='input' placeholder='First Name'></td><td><label>Address:</label></td><td><input type='text' name='bstudnt_address["+counter+"]' class='address input' placeholder='Address'></td><td><label>Age:</label></td><td><input type='text' name='bstudnt_age["+counter+"]' class='age numbers-only' placeholder='Age'> <input type='button' id='' name='add_bstudent' class='button add-bstudent' value='+'> <input type='button' id='' name='add_bstudent' class='button remove-bstudent' value='-'></td></tr>");

                 var windwheight = $('.window').height();

                 var tothcon = (windwheight/10)*3;

                 

                 var maskWidth = $(window).width();
                 var id = $('.modal').attr('rel');
                 var containerH = $(id).height()/2 ;

                 var totalh = windwheight + containerH + tothcon; 
                  $('#mask').css({'width':maskWidth,'height':totalh});


      });

   $("body").on('click','.add-gstudent',function () {
                  
                 counter2+=1;  

                 $(this).parent().parent().after("<tr><td><label>Name:</label></td><td><input type='text' name='gstudnt_lname["+counter2+"]' class='input' placeholder='Last Name'></td><td><input type='text' name='gstudnt_mname["+counter2+"]' class='input' placeholder='Middle Name'></td><td><input type='text' name='gstudnt_fname["+counter2+"]' class='input' placeholder='First Name'></td><td><label>Address:</label></td><td><input type='text' name='gstudnt_address["+counter2+"]' class='address input' placeholder='Address'></td><td><label>Age:</label></td><td><input type='text' name='gstudnt_age["+counter2+"]' class='age numbers-only' placeholder='Age'> <input type='button' id='' name='add_gstudent' class='button add-gstudent' value='+'> <input type='button' id='' name='add_gstudent' class='button remove-gstudent' value='-'></td></tr>");

                 var windwheight = $('.window').height();

                 var tothcon = (windwheight/10)*3;

                 

                 var maskWidth = $(window).width();
                 var id = $('.modal').attr('rel');
                 var containerH = $(id).height()/2;

                 var totalh = windwheight + containerH + tothcon ; 
                 $('#mask').css({'width':maskWidth,'height':totalh});


      });

      $("body").on('click','.remove-bstudent',function () {
                 $(this).parent().parent().remove();
      });

       $("body").on('click','.remove-gstudent',function () {
                 $(this).parent().parent().remove();
      });
        
          /*class year and grade selection */
       
        

        
    
        /*********** Get all sections available ********/
       
       function get_sections_available(){ 
           $.ajax({                
          url: 'teacher_class_get.php',
          dataType: 'json',
          type: 'POST', 
          data:{'func_num':'1'},
          success: function (data){
            $.each(data, function(i, item) {
              


             $('#table-sections-content').append("<tr ><td style='width:15%;' ><input type='radio' id='section-id["+i+"]' name='section_id' value="+data[i].sec_id+"></td><td style='width:15%;'><label  for='section-id["+i+"]'>"+data[i].sec_lvl+"</label></td><td style='width:45%;'><label  for='section-id["+i+"]'>"+data[i].sec_name+"</label></td><td style='width:20%;'><label  for='section-id["+i+"]'>"+data[i].sec_dept+"</label></td></tr>");

             
             });
   
           }
          });
       }

         /*****************End Get all sections available ******************************/

         var rad_but;
          var rad_val;
          

         $('#add-students').click(function(e) {
        //Cancel the link behavior
           
        e.preventDefault();
        if($('input[name="advisory_section"]').is(":checked")){

                  rad_but = $('input[@name="advisory_section"]:checked');
                  rad_val = $(rad_but).val();
                  var section_id = $('input[@name="advisory_section"]:checked').attr('rel');
                $.ajax({
                    url:'teacher_class_get.php',
                    dataType:'json',
                    type:'POST',
                    data:{'func_num':'3','advsry_id':rad_val},
                    success: function (data){
                      $.each(data, function(i, item) {
                      var sec_dep = data[i].sec_dept;
                      var sec_name = data[i].sec_name;
                      var sec_lvl = data[i].sec_lvl;
                      var advsry_id = data[i].advsory_id;


                      
                      $('#class-dept').val(sec_dep);
                      $('#section-name').val(sec_name);
                      $('#class-year-grade').val(sec_lvl);
                      $('#advisory-id').val(advsry_id);
                      $('#section-id').val(section_id);
                      });
                        
                    }


                });

                //Get the A tag

                var windwheight = $('.window').height();

                

                var id = $(this).attr('rel');

                //Get the screen height and width

                var docheight = $(document).height();
                var containerH = $(id).height()/2*1.5 ;

                var totalh = docheight + containerH ; 

                var maskWidth = $(window).width();

                //Set heigth and width to mask to fill up the whole screen
                $('#mask').css({'width':maskWidth,'height':totalh});

                //transition effect   

                $('#mask').fadeIn(1000);  

                $('#mask').fadeTo("slow",0.8);  

                //Get the window height and width 512

                var winH = $(window).height();

                var winW = $(window).width();

                var height =($(id).height()/2)/2;

                

                //Set the popup window to center

                $(id).css('top',  height);

                $(id).css('left', winW/2-$(id).width()/2);

                //transition effect

                $(id).fadeIn(1000); 
      }
      else{
        alert("Please Select The Section You Are Handling");
      }

  });

  
  //if close button is clicked

      $('.window .close').click(function (e) {

        //Cancel the link behavior

        e.preventDefault();

        $('#mask').hide();

        $('.window').hide();

      });   

  //if mask is clicked

      $('#mask').click(function () {

        $(this).hide();

        $('.window').hide();

      });


      $('#remove-advisory').click(function (){



        if($('input[name="advisory_section"]').is(":checked")){

          var val_rad_section = $('input[name="advisory_section"]:checked').val();

            $('#table-advisory-content').html("");

           $.ajax({
              url:'func_students.php',
              dataType:'json',
              type:'POST',
              data:{'func_num':'5','advisory_id':val_rad_section},
              success: function (data){

                 get_my_advisory2();

                 
              }
            });

        }
        else{

          alert("Please Select The Section You Are Handling");
        }


      });

      $('#view-class').click(function (){

          if($('input[name="advisory_section"]').is(":checked")){

          var val_rad_section = $('input[name="advisory_section"]:checked').val();
           var section_id = $('input[name="advisory_section"]:checked').attr("rel");

          $(location).attr("href","student_list.php?advisory_id="+val_rad_section+"&sec_id="+section_id);

        }

        else{


             alert("Please Select The Section You Are Handling");
        }

      });


      function get_my_advisory(){

         $.ajax({                
                url:'func_students.php',
                type:'POST',
                dataType:'json',
                data:{'func_num':'4'},
                success: function (data){

                   $.each(data, function(i, item) {
                       html = "<tr for='advisory-section"+i+"'>";

                                  html += "<td style='width:15%;'><input type='radio' name='advisory_section' id='advisory-section["+i+"]' value='"+data[i].advisory_id+"'rel='"+data[i].sec_id+"'></td>";
                                  html += "<td style='width:15%;'><label for='advisory-section["+i+"]'> "+data[i].sec_level+"</label> </td> ";
                                  html += "<td style='width:45%;'><label for='advisory-section["+i+"]'> "+data[i].sec_name+"</label> </td> ";
                                  html += "<td style='width:20%;'><label for='advisory-section["+i+"]'> "+data[i].sec_dept+"</label> </td> ";
                                  html += "</tr>";

                         $('#table-advisory-content').append(html);
                       }); 

              }
        });
      }

      function get_my_advisory2(){

          $('#table-sections-content').html("");

         $.ajax({                
                url:'func_students.php',
                type:'POST',
                dataType:'json',
                data:{'func_num':'4'},
                success: function (data){
                  get_sections_available();



                   $.each(data, function(i, item) {
                       html = "<tr for='advisory-section"+i+"'>";

                                  html += "<td style='width:15%;'><input type='radio' name='advisory_section' id='advisory-section["+i+"]' value='"+data[i].advisory_id+"' rel='"+data[i].sec_id+"'></td>";
                                  html += "<td style='width:15%;'><label for='advisory-section["+i+"]'> "+data[i].sec_level+"</label> </td> ";
                                  html += "<td style='width:45%;'><label for='advisory-section["+i+"]'> "+data[i].sec_name+"</label> </td> ";
                                  html += "<td style='width:20%;'><label for='advisory-section["+i+"]'> "+data[i].sec_dept+"</label> </td> ";
                                  html += "</tr>";

                         $('#table-advisory-content').append(html);
                       }); 

              }
        });
      }

      get_my_advisory();

      get_sections_available();

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

