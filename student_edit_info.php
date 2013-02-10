<!doctype html>

<?php

require('DBconnect.php');

  session_start();

  $faculty_id =$_SESSION['user_id_fac'];
  $school_id = $_SESSION['school_id'];


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
  <link rel="stylesheet" href="css/style-student-info.css">
  
 
 
</head>

<body>
  <div id="wrap-body">
  

    <?php

      require_once('header_teacher.php');

      $id = $_GET['id'];

      $query = "SELECT * FROM students a
                          LEFT JOIN advisory_sections b ON (a.advisory_id = b.advisory_id)
                        WHERE student_id = $id";

      $result = mysql_query($query) or die(mysql_error());

      while ($row = mysql_fetch_array($result)){

    ?>

  <div role="main" id="main">
      <div id="content-schoolprofile">
        <div id="profile-header" class="header-name-wrap">
              <h3>Student Information</h3>
        </div>
          <div id="profile">
            <table cellpadding="20"  >
              <tr>
                <td>
                  Name: <label class="result"><?php echo $row['firstname']," ",$row['middlename']," ",$row['lastname']; ?></label>
                </td>
              </tr>
              <tr>
                <td>
                  Address:  <input id="s_address" class="inputbox" style="width:250px" type="text" placeholder="<?php echo $row['address']; ?>">
                </td>
              </tr>
              <tr>
                <td> 
                  Age:  <input id="s_age" class="inputbox" style="width:50px" type="text" placeholder="<?php echo $row['age']; ?>">
                </td>
              </tr>
              <tr>
                <td>
                 Year and Section: <label class="result"><?php echo $row['year_level'], " ", $row['section_name']; ?></label>
                </td>
              </tr>
              <tr>
                <td> 
                  Years in school:  <input id="s_years" class="inputbox" style="width:50px" type="text" placeholder="<?php echo $row['years_in_school']; ?>">
                </td>
              </tr>
               <tr>
                <td> 
                  Total Attendance:  <input id="s_attendance" class="inputbox" style="width:50px" type="text" placeholder="<?php echo $row['attendance']; ?>">
                </td>
              </tr>
              <tr>
                <td>
                 <input id="save_btn" type = "button" class="button" value="Save Changes">
                 <input id="s_id" type="hidden" value="<?php echo $id; ?>">
                </td>
              </tr>
              <table>
           </div>
    </div>

    </div>


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>

    <script src="js/jscript-global.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>        
    <script type="text/javascript" src="js/slimScroll.min.js"></script>

    <script>

 	$(document).ready(function(){


   $('#save_btn').click(function(){

  
    var student_address = $('#s_address').val();
    var student_age = $('#s_age').val();
    var student_years = $('#s_years').val();
    var student_attendance = $('#s_attendance').val();
    var student_id = $('#s_id').val();



   $.ajax({
                          type: "post",
                          url: "edit_student_func.php",
                          dataType:'json',
                          cache:false,
                          data:{'student_id':student_id,'student_address':student_address, 'student_age':student_age, 'student_years':student_years,'student_attendance':student_attendance},

                          success: function(data){

                            alert(data);

                            $(location).attr("href","student_info.php?id_value="+<?php echo $id; ?>+"");

                          }      

                        }).error(function(){
                          alert("error");
                        });


    });

  });
  </script>
</body>

</html>

<?php
}
?>