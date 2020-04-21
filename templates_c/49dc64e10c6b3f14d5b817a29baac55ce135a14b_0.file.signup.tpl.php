<?php
/* Smarty version 3.1.33, created on 2020-04-20 16:48:01
  from 'C:\Users\ayata\Desktop\seitai\template\signup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e9db6211838e5_69223919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49dc64e10c6b3f14d5b817a29baac55ce135a14b' => 
    array (
      0 => 'C:\\Users\\ayata\\Desktop\\seitai\\template\\signup.tpl',
      1 => 1587393750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e9db6211838e5_69223919 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ja">
    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
>
                $(function() {
                    $("#commonHeader").load("template/header.html");
                    $("#commonFooter").load("template/footer.html");
                });
            <?php echo '</script'; ?>
>
        <title>会員登録｜整体サロン Natural</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <div class="container">
            <header id="commonHeader"></header>
            <!--メイン-->
            <main class="main">
                <div class="commonForm">
                    <p class="sign">会員登録</p>
                    <p><?php echo $_smarty_tpl->tpl_vars['errormsg']->value;?></p>
                    <form action="adduser.php" method="post">
                        <label for="email">メールアドレス<span class="badge badge-danger">必須</span></label>
                        <input id="email" type="text" name="email" placeholder="例）guest@example.com">
                        <label for="username">お名前<span class="badge badge-danger">必須</span></label><br>
                        <input id="username" type="text" placeholder="例）山田花子">
                        <label for="password">パスワード<span class="badge badge-danger">必須</span></label>
                        <input id="password" type="password" name="password" placeholder="password">
                        <label for="passwordConf">確認用パスワード<span class="badge badge-danger">必須</span></label>
                        <input id="passwordConf" type="password" name="passwordConf" placeholder="password">
                        <input id="signup" type="submit" name="signup" value="新規登録">
                    </form>
                </div>
                <a href="index.php">戻る</a>
            </main>
            <!--メインここまで-->
            <footer id="commonFooter"></footer>
        </div>
    </body>
</html><?php }
}
