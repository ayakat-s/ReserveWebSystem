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
                    $("#commonHeader").load("template/header.html");
                    $("#commonFooter").load("template/footer.html");
                });
            </script>
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
                    <form action="adduser.php" method="post">
                        <label for="email">メールアドレス<span class="badge badge-danger">必須</span></label>
                        <input id="email" type="text" name="email" placeholder="例）guest@example.com">
                        <label for="username">お名前<span class="badge badge-danger">必須</span></label><br>
                        <input id="username" type="text" placeholder="例）山田花子">
                        <label for="password">パスワード<span class="badge badge-danger">必須</span></label>
                        <input id="password" type="password" name="password" placeholder="password">
                        <label for="passwordConf">確認用パスワード<span class="badge badge-danger">必須</span></label>
                        <input id="passwordConf" type="password" name="passwordConf" placeholder="password">
                        <input id="submit" type ="submit" value="新規登録">
                    </form>
                </div>
                <a href="index.php">戻る</a>
            </main>
            <!--メインここまで-->
            <footer id="commonFooter"></footer>
        </div>
    </body>
</html>