<?php
require_once './vendor/smarty/smarty/libs/Smarty.class.php';
$smarty = new Smarty();
session_start();

require 'database.php';
$login_user = $_SESSION['login_user'];
