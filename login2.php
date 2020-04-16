<?php

// ログイン

require_once(__DIR__ . './configs/config.php');

$app = new MyApp\Controller\Login();

$app->run();

require 'smarty.php';
$smarty = new customSmarty();
$smartyObj->display('login2.tpl');
// echo "login screen";
// exit;