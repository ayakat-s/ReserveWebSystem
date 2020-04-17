<?php
require_once './vendor/smarty/smarty/libs/Smarty.class.php';
$smarty = new Smarty();

ini_set('display_errors', true);
error_reporting(E_ALL);

session_start();

require 'database.php';

$err = [];

// 「ログイン」ボタンが押されて、POST通信のとき
if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST') {
    $email = filter_input(INPUT_POST, 'email');
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');
    $passwordConf = filter_input(INPUT_POST, 'passwordConf');

    if ($emai === '') {
        $err['emai'] = 'メールアドレスは入力必須です。';
    }
    if ($username === '') {
        $err['username'] = 'ユーザー名は入力必須です。';
    }
    if ($password === '') {
        $err['password'] = 'パスワードは入力必須です。';
    }
    if ($password !== $password_conf) {
        $err['passwordConf'] = 'パスワードが一致しません。';
    }

    // エラーがないとき
    if (count($err) === 0) {

        // DB接続
        $pdo = connect();

        // ステートメント
        $stmt = $pdo->prepare('INSERT INTO `User` (`id`, `email`, `username`, `password`) VALUES (null, ?, ?)');

        // パラメータ設定
        $params = [];
        $params[] = $email;
        $params[] = $username;
        $params[] = password_hash($password, PASSWORD_DEFAULT);

        // SQL実行
        $success = $stmt->execute($params);
    }
}
?>
<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style type="text/css">
            .error {
                color: red;
            }
        </style>
    </head>
    <body>
        <?php if (count($err) > 0) : ?>
            <?php foreach ($err as $e): ?>
                <p class="error"><?php echo h($e); ?></p>
            <?php endforeach; ?>
        <?php endif; ?>

        <?php if (isset($success) && $success) : ?>
            <p>登録に成功しました。</p>
            <p><a href="index.php">こちらからログインしてください。</a></p>
        <?php else: ?>
            <form action="" method="post">
                <p>
                    <label for="user_name">ユーザー名</label>
                    <input id="user_id" name="user_name" type="text" />
                </p>
                <p>
                    <label for="">パスワード</label>
                    <input id="password" name="password" type="password" />
                </p>
                <p>
                    <label for="">確認用パスワード</label>
                    <input id="password_conf" name="password_conf" type="password" />
                </p>
                <p>
                    <button type="submit">ログイン</button>
                </p>
                <p>
                    <a href="adduser.php">新規ユーザー登録</a>
                </p>
            </form>
        <?php endif; ?>
    </body>
</html>