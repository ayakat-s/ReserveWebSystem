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
        <title>メニュー・料金｜整体サロン Natural</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <div class="container">
            <header id="commonHeader"></header>
            <!--メイン-->
            <main>
                <h2>メニュー</h2>
                <div class="menuBlock">
                    <div class="menuItem">
                        <div class="menuTtext">
                            <h3>全身姿勢矯正コース（60分）</h3>
                            <p>骨盤の歪み、O脚Ｘ脚、猫背、肩こりなどの症状にお悩みの方におすすめのコースです。<br>
                                本気で身体を変えたい方におすすめです！！ <br>
                                ※時間には歪みのチェック・カウンセリングも含みます。</p>
                        </div>
                        <div class="menuPhoto">
                            <img src="images/decor-at-natural-spa.jpg" width="300" height="225" alt="">
                        </div>
                    </div>
                    <div class="menuItem">
                        <div class="menuText">
                            <h3>首肩集中コース（30分/60分）</h3>
                            <p>時間がなく部分的に集中してやってほしい方におすすめです。 <br>
                                ※時間には歪みのチェック・カウンセリングも含みます。</p>
                        </div>
                        <div class="menuPhoto">
                            <img src="images/candles-glow-with-spa-decor.jpg" width="300" height="225" alt="">
                        </div>
                    </div>
                    <div class="menuItem">
                        <div class="menuText">
                            <h3>美脚矯正コース（30分/60分）</h3>
                            <p> 足の歪み、むくみにお悩みの方におすすめです。 <br>
                                ※時間には歪みのチェック・カウンセリングも含みます。</p>
                        </div>
                        <div class="menuPhoto">
                            <img src="images/a-woman-points-her-toes-while-stretching-her-legs-in-pool.jpg" width="300" height="225" alt="">
                        </div>
                    </div>
                </div>
                <h2>施術料金</h2>
                <table border="1">
                    <tr>
                        <th>施術メニュー</th>
                        <th>時間</th>
                        <th>基本料金</th>
                    </tr>
                    <tr>
                        <td>全身姿勢矯正コース</td>
                        <td>60分</td>
                        <td>11,000円</td>
                    </tr>
                    <tr>
                        <td rowspan="2">首肩集中コース</td>
                        <td>60分</td>
                        <td>8,800円</td>
                    </tr>
                        <td>30分</td>
                        <td>5,500円</td>
                    </tr>                       
                    <tr>
                        <td rowspan="2">美脚矯正コース</td>
                        <td>60分</td>
                        <td>8,800円</td>
                    </tr>
                        <td>30分</td>
                        <td>5,500円</td>
                    </tr> 
                </table>
            </main>
            <!--メインここまで-->
            <footer id="commonFooter"></footer>
        </div>
    </body>
</html>