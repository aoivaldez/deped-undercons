<!doctype html>

<?php
  session_start();

 

  $log_session = $_SESSION['accnt_typ'];
  $sch_id_reg = $_SESSION['school_id'];


    include_once('DBconnect.php');

    $select_school_name = "SELECT school_name FROM schools WHERE school_id='$sch_id_reg' ";


    $result = mysql_query($select_school_name);

        if(@!$result){
              die('error header'.mysql_error());
            }

       while($row = mysql_fetch_array($result)){

          $school_name = $row['school_name'];

       } 




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
  
  <style type="text/css">
    .reject{

      color:red;
    }


  </style>  
 
 
</head>

<body>
  <div id="wrap-body">

 
    <?php

      require_once('header_registrar.php');

    ?>
  
    <div role="main" id="main">
      <div id="content">

        <div id="logo-wrap">
          <a href="#" class="modal" rel="#upload-window-modal">
            <div id="logo-container">

              <img src="" id="logo-main">

            </div>
          </a>  

          <div id="logo-text-label">

            <label id="logo-header-label"> <?php echo $school_name; ?>  </label>
          </div>
        </div>

        <div id="container-main-content">  

         <div id="lft-col">

          <div id="sent-updates-wrap">

            <div id="sent-updates-header" class="header-name-wrap">
              <h3>Sent To Deped Updates:</h3>
            </div>
            <div id="sent-updates">
              <table id="table-handling-subjects-header" class="table-header-all">
                    <tr>
                      <td style="width:10%">
                        <label>Select</label>
                      </td>
                      <td style="width:25%">
                        <label>Status</label>
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
              <div id="sent-updates-content"  class="to_scroll"  >

                 <table id="table-sections-sent-content" class="table-content-all">
                    
                    
                 </table>
                   
              </div>

            </div>
              <div id="view-form-wrap">
                  <input type="button" id="view-section-sent-button" class="button" value="Check Sent">
              </div>
          </div>

          



          <div id="announcemnts-wrap" >
            
            <div id="announcements-header" class="header-name-wrap">
              <h3>Announcements:</h3>
            </div>

            <div id="announcements">
              <div id="anncmnts-content"  class="to_scroll"  >
                    <ul id="announcement-list">
                      

                    </ul>
              </div>
            </div>
          </div>
      </div>
        <div id="right-col">    
          <div id="updates-wrap">

            <div id="updates-header" class="header-name-wrap">
              <h3>Updates:</h3>
            </div>
            <div id="updates">
              <table id="table-handling-subjects-header" class="table-header-all">
                    <tr>
                      <td style="width:10%">
                        <label>Select</label>
                      </td>
                      <td style="width:25%">
                        <label>Status</label>
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
              <div id="updates-content"  class="to_scroll"  >

                 <table id="table-sections-content" class="table-content-all">
                    
                    
                 </table>
                   
              </div>

            </div>
              <div id="view-form-wrap">
                  <input type="button" id="view-section-button" class="button" value="View Section">
                  <input type="button" id="view-summary-button" class="button" value="View Summary">
                  <input type="hidden" id="school_id_val" value="<?php echo $sch_id_reg; ?>">
              </div>
          </div>
        </div>
      </div>      
    </div>

    <div class="boxes">     
      <div id="upload-window-modal" class="window">
          <div class="modal-header">
              <h3>Upload New Logo</h3>
          </div>

          <div id="logo-container-mod">


            <img src="" id="logo-preview">

          </div>

          <div id="upload-but-wrap">

            <form id="form-upload" action="upload_image.php" method="post" enctype="multipart/form-data">

              <input type="file" name="file_path" id="get-img-path-but">

              <input type="submit" id="form-submit" class="button" value="Upload">

          </form>
        </div>
          
                  
      </div>

      <div id="mask"></div>
    </div>

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

  $(document).ready(function (){

   


/*get announcements from data base*/

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

     /*end*/

     $('#view-section-button').click(function (){


          if($('input[name=section_id]').is(':checked')){

            var rad_val = $('input[name=section_id]:checked').val();
            var rad_rel_val = $('input[name=section_id]:checked').attr("rel");
             var advisor_id_val = $("input[name=section_id]:checked").closest('tr').find('[id=faculty_id]').attr('rel');


            $(location).attr("href","student_list_registrar.php?advisory_id="+rad_rel_val+"&sec_id="+rad_val+"&advisor_id="+advisor_id_val);
            
          }
          else{

            alert("Please Select A Section");
          }

        });

       $('#view-section-sent-button').click(function (){


          if($('input[name=section_id_sent]').is(':checked')){

            var rad_val = $('input[name=section_id_sent]:checked').val();
            var rad_rel_val = $('input[name=section_id_sent]:checked').attr("rel");
             var advisor_id_val = $("input[name=section_id_sent]:checked").closest('tr').find('[id=faculty_id]').attr('rel');


            $(location).attr("href","student_list_registrar.php?advisory_id="+rad_rel_val+"&sec_id="+rad_val+"&advisor_id="+advisor_id_val);
            
          }
          else{

            alert("Please Select A Section");
          }

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

      function get_sections_status(){
         $.ajax({                
        url: 'teacher_class_get.php',
        dataType: 'json',
        type: 'POST', //u missed this line.
        data:{'func_num':'6'},
        success: function (data){
          $.each(data, function(i, item) {

           

            html = "<tr>";

                                  html += "<td style='width:10%;'><input type='radio' name='section_id' rel='"+data[i].advisory_id+"' value='"+data[i].sec_id+"'></td>";
                                  html += "<td style='width:25%;'><label>"+data[i].status+"</label></td>";
                                  html += "<td style='width:15%;'><label id='year_level' rel='"+data[i].sec_lvl+"''>"+data[i].sec_lvl+"</label></td>";
                                  html += "<td style='width:20%;'><label>"+data[i].sec_name+"</label></td>";
                                  html += "<td style='width:30%;'><label id='faculty_id' rel='"+data[i].advisor_id+"'>"+data[i].last_name+", "+data[i].first_name+" "+data[i].middle_name+"</label></td>";                              
                                  html += "</tr>";




           $('#table-sections-content').append(html);
           });
 
               }
          });


        

       }

       function get_sent_status(){
         $.ajax({                
        url: 'grades.php',
        dataType: 'json',
        type: 'POST', //u missed this line.
        data:{'swtch_numbr':'9'},
        success: function (data){
          $.each(data, function(i, item) {

            

            html = "<tr>";

                                  html += "<td style='width:10%;'><input type='radio' name='section_id_sent' rel='"+data[i].advisory_id+"' value='"+data[i].sec_id+"'></td>";
                                  html += "<td style='width:25%;'><label id='status_sent'>"+data[i].status+"</label></td>";
                                  html += "<td style='width:15%;'><label id='year_level' rel='"+data[i].sec_lvl+"''>"+data[i].sec_lvl+"</label></td>";
                                  html += "<td style='width:20%;'><label>"+data[i].sec_name+"</label></td>";
                                  html += "<td style='width:30%;'><label id='faculty_id' rel='"+data[i].advisor_id+"'>"+data[i].last_name+", "+data[i].first_name+" "+data[i].middle_name+"</label></td>";                              
                                  html += "</tr>";

           $('#table-sections-sent-content').append(html);

           });
 
               }
          });

        
        

       }

       $("#view-summary-button").click(function(){

          var school_id_value = $("#school_id_val").val();

          $(location).attr("href","tcpdf/school_summary_reports.php?school_id="+school_id_value);

       });


       get_sections_status();
       get_sent_status();
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

