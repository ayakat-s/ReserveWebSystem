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
        <title>お問い合わせ｜整体サロン Natural</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <div class="wrapper"></div>
        <header id="commonHeader"></header>
        <!--メイン-->
        <main>
            <h2>お問い合わせ</h2>
            <div>
                <form action="confirm.php" method="post" name="form" onsubmit="return validate()">
                    <h3 class="contact-title">お問い合わせ 内容入力</h3>
                    <p>お問い合わせ内容をご入力の上、「確認画面へ」ボタンをクリックしてください。</p>
                    <div>
                        <label>お名前<span class="badge badge-danger">必須</span></label>
                        <input type="text" name="name" placeholder="　例）山田 花子" value="">
                    </div>
                    <div>
                        <label>メールアドレス<span class="badge badge-danger">必須</span></label>
                        <input type="text" name="email" placeholder="　例）guest@example.com" value="">
                    </div>
                    <div>
                        <label>お問い合わせ内容<span class="badge badge-danger">必須</span></label>
                        <textarea name="content" rows="5" placeholder="　お問合せ内容を入力してください。"></textarea>
                    </div>
                    <div class="botton">
                        <button type="submit">確認画面へ</button>
                    </div>
                </form>
            </div>
            <a href="index.php">戻る</a>
        </main>
        <!--メインここまで-->
        <footer id="commonFooter"></footer>    
    </body>
</html>