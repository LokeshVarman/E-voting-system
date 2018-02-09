<?php 
include "admin_auth.php";
include "admin_header.php";?>
<div id="cover">
<div id="content">

<?php global $msg; echo $msg;?>
	<center>
<h4>Hellow,&nbsp;<?php echo $_SESSION['SESS_NAME'] ;?><br /></h4>
	</center>


       
       
<?php include "footer.php";?>
