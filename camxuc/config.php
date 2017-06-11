<?php
$host = "db4free.net";
$username = "shine911";
$password = "thiennhi1412";	
$dbname = "botlove";


$connection = mysql_connect($host,$username,$password);

if (!$connection)

{

die('Could not connect: ' . mysql_error());

}

mysql_select_db($dbname) or die(mysql_error());

mysql_query("SET NAMES utf8");
?>
