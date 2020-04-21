<?php
require 'smarty.php';
$smarty = new customSmarty();

ini_set('display_errors', true);
error_reporting(E_ALL);

session_start();

require 'database.php';

// エラーを格納する変数
$err = [];

// 「新規登録」ボタンが押されて、POST通信のとき
if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST') {
    $email = filter_input(INPUT_POST, 'email');
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');
    $passwordConf = filter_input(INPUT_POST, 'passwordConf');

    if ($email === '') {
        $err[] = 'メールアドレスを入力してください。';
    }
    if ($username === '') {
        $err[] = 'ユーザー名を入力してください。';
    }
    if ($password === '') {
        $err[] = 'パスワードを入力してください。';
    }
    if ($passwordConf === '') {
        $err[] = '確認用パスワードを入力してください。';
    }
    if ($password !== $passwordConf) {
        $err[] = 'パスワードが一致しません。';
    }

    // エラーがないとき
    if (count($err) === 0) {

        // DB接続
        $pdo = connect();

        // ステートメント
        $stmt = $pdo->prepare('INSERT INTO `users` (`email`, `username`, `password`) VALUES (?, ?, ?)');

        // パラメータ設定
        $params = [];
        $params[] = $email;
        $params[] = $username;
        $params[] = $password;

        // SQL実行
        $success = $stmt->execute($params);
        echo "登録に成功しました。";
    } $smarty->assign("errormsg",$err[0]);
    $smarty->display("signup.tpl");
}