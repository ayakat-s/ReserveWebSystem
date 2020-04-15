<?php
/* Smarty version 3.1.33, created on 2020-04-15 14:21:52
  from 'C:\Users\ayata\Desktop\seitai\template\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e96fc609e4c10_46792592',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed7677efc79ca957ee6395aed83555b235d70c4b' => 
    array (
      0 => 'C:\\Users\\ayata\\Desktop\\seitai\\template\\login.tpl',
      1 => 1586875050,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e96fc609e4c10_46792592 (Smarty_Internal_Template $_smarty_tpl) {
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
                    //$("#commonHeader").load("template/header.html");
                    //$("#commonFooter").load("template/footer.html");
                });
            <?php echo '</script'; ?>
>
        <title>ログイン｜整体サロン Natural</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body class="body2">
        <div class="container">
            <header id="commonHeader"></header>
            <main class="main">
                <div class="loginForm">
                    <p class="sign">Login</p>
                    <form action="userlogin.php" method="post">
                        <div>
                            <input id="email" type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" placeholder="guest@example.com">
                            <?php echo $_smarty_tpl->tpl_vars['mail_msg']->value;?>

                        </div>
                        <div>
                            <input id="pass" type="password" name="pass" value="" placeholder="password"><br>
                            パスワードは6文字以上にしてください。<br>
                            <?php echo $_smarty_tpl->tpl_vars['pass_msg']->value;?>
<br/>
							<?php echo $_smarty_tpl->tpl_vars['message']->value;?>

                        </div>
                        <input id="submit" type="submit" value="ログイン">
                        <p class="forgot"><a href="resetPassword.php">パスワードをお忘れですか？</a></p>
                    </form>
                </div>
                <a href="index.php">戻る</a>
            </main>
            <!--メインここまで-->
            <!--<footer id="commonFooter"></footer>-->
        </div>
    </body>
</html><?php }
}
