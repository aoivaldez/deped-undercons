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
  <link rel="stylesheet" href="css/style-home.css">
  
  
 
 
</head>

<body>
  <div id="wrap-body">

    <?php

      require_once('header_superadmin.php');

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

            <label id="logo-header-label"> Department Of Education  </label>
          </div>
        </div>



        <div id="lft-col">

              <div id="announcemnts-wrap">

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
                      <td style="width:20%">
                        <label>Select</label>
                      </td>
                      <td style="width:25%">
                        <label>Status</label>
                      </td>
                      <td style="width:55%">
                        <label>School Name</label>
                      </td>
                    </tr>
                    
                 </table>
                  <div id="updates-content"  class="to_scroll"  >
                    <table id="table-schools-content" class="table-content-all">
                    
                    
                    </table>
                    
                 </div>
                </div>
                  <div id="view-form-wrap">
                      <input type="button" id="view-school-button" class="button" value="View Schools">
                      <input type="button" id="view-summary-button" class="button" value="View Summary">
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

    <footer>
    </footer>
  </div>  

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-ui.js"></script>        
  <script type="text/javascript" src="js/slimScroll.min.js"></script>
  <script src="js/jscript-global.js"></script>

  <script>
    $(document).ready(function(){

     /*get the image logo from data base*/

            /*remember to change the folder name to get the exact directory*/
      var exact_dirct = "./uploads_images/super_admin/"; 

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


     /***add announcement registrar  ***/

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



         $('#anncmnt-add').click(function (){
           var title_anncmnt =  $('#anncmnt-title').val();
            var msg_anncmnt = $('#anncmnt-message').val();

            if( title_anncmnt != "" && msg_anncmnt != ""  ){
                $.ajax({
                    type:'POST',
                    url:'announcement_func.php',
               dataType:'json',
                   data:{'swt_num':'1','announcement_title':title_anncmnt,'announcement_message':msg_anncmnt},
                success:function (data){

                  if(data.error == false){
                    $(location).attr('href','manage_deped.php');
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


         $('#view-school-button').click(function (){

            if($('input[name=school_id]').is(':checked')){

                var school_id = $('input[name=school_id]:checked').val();

                $(location).attr('href','deped_sections_view.php?sch_id='+school_id)

            }
            else
            {


              alert("Please Choose a School");
            }




         });




         function get_all_school_status(){

              $.ajax({
                    type:'POST',
                    url:'deped_functions.php',
               dataType:'json',
                   data:{'func_num':'1'},
                success:function (data){

                          $.each(data, function(i, item) {
                            html = "<tr>";

                                            html += "<td style='width:20%;'><input type='radio' name='school_id' value='"+data[i].school_id+"'></td>";
                                            html += "<td style='width:25%;'><label>"+data[i].stat+"</label></td>";
                                            html += "<td style='width:55%;'><label >"+data[i].school_name+"</label></td>";
                                            
                                            html += "</tr>";
                                  $('#table-schools-content').append(html);
                          });
                    }

                });



            }

            $("#view-summary-button").click(function(){

               $(location).attr("href","tcpdf/deped_summary_reports.php");

            });

            get_all_school_status();


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

