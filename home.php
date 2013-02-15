<!doctype html>

<?php
  session_start();

 

  $log_session = $_SESSION['accnt_typ_fac'];
  $school_id = $_SESSION['school_id'];

   include_once('DBconnect.php');

    $select_school_name = "SELECT school_name FROM schools WHERE school_id='$school_id' ";


    $result = mysql_query($select_school_name);

        if(@!$result){
              die('error header'.mysql_error());
            }

       while($row = mysql_fetch_array($result)){

          $school_name = $row['school_name'];

       } 


  if(!isset($log_session) || empty($log_session)){

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
  <link rel="stylesheet" href="css/style-home.css">
  
  
 
 
</head>

<body>
  <div id="wrap-body">

 

  <?php

    require_once('header_teacher.php');

  ?>


    <div role="main" id="main">


      <div id="content">

        <div id="logo-wrap">

          
          <div id="logo-container">

              <img src="" id="logo-main">

          </div>
          

          <div id="logo-text-label">

            <label id="logo-header-label"> <?php echo $school_name; ?>  </label>
          </div>
        </div> 

        <div id="container-main-content">

        <div id="lft-col">
            <div id="advisory-wrap">
              <div id="advisory-header" class="header-name-wrap">
                <h3>My Advisory</h3>
              </div>
              <div id="advisory-list-wrap">
                   <table id="table-advisory-home-header" class="table-header-all">
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
                 
                 <table id="table-advisory-home-content" class="table-content-all">
                        
                </table>
              </div>
                <div id="view-form-wrap">
                  <input type="button" id="view-class" name="view_class" class="button" value="View Advisory">
                </div>
            </div>
                
          </div>


            <div id="announcemnts-wrap" >
              <div id="announcements-header" class="header-name-wrap">
                <h3>Announcements:</h3>
              </div>

              <div id="announcements" class="height-scroll">
                <div id="anncmnts-content"  class="to_scroll"  >
                    <ul id="announcement-list">
                      
                    </ul>
                </div>  
              </div>
            </div>
        </div>
        <div id="right-col">

            <div id="approval-wrap">
              <div id="approval-header" class="header-name-wrap">
                <h3>Handling Subjects</h3>
              </div>
              <div id="approval"> 
                <table id="table-handling-subjects-header" class="table-header-all">
                    <tr>
                      <td style="width:10%">
                        <label>Select</label>
                      </td>
                      <td style="width:25%">
                        <label>Subject</label>
                      </td>
                      <td style="width:15%">
                        <label>Year</label>
                      </td>
                      <td style="width:20%">
                        <label>Section</label>
                      </td>
                      <td style="width:30%">
                        <label>Advisor</label>
                      </td>
                    </tr>
                    
                 </table>
                <div id="approval-content"  class="to_scroll"  >
                 
                 <table id="table-handing-subjects-content" class="table-content-all">
                    
                    
                 </table>


              </div>
              <div id="view-approval-wrap">
                <input type="button" name="view_subject_handling" id="view-subject-handling" class="button" value="View Secion" >
              </div>
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


      $('#view-subject-handling').click(function (){
          if($('input[name=handling_subject]').is(':checked')){
          

            var rad_val = $('input[name=handling_subject]:checked').val();
            var section_id_val = $("input[name=handling_subject]:checked").closest('tr').find('[rel]').attr('rel');




             $(location).attr("href","handler_subject_student_list.php?subject_id="+rad_val+"&sect_id="+section_id_val);
          }

        else{
          alert("please choose your advisory");
        }         
       return false;



      });


       /*get the image logo from data base*/

      var exact_dirct = "./uploads_images/schools/"; 

      $.ajax({
                    type:'POST',
                    url:'func_students.php',
               dataType:'json',
                   data:{'func_num':'6'},
                success:function (data){
                  
                  $('#logo-main').attr("src",exact_dirct+data.image_path);

                  $('#logo-preview').attr("src",exact_dirct+data.image_path);
               }
          });

      /*end*/

     

    /**announcement script**/

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
         /*end announcement script*/


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

                                  html += "<td style='width:15%;'><input type='radio' name='advisory_section' id='advisory-section["+i+"]' rel='"+data[i].sec_id+"' value='"+data[i].advisory_id+"'></td>";
                                  html += "<td style='width:15%;'><label for='advisory-section["+i+"]'> "+data[i].sec_level+"</label> </td> ";
                                  html += "<td style='width:45%;'><label for='advisory-section["+i+"]'> "+data[i].sec_name+"</label> </td> ";
                                  html += "<td style='width:20%;'><label for='advisory-section["+i+"]'> "+data[i].sec_dept+"</label> </td> ";
                                  html += "</tr>";

                         $('#table-advisory-home-content').append(html);
                       }); 

              }
        });



      }

        function handling_subject(){

         $.ajax({                
                url:'grades.php',
                type:'POST',
                dataType:'json',
                data:{'swtch_numbr':'4'},
                success: function (data){

                   $.each(data, function(i, item) {
                       html = "<tr for='handling-subject"+i+"'>";

                                  html += "<td style='width:10%;'><input type='radio' name='handling_subject' id='handling-subject["+i+"]' value='"+data[i].subjct_id+"'></td>";
                                  html += "<td style='width:25%;'><label for='handling-subject["+i+"]'> "+data[i].sub_name+"</label> </td> ";
                                  html += "<td style='width:15%;'><label for='handling-subject["+i+"]'> "+data[i].year_level+"</label> </td> ";
                                  html += "<td style='width:20%;'><label id='ref-sec-id' rel='"+data[i].sec_id+"' for='handling-subject["+i+"]'> "+data[i].sec_name+"</label> </td> ";
                                  html += "<td style='width:30%;'><label for='handling-subject["+i+"]'> "+data[i].last_name+","+data[i].first_name+" "+data[i].middle_name+"</label> </td> ";
                                  html += "</tr>";

                         $('#table-handing-subjects-content').append(html);
                       }); 

              }
        });



      }


      get_my_advisory();
      handling_subject();

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

