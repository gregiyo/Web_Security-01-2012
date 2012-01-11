<?php

$server = 'localhost';
$username = 'root';
$password = '1234';
$database = 'security';

$connect = mysql_connect($server, $username, $password);
mysql_select_db($database, $connect);


