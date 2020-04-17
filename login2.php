<?php
require_once './vendor/smarty/smarty/libs/Smarty.class.php';
$smarty = new Smarty();

ini_set('display_errors', true);
error_reporting(E_ALL);

session_start();

require 'database.php';

// エラーを格納する変数
$err = [];

// 「ログイン」ボタンが押されて、POST通信のとき
if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST') {
    $email = filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST, 'password');

    if ($email === '') {
        $err['email'] = 'メールアドレスは入力必須です。';
    }
    if ($password === '') {
        $err['password'] = 'パスワードは入力必須です。';
    }

    // エラーがないとき
    if (count($err) === 0) {

        // DB接続
        $pdo = connect();

        // ステートメント
        $stmt = $pdo->prepare('SELECT * FROM users WHERE email = ?');

        // パラメータ設定
        $params = [];
        $params[] = $email;

        // SQL実行
        $stmt->execute($params);

        // レコードセットを取得
        $rows = $stmt->fetchAll();

        // パスワード検証
        foreach ($rows as $row) {
            $password_hash = $row['password'];

            // パスワード一致
            if (password_verify($password, $password_hash)) {
                session_regenerate_id(true);
                $_SESSION['login_user'] = $row;
                header('Location:main.php');
                return;
            }
        }
        $err['login'] = 'ログインに失敗しました。';
    }
}
