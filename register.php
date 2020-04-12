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

if (isset($_POST['signup'])) {
    $userid = $_POST['userid']
    $user_surname = $_POST['user_surname']
    $user_givenname = $_POST['user_givenname']
    $password = $_POST['password']
    try {
        $db = new PDO('mysql:host=localhost;dbname=sample' , '', '');
        $sql = 'insert into users(userid, user_surname, user_givenuname, password) values(?, ?, ?, ?)';
        $stmt = $db->prepare($sql);
        $stmt->execute(array($userid, $user_surname, $user_givenuname, $password));
        $stmt = null;
        $db = null;

        header('Location: '); //ホーム画面に遷移
        exit;
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit;
    }
}

