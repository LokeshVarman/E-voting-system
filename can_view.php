<?php 
//include "admin_auth.php";
session_start();
include "header_student.php";?>
<div id="cover">
<div id="content">
<h3>Candidate Profiles</h3>
<?php
include'connection.php';
	$member=mysql_query("select * from candidate");
	if(mysql_num_rows($member)==0)
	{
		echo '<font color="red">No results found</font>';
	}
	else
	{
		echo '<table style="margin-left:250px;"><tr bgcolor="blue" style="color:white;padding:26px;">
<td width="100px" style="padding:15px;">ID</td>		
<td width="100px" style="padding:15px;">FULLNAME</td>
<td width="100px" style="padding:15px;">POSITION</td>
<td width="100px" style="padding:15px;width:290px">ABOUT</td>
<td width="100px" style="padding:15px;">VOTE</td>
</tr>';
 while($mb=mysql_fetch_object($member))
		{	
			$id=$mb->cand_id;
			$name=$mb->fullname;
			$pos=$mb->position;
			$about=$mb->about;
			$vote=$mb->votecount;
	echo '<tr bgcolor="white">';
	echo '<td style="padding:15px;">'.$id.'</td>';		
	echo '<td style="padding:15px;">'.$name.'</td>';
	echo '<td style="padding:15px;">'.$pos.'</td>';
	echo '<td style="padding:15px;">'.$about.'</td>';
	echo '<td style="padding:15px;">'.$vote.'</td>';
	
	echo "</tr>";
		}
		echo'</table>';
	}
?>

        </div>

</div>
</div>
<?php include "footer.php";?>
