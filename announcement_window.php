<?php
require_once('DBconnect.php');

$anncemnt_id = $_GET['announcement_id'];
$school_id = $_GET['school_id'];

if(isset($anncemnt_id) && isset($school_id)){

	$get_announcement = "SELECT *
				FROM announcement
				WHERE school_id = '$school_id' AND announcement_id = '$anncemnt_id' ";



				$result=mysql_query($get_announcement)or die(mysql_error());

				while ($row = mysql_fetch_array($result))
					{
					
					$announcement_title = $row['announcement_title'];
					$announcement_message = $row['announcement_details'];
				}



}


?>

<!DOCTYPE html>

 <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/style-reset.css">
        <link rel="stylesheet" href="css/style-global.css">
        <link rel="stylesheet" href="css/style-announcement-window.css">

        
    </head>
    <body>
        
    <div id="wrap-body">
          <header>
              <div id="page-nav-bar">
                <img src="./images/headerlogo.png" id="header-logo">
              </div>
          </header>
              <div role="main" id="main">
                <div id="content">

                    <h1><?php echo $announcement_title; ?></h1><br><br><br>


                    <div id = "content-handler">
                        <p><?php echo $announcement_message; ?> </p>
                    </div>
                </div>
              </div>







        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
