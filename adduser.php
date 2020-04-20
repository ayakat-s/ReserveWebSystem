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

    if ($emai === '') {
        $err[] = 'メールアドレスは入力必須です。';
    }
    if ($username === '') {
        $err[] = 'ユーザー名は入力必須です。';
    }
    if ($password === '') {
        $err[] = 'パスワードは入力必須です。';
    }
    if ($password !== $password_conf) {
        $err[] = 'パスワードが一致しません。';
    }

    // エラーがないとき
    if (count($err) === 0) {

        // DB接続
        $pdo = connect();

        // ステートメント
        $stmt = $pdo->prepare('INSERT INTO `users` (`email`, `username`, `password`) VALUES (null, ?, ?)');

        // パラメータ設定
        $params = [];
        $params[] = $email;
        $params[] = $username;
        $params[] = password_hash($password, PASSWORD_DEFAULT);

        // SQL実行
        $success = $stmt->execute($params);
        echo "登録に成功しました。";
    }
    $smarty->display("signup.tpl");
}