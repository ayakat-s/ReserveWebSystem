<?php
session_start();
require 'smarty.php';
$smarty = new customSmarty();
$smarty->assign('username', $_SESSION['login_user']);
$smarty->display("index.tpl");

