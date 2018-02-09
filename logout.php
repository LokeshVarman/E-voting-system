<?php
session_start();

	if("username"){
	session_destroy();
	unset($_SESSION['SESS_MEMBER_ID']);
	$msg="<center><h3><font color='#FFFFFF'>Successful logged out.</h3></center></font>";
	include'index.php';
	}
?>
