<?php 
//include "admin_auth.php";
session_start();
include "header_student.php";?>
<div id="cover">
<div id="content">
<center><h2>Hello,&nbsp;<?php echo $_SESSION['SESS_NAME'] ;?><br /></h2></center>
<br/><h3>Make a vote.</h3><center>
<table width="750px">
<form action="student_vote.php" name="vote" method="post" id="myform">
<tr>
<td ><img src="candidates/cand1.jpg" width="200px" height="200px"></td>
<td align="left">
<input type="radio" name="cand1" value="1" size="10"/>ABDUL KALAM-(scientist)<br/><br/>
<input type="radio" name="vice1" value="3" size="10"/>GANDHI -(leaders )<br/>
</td>
<td align="left"><img src="candidates/cand2.jpeg" width="200px" height="200px"></td>
</tr>
<tr>
<td align="left">&nbsp;</td>
<td align="left"><?php global $msg; echo $msg;?>
                <?php global $error; echo $error;?>
</td>
</tr>
<tr>
<td align="left"><img src="candidates/cand3.jpg" width="200px" height="200px"></td>
<td align="left">
<input type="radio" name="cand1" value="2" size="10"/>C.V.RAMAN-(scientist)<br/><br/>
<input type="radio" name="vice1" value="4" size="10"/>S.C.BOSE-(leaders)<br/>
</td>
<td align="left"><img src="candidates/cand4.jpeg" width="200px" height="200px"></td>
</tr>
	
	<center><input type="submit" value="MAKE A VOTE" name="submit" style="margin-top:25px" /></center>
        
</form>
	
<script type="text/javascript">
 var frmvalidator = new Validator("myform"); 
 frmvalidator.addValidation("cand1","req","Please select president candidate to vote for.");
 frmvalidator.addValidation("vice1","req","Please select vice candidate to vote for.");  
</script>
</table></center>

</div>
<?php include "footer.php";?>
