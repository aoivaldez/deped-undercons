<!doctype html>

<?php
  session_start();

 

  $log_session = $_SESSION['accnt_typ_admin'];

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
  <link rel="stylesheet" href="css/style-manage-registrar.css">
 
  
  
  
 
 
</head>

<body>
  <div id="wrap-body">

 
    <?php

      require_once('header_superadmin.php');

    ?>
 
    <div role="main" id="main">


      <div id="tab-container">
          <div id="tab1" class="tab-content">
            <div class="wrap-search-nav">
              <form action="manage_deped.php" method="post">
              <ul class="search-by-ul"> 
                <li>
                  <label>Filter By:</label>
                </li>
                <li>
                  <input type="checkbox">
                  <label>All:</label>
                </li>
                <li>
                  <label>Level:</label>
                  <input type="text" name="srch_sch_section" class="input" placeholder="Grade/Year">
                </li>
                <li>
                  <label>Department:</label>
                  <input type="text" name="srch_sch_year" class="input" placeholder="Elementary/Highschool">  
                </li>
                <li>
                  <label>Section:</label>
                  <input type="text" name="srch_sch_year" class="input" placeholder="Section Name">  
                </li>
                <li>
                  <input type="button" name="search" class="button" value="Filter">  
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

                    <Center>
<Table width="60%" border="1">
  <tr>
    <th colspan="2">Selected</>
    <TH>Level</>
    <TH>Department</> 
    <TH>Section</TH>
  </tr>
  <tr>
    <td align="Center" colspan="2">      
        <a href=><input type="radio" name="selected" value="selected"></a>      
      </td>
      <td align="Center">FirstYear</td>
      <td align="Center">Highschool</td>
      <td>I-Sapphire</td>
  </tr>
  <tr>
    <td align="Center" colspan="2">
        <input type="radio" name="selected" value="selected">
      </td>
      <td align="Center">SecondYear</td>
      <td align="Center">Highschool</td>
      <td>II-Lead</td>

  </tr>
  <tr>
    <td align="Center" colspan="2">
         <input type="radio" name="selected" value="selected">
      </td>
      <td align="Center">SecondYear</td>
      <td align="Center">Highschool</td>
      <td>II-Gold</td>

  </tr>
  <tr>
    <td align="Center" colspan="2">
        <input type="radio" name="selected" value="selected">
      </td>
      <td align="Center">ThirdYear</td>
      <td align="Center">Highschool</td>
      <td>III-Pacific</td>

  </tr>
  <tr>
    <td align="Center" colspan="2">
        <input type="radio" name="selected" value="selected">
      </td>
      <td align="Center">FourthYear</td>
      <td align="Center">Highschool</td>
      <td>IV-Rizal</td>

  </tr>
  <tr>
    <td align="Center" colspan="2">
        <input type="radio" name="selected" value="selected">
      </td>
      <td align="Center">FourthYear</td>
      <td align="Center">Highschool</td>
      <td>IV-Aguinaldo</td>

  </tr>
  <tr>
    <td align="Center" colspan="2">
        <input type="radio" name="selected" value="selected">
      </td>
      <td align="Center">FirstYear</td>
      <td align="Center">Highschool</td>
      <td>I-Aquamarine</td>

  </tr>
  <tr>
    <td align="Center" colspan="2">
        <input type="radio" name="selected" value="selected">
      </td>
      <td align="Center">ThirdYear</td>
      <td align="Center">Highschool</td>
      <td>III-Antarctic</td>

  </tr>
  <tr>
    <td align="Center" colspan="2">
        <input type="radio" name="selected" value="selected">
      </td>
      <td align="Center">SecondYear</td>
      <td align="Center">Highschool</td>
      <td>II-Jade</td>

  </tr>
  <tr>
    <td align="Center" colspan="2">
        <input type="radio" name="selected" value="selected">
      </td>
      <td align="Center">SecondYear</td>
      <td align="Center">Highschool</td>
      <td>II-Chromium</td>

  </tr>
  <tr>
    <td align="Center" colspan="2">
        <input type="radio" name="selected" value="selected">
      </td>
      <td align="Center">SecondYear</td>
      <td align="Center">Highschool</td>
      <td>II-Cobalt</td>

  </tr>
  <tr>
    <td align="Center" colspan="2">
        <input type="radio" name="selected" value="selected">
      </td>
      <td align="Center">FourthYear</td>
      <td align="Center">Highschool</td>
      <td>IV-Mabini</td>

  </tr>
  <tr>
    <td align="Center" colspan="2">
        <input type="radio" name="selected" value="selected">
      </td>
      <td align="Center">FourthYear</td>
      <td align="Center">Highschool</td>
      <td>IV-Bonifacio</td>

  </tr>
  <tr>
    <td align="Center" colspan="2">
        <input type="radio" name="selected" value="selected">
      </td>
      <td align="Center">ThirdYear</td>
      <td align="Center">Highschool</td>
      <td>I-Indian</td>

  </tr>
  <tr>
    <td align="Center" colspan="2">
        <input type="radio" name="selected" value="selected">
      </td>
      <td align="Center">FirstYear</td>
      <td align="Center">Highschool</td>
      <td>I-Ruby</td>

  </tr>
  <tr>
    <td align="Center" colspan="2">
        <input type="radio" name="selected" value="selected">
      </td>
      <td align="Center">SecondYear</td>
      <td align="Center">Highschool</td>
      <td>II-Helium</td>

  </tr>
</Table>

                  </div>  
                  
                </div>

                <input type="button" name="view_stud_fac" rel="form 18-A_1styear.php" class="button " value="View">
                
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

        $('#search-content').slimScroll({
          height:elem_height,
          start: 'top',
          wheelStep: 10,
          railVisible: true,
        }).css({ paddingRight: '10px' });


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

