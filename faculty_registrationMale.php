<?php 
session_start();
$username = $_SESSION['fa_username'];
$firstname = $_SESSION['fa_firstname'];
?>


Mr. <strong><?php echo $firstname;?>'s</strong><br>
<strong>Username</strong> is <u><?php echo $username;?></u><br>
<strong>Password</strong> is <u>12345</u>