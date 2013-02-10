<?php
session_start();

$logout = $_POST['logout'];


if(isset($logout)){

	session_destroy();

	header("Location:index.php");


}

?>