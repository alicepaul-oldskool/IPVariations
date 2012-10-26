<?php
//database info: Change password and DB Name <br />
$db = mysql_connect("localhost", "USER", "PASSWORD") or die (mysql_error());<br />
mysql_select_db ("DATABASE_NAME", $db) or die (mysql_error());<br />
<br />
//get values if input fields<br />
$u_name = addslashes($_GET['u_name']); //Name<br />
$u_email = addslashes($_GET['u_email']); //Email<br />
<br />
//If name and email are NOT empty, insert into mysql<br />
if (strlen($u_name)>1 and strlen($u_email)>1 and strstr($u_email,"@") and strstr($u_email,".") ) {<br />
  $insert = mysql_query("INSERT INTO php_js (u_name, u_email) VALUES ('$u_name', '$u_email')",$db) or die(mysql_error());<br />
}<br />
<br />
//Now Refresh the table at the bottom id=from_mysql<br />
$row_count = 0;<br />
$output = "<table width="600" border="0" cellpadding="3" cellspacing="0" class="table1"><tr><td width="41" align="center" bgcolor="#3366CC"><span class="style1">Srno</span></td><td width="149" align="center" bgcolor="#3366CC"><span class="style1">Name</span></td><td width="384" align="center" bgcolor="#3366CC"><span class="style1">Email</span></td></tr>";<br />
$result = mysql_query("SELECT srno, u_name, u_email FROM php_js",$db) or die (mysql_error());<br />
While( $rows = mysql_fetch_array($result)) {<br />
  $srno      = $rows['srno'];<br />
  $u_name    = $rows['u_name'];<br />
  $u_email   = $rows['u_email'];<br />
  $row_style = ($row_count % 2) ? "row1" : "row2";<br />
  $output   .= "<tr class="$row_style"><td>$srno</td><td>$u_name</td><td>$u_email</td></tr>";<br />
  $row_count = $row_count + 1;<br />
}<br />
//Free Results<br />
mysql_free_result($result);<br />
$output .= "</table>";<br />
?>
<script type="text-javascript">
from_mysql_obj          = document.getElementById( 'from_mysql' );
from_mysql_obj.innerHTML = '<?php echo $output; ?>';
<br />
<br />
//update status box<br />
my_status            = document.getElementById( 'status' );<br />
my_status.innerHTML  = 'Ready...';<br />
<br />
//clear values from text fields<br />
document.getElementById('u_name').value = '';<br />
document.getElementById('u_email').value = '';