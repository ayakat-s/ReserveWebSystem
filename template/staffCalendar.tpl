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
        <title>空き状況・ご予約｜整体サロン Natural</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <div class="container">
            <header id="commonHeader"></header>
            <!--メイン-->
            <main class="main">
                <h3>ご希望の来店日時を選択してください</h3>
                    <div class="container mt-5">
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><a href="reserve.php" class="nav-link">サロンの空き状況</a></li>
                            <li class="nav-item"><a href="staffCalendar
                                .php" class="nav-link active">スタッフ別の空き状況</a></li>
                        </ul>
                    </div>
            </main>
            <!--メインここまで-->
            <footer id="commonFooter"></footer>
        </div>
    </body>
</html>