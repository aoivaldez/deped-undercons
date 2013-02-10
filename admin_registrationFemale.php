<?php 
session_start();
$username = $_SESSION['ad_username'];
$firstname = $_SESSION['ad_firstname'];
?>


Ms. <strong><?php echo $firstname;?>'s</strong><br>
<strong>Username</strong> is <u><?php echo $username;?></u><br>
<strong>Password</strong> is <u>12345</u>