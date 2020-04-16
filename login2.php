<?php

// ログイン

require_once(__DIR__ . './configs/config.php');

$app = new MyApp\Controller\Login();

$app->run();

$smartyObj->display('login2.tpl');
// echo "login screen";
// exit;