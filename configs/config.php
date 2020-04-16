<?php
//require '../smarty.php';

ini_set('display_errors', 1);

define('DSN', 'mysql:dbhost=otmaa16c1i9nwrek.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=oib115zny150btge');
define('DB_USERNAME', 'uw951052y6bjf31x');
define('DB_PASSWORD', 'plk0b8l7420qmd4b');

//define('SITE_URL', 'https://' . $_SERVER['HTTP_HOST']);

require_once(__DIR__ . '/../libs/functions.php');
require_once(__DIR__ . '/autoload.php');

session_start();