<?php
$date_array = getdate(); // no argument passed so today's date will be used
foreach ($date_array as $key => $val) {
	//echo "$key = $val<br>";
}
$_SESSION['date']=$date_array['mon']."/".$date_array['mday']."/".$date_array['year'];
?>