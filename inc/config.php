<?php
$host = "localhost";
$user = "root";
$pass = "";
$base = "gco";

mysql_connect($host, $user, $pass);
mysql_select_db($base);


define('REMOTE_VERSION', 'http://www.lsiinformatique.fr/tel/version.txt');

define('VERSION', '1.0.0');

$maj_update = file_get_contents(REMOTE_VERSION);

$version = VERSION;
$rootsite = "http://localhost/GCO/";
?>