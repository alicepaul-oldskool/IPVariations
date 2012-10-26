<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_blue = "lesliegruen.com";
$database_blue = "leslieg3_devsurvey";
$username_blue = "leslieg3";
$password_blue = "#Leslie123";
$blue = mysql_pconnect($hostname_blue, $username_blue, $password_blue) or trigger_error(mysql_error(),E_USER_ERROR); 
?>