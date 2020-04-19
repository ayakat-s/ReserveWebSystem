<?php
require 'smarty.php';
$smarty = new customSmarty();
session_start();

require 'database.php';
$login_user = $_SESSION['login_user'];
