<?php

define("DBHOST", "localhost");
define("DBUSER", "root");
define("DBPWD", "root");

define("FOLDERNAME", "hackaton2017");
define("DBNAME", "hackaton");

date_default_timezone_set('Europe/Paris');

$explode = explode('/', $_SERVER['SCRIPT_NAME']);
$protocol = empty($_SERVER['HTTPS']) ? 'http://' : 'https://';
$lienbase = $protocol . $_SERVER['HTTP_HOST'] . str_replace(end($explode), '', $_SERVER['SCRIPT_NAME']);
define('WEBROOT', $lienbase);
