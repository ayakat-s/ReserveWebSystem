<?php
require('vendor/smarty/libs/Smarty.class.php');

$smarty = new Smarty;

session_start(); 

$err = [];

if($username = filter_input(INPUT_POST, 'username')) {
    $err[] = 'ユーザ名を記入してください。';
}
if($email = filter_input(INPUT_POST, 'email')) {
    $err[] = 'メールアドレスを記入してください。';
}
$pass = filter_input(INPUT_POST, 'pass');
if (!preg_match("/\A[a-z\d]{8,20}+\z/i",$password)) {
    $err[] = 'パスワードは英数字8文字以上20文字以下にしてください。'
}
$passConf = filter_input(INPUT_POST, 'passConf');
if ($pass !== $passConf) {
    $err[] = '確認用パスワードと異なっています。'
}

if (count($err) === 0) {
    //ユーザを登録する処理
}

?>


<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザ登録完了画面</title>
</head>
<body>
    <?php if (count($err) > 0) : ?>
        <?php foreach($err as $e) : ?>
            <p><?php echo $e ?></p>
        <?php endforeach ?>
    <?php else : ?>
        <p>ユーザ登録が完了しました。</p>
    <?php endif ?> 
    <a href="index.php">戻る</a>
</body>
</html>

