<!doctype html>

      <?php
        session_start();

       

        $log_session = $_SESSION['accnt_typ_admin'];
        $school_id =  mysql_real_escape_string($_GET['sch_id']);

        $school_id = $_GET['sch_id'];

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
  
  
  
  
 
 
</head>

<body>
  <div id="wrap-body">


  <?php

      require_once('header_superadmin.php');

    ?>



    <div role="main" id="main">
      <div id="class-content">
        

        <?php 

        $select_school_name = "SELECT school_name FROM schools WHERE school_id = '$school_id' ";

        $query_select = mysql_query($select_school_name) or die(mysql_error());

        $echo = mysql_fetch_array($query_select);


        ?>

          <div id="school-wrap">
              <div id="school-list-header" class="header-name-wrap">
                <h3>School Sections Of <?php echo  $echo['school_name']; ?> </h3>
              </div>
              <div id="school-list-wrap">
                <table id="table-school-sections-header" class="table-header-all">
                    <tr>
                       <td style="width:15%;">
                        <label>Select</label>
                      </td>
                      <td style="width:15%;">
                        <label>Status</label>
                      </td>
                     
                      <td style="width:15%;">
                        <label >Year</label>
                      </td>
                      <td style="width:20%;">
                        <label>Section</label>
                      </td>
                      <td style="width:15%;">
                        <label>Date</label>
                      </td>
                       <td style="width:20%;">
                        <label>level</label>
                      </td>
                    </tr>

                    
                 </table>
                <div id="school-sections-content"  class="to_scroll"  >
                 
                 <table id="table-school-sections-content" class="table-content-all">
                 </table>
              </div>
            </div>


              <div id="view-form-wrap">
                    <input type="button" id="view-class" name="view-class" class="button" value="View">
                    <input type="button" id="reject-school-button" class="button" value="Reject">
                    <input type="button" id="accept-school-button" class="button" value="Accept">

                    <input type="hidden" id="school-id" value="<?php echo $school_id;?>">
              </div>                
          </div>
        
        </div>       
    </div>

    <footer>

        <div id="reject-remarks-modal" class="window">
            <span class="close-button-wrap">
              <a href="#" class="close close-link"/><div class="close-button">Close it</div></a>
            </span>
            <div class="modal-header">
                <h3>Rejection Remarks</h3>
            </div>

            <div id="add-subject-wrap">
              

              <input type="button" rel="#loading-window" id="reject-submit-button" class="button modal2" value="Submit Reject">
              

              <input type="hidden" id="school-id-cont" value="">
            </div>         
        </div>
       <div id="mask"></div>
      </div>      

        <input type="hidden" id="school-id" value="<?php echo $school_id; ?>">
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

    var ajax_request;

       $('#view-class').click(function (){

        if($('input[name=advisory_section]').is(':checked')){

          var advisory_id = $('input[name=advisory_section]:checked').val();

          var sec_id = $('input[name=advisory_section]:checked').attr("rel");

          var school_id = $('#school-id').val();

           var advisor_id = $('input[name=advisory_section]:checked').closest("tr").find('[id=advisor-id-handler]').attr('rel');;

           $(location).attr('href','student_list_deped.php?advisory_id='+advisory_id+'&sec_id='+sec_id+'&advisor_id='+advisor_id+'&sch_id='+school_id);
        }
        else{

          alert("Please Choose A Section");
        }



       });


        function get_schools_sections(){

          var school_id = $('#school-id').val();


         $.ajax({                
                url: 'deped_functions.php',
                dataType: 'json',
                type: 'POST', //u missed this line.
                data:{'func_num':'2','school_id':school_id},
                success: function (data){
                  $.each(data, function(i, item) {

           

                   html = "<tr>";

                  html += "<td style='width:15%;'><input type='radio' name='advisory_section' id='advisory-section' value='"+data[i].advisory_id+"' rel='"+data[i].sec_id+"'></td>";
                   html += "<td style='width:15%;'><label > "+data[i].status+"</label> </td> ";
                  html += "<td style='width:15%;'><label > "+data[i].sec_lvl+"</label> </td> ";
                  html += "<td style='width:20%;'><label > "+data[i].sec_name+"</label> </td> ";
                  html += "<td style='width:15%;'><label > "+data[i].accptd_dates+"</label> </td> ";
                  html += "<td style='width:20%;'><label id='advisor-id-handler' rel='"+data[i].advisor_id+"'> "+data[i].sec_dept+"</label> </td> ";
                  html += "</tr>";



                    $('#table-school-sections-content').append(html);
                 });
 
               }
          });

       }

       $('#reject-school-button').click(function(){

              if($('input[name=advisory_section]').is(':checked')){

                var school_id = $('#school-id').val();

                var section_id = $('input[name=advisory_section]:checked').attr("rel");


                $('#table-school-sections-content').html("");

                if(ajax_request){

                  ajax_request.abort();
                }
                  
                ajax_request = $.ajax({

                       type:'POST',
                        url:'deped_functions.php',
                   dataType:'json',
                       data:{'func_num':'4','school_id':school_id,'section_id':section_id},
                    success:function (data){
                      
                      if(data.success== "1"){

                        alert("Rejection Is Successful");
                        get_schools_sections();
                      }
                      else{

                        alert("Error In Rejection");
                        get_schools_sections();
                      }

                   }   

                });

              }
              else
              { 

                alert("Please Select A School To Reject")
              }


            });


          $('#accept-school-button').click(function(){

              if($('input[name=advisory_section]').is(':checked')){

                var school_id = $('#school-id').val();

                var section_id = $('input[name=advisory_section]:checked').attr("rel");


                $('#table-school-sections-content').html("");

                if(ajax_request){

                  ajax_request.abort();
                }
                  
                ajax_request = $.ajax({

                       type:'POST',
                        url:'deped_functions.php',
                   dataType:'json',
                       data:{'func_num':'6','school_id':school_id,'section_id':section_id},
                    success:function (data){
                      
                      if(data.success == "1"){

                        alert("Acceptance Is Successful");
                        get_schools_sections();
                      }
                      else{

                        alert("Error In Acceptance");
                        get_schools_sections();
                      }

                   }   

                });

              }
              else
              { 

                alert("Please Select A School To Accept")
              }


            });


        
       

        get_schools_sections();

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

