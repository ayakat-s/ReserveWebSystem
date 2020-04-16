<?php

session_start();

$db = new PDO("mysql:host=otmaa16c1i9nwrek.cbetxkdyhwsb.us-east-1.rds.amazonaws.com; dbname=oib115zny150btge","uw951052y6bjf31x","plk0b8l7420qmd4b");
$errorMessagePASS ="";
$errorMessageUSER ="";

if (isset($_POST['login'])) {
    $u =htmlspecialchars($_POST['email'],ENT_QUOTES);
    $p =htmlspecialchars($_POST['password'],ENT_QUOTES);
    $ps=$db->query("SELECT password FROM users WHERE id='$u'");
if ($ps->rowCount()>0){
    $r =$ps->fetch();
if($r['password']===md5($p)){
    $_SESSION['us']= $u;
　　header("Location: index.php");
}else{
session_destroy();
    $errorMessagePASS = 'パスワードが違います。';
}
}else{
session_destroy();
    $errorMessageUSER ='ユーザーが登録されていません。';
}
}

require( dirname( __FILE__ ).'/vendor\smarty\smarty\libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = dirname( __FILE__ ).'/vendor\smarty\smarty\demo\templates';
$smarty->compile_dir = dirname( __FILE__ ).'/templates_c';
$smarty->assign('errorMessagePASS', $errorMessagePASS);
$smarty->assign('errorMessageUSER', $errorMessageUSER);
$smarty->display('index.tpl');