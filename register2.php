<?php

$err = [];

if($username = filter_input(INPUT_POST, 'username')) {
    $err[] = 'ユーザ名を記入してください。';
}
if($username = filter_input(INPUT_POST, 'email')) {
    $err[] = 'メールアドレスを記入してください。';
}
$password = filter_input(INPUT_POST, 'password');
if (!preg_match("/\A[a-z\d]{8,20}+\z/i",$password)) {
    $err[] = 'パスワードは英数字8文字以上20文字以下にしてください。'
}
$passwordConf = filter_input(INPUT_POST, 'passwordConf');
if ($password !== $passwordConf) {
    $err[] = '確認用パスワードと異なっています。'
}

if (count($err) === 0) {
    //ユーザを登録する処理
}


