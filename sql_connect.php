<?php
$hostname_localhost = "localhost";  
$database_localhost = "shenmai";
$username_localhost = "root";	
$password_localhost = "password";
$con = mysql_pconnect($hostname_localhost, $username_localhost, $password_localhost) 
	or trigger_error(mysql_error(),E_USER_ERROR);
mysql_select_db("shenmai") or die ("不能选择数据库: ".mysql_error()); 
mysql_query("set names 'utf-8'");
?>