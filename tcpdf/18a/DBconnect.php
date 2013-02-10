<?php
	
	$host = 'Localhost';
	$username= 'root';
	$password= '';
	$db_name = 'deped';

	$con = mysql_connect($host,$username,$password) or die ("Cant Connect");
	mysql_select_db($db_name) or die ("Cant Select DataBase");

?>