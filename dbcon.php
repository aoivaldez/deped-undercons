<?php

$error = 'Couldn\'t connect to database';

$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';

$mysql_db = 'deped';

if(!@mysql_connect ($mysql_host, $mysql_user, $mysql_pass) || !@mysql_select_db($mysql_db) ){
	die($error);

}

?>