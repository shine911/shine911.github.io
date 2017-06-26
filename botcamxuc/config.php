<?php
$host = "mysql.hostinger.vn";
$username = "u374083664_shine";
$password = "14121999";	
$dbname = "u374083664_bot";


$connection = mysql_connect($host,$username,$password);

if (!$connection)

{

die('Could not connect: ' . mysql_error());

}

mysql_select_db($dbname) or die(mysql_error());

mysql_query("SET NAMES utf8");
?>
