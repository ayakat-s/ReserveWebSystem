<?php
require 'smarty.php';
$smarty = new customSmarty();
session_start();

$db = new PDO("mysql:host=otmaa16c1i9nwrek.cbetxkdyhwsb.us-east-1.rds.amazonaws.com; dbname=oib115zny150btge","uw951052y6bjf31x","plk0b8l7420qmd4b");

if (isset($_POST["login"])) {
    // ログインボタンが押された場合
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $err = false;

    // 1. email の入力チェック
    if (empty($email)) {  // emptyは値が空のとき
        $mail_msg = 'メールアドレスを入力してください。';
        $err = true;
    } else if (mb_strlen($email) > 128) {
        $mail_msg = 'メールアドレスは128文字以下で入力してください。';
        $err = true;
    }
    if (empty($password)) {
        $pass_msg = 'パスワードを入力してください。';
        $err = true;
    } else if (mb_strlen($password) < 6 || 12 < mb_strlen($password)) {
        $pass_msg = 'パスワードは6文字以上12文字以内で設定してください。';
        $err = true;
    }
}

$this->smarty->assign('email', $email);
$this->smarty->assign('mail_msg', $mail_msg);
$this->smarty->assign('pass_msg', $pass_msg);
$this->smarty->assign('message', $message);
$this->smarty->assign('login','ログイン');
$this->smarty->display('login.tpl');