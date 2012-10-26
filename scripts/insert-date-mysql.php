<?php 
$date = date("Y-m-d"); 
mysql_query("INSERT INTO date_table VALUES ('$name', '$date')", $db_connection); 
?>