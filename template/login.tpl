<!DOCTYPE html>
<html lang="ja">
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
<body class="loginBody">
    <div class="container">
        <header id="commonHeader"></header>
        <main class="main">
            <div class="loginForm">
                <p class="sign">Login</p>
                <form action="login.php" method="post">
                    <input class="un " type="text" placeholder="登録ID（メールアドレス）">
                    <input class="pass" type="password" placeholder="パスワード">
                    <a class="submit">ログイン</a>
                    <p class="forgot"><a href="resetPassword.php">パスワードをお忘れですか？</p>
                </form>
            </div>
            <a href="index.php">戻る</a>
        </main>
        <!--メインここまで-->
        <footer id="commonFooter"></footer>
    </div>
</body>
</html>