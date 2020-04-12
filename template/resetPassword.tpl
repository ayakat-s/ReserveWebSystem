<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script>
            $(function() {
                //$("#commonHeader").load("template/header.html");
                //$("#commonFooter").load("template/footer.html");
            });
        </script>
        <title>ログイン｜整体サロン Natural</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body class="body2">
        <div class="container">
            <header id="commonHeader"></header>
            <!--メイン-->
            <main class="main">
                <div class="commonForm">
                    <p class="sign">パスワードリセット</p>
                    <form action="resetPassword.php" method="post">
                        <label for="email">メールアドレス<span class="badge badge-danger">必須</span></label>
                        <input id="email" type="text" placeholder="例）guest@example.com">
                        <label for="name">お名前<span class="badge badge-danger">必須</span></label><br>
                        <input id="username" type="text" placeholder="例）山田花子">
                        <label for="password">パスワード<span class="badge badge-danger">必須</span></label>
                        <input id="password" type="password" placeholder="パスワード">
                        <label for="passwordConf">パスワード確認<span class="badge badge-danger" placeholder="パスワード確認">必須</span></label>
                        <input id="passwordConf" type="password">
                        <input id="submit" type="submit" value="送信する">
                    </form>
                </div>
                <a href="login.php">ログイン画面へ戻る</a>
            </main>
            <!--メインここまで-->
            <!--<footer id="commonFooter"></footer>-->
        </div>
    </body>
</html>