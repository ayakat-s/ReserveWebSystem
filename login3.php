<?php
require_once './env.php';
require 'smarty.php';
$smarty = new customSmarty();

session_start();

$host = DB_HOST;
$db   = DB_NAME;
$user = DB_USER;
$pass = DB_PASS;

$db = new PDO("mysql:host=$host; dbname=$db","$user","$pass");
$errorMessagePASS ="";
$errorMessageUSER ="";

if (isset($_POST['login'])) {                                                                               ②
　　$u =htmlspecialchars($_POST['email'],ENT_QUOTES);
　　$p =htmlspecialchars($_POST['password'],ENT_QUOTES);
　　$ps=$db->query("SELECT password FROM users WHERE id='$u'");
if ($ps->rowCount()>0)
{ 　$r =$ps->fetch();
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

require( dirname( __FILE__ ).'/libs/Smarty.class.php' );
$smarty = new Smarty();　
$smarty->template_dir = dirname( __FILE__ ).'/templates';　
$smarty->compile_dir = dirname( __FILE__ ).'/templates_c';
$smarty->assign('errorMessagePASS', $errorMessagePASS);
$smarty->assign('errorMessageUSER', $errorMessageUSER);
$smarty->display('login.tpl');