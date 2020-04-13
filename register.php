<?php
require 'smarty.php';
$smarty = new customSmarty();
$smarty->display("register2.php");


//?>


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
</html>//