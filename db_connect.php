<?php

$db_host = 'localhost';
$db_user = 'admin';
$db_pass = 'admin';
$db_database = 'test_loc';

$connect = mysql_connect($db_host,$db_user,$db_pass);

mysql_select_db($db_database,$connect) or die("No connection with DB ".mysql_error());
mysql_query("SET names UTF-8");

// php7
// const HOST = 'localhost';
// const USERNAME = 'admin';
// const PASS = 'admin';
// const DBNAME = 'test_loc';
// $connect = mysqli_connect(HOST, USERNAME, PASS, DBNAME);
// mysqli_query($connect,"SET NAMES utf-8");

?>