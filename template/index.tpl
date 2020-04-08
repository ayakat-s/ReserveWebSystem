<!DOCTYPE html>
<html lang="ja">
    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!-- Swiper CSS -->
        <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap.js , then Swiper.js -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script>
            $(function() {
                $("#commonHeader").load("template/header.html");
                $("#commonFooter").load("template/footer.html");
            });
        </script>
        <title>Welcome to 整体サロン Natural</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <div class="container">
            <header id="commonHeader"></header>
            <main class="main">
                <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
                <script>
                    var mySwiper = new Swiper ('.swiper-container', {
                      // 以下にオプションを設定
                      loop: true, //最後に達したら先頭に戻る
                     
                      //ページネーション表示の設定
                      pagination: { 
                        el: '.swiper-pagination', //ページネーションの要素
                        type: 'bullets', //ページネーションの種類
                        clickable: true, //クリックに反応させる
                      },
                     
                      //ナビゲーションボタン（矢印）表示の設定
                      navigation: { 
                        nextEl: '.swiper-button-next', //「次へボタン」要素の指定
                        prevEl: '.swiper-button-prev', //「前へボタン」要素の指定
                      },
                     
                      //スクロールバー表示の設定
                      scrollbar: { 
                        el: '.swiper-scrollbar', //要素の指定
                      },
                    })
                    </script> 
                <div class="swiper-container">
                    <!-- メイン表示部分 -->
                    <div class="swiper-wrapper">
                        <!-- 各スライド -->
                        <div class="swiper-slide">Slide 1</div>
                        <div class="swiper-slide">Slide 2</div>
                        <div class="swiper-slide">Slide 3</div>
                        <div class="swiper-slide">Slide 4</div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <img class="img-fluid rounded" src="https://picsum.photos/800/600">
            </main>
            <footer id="commonFooter"></footer>
        </div>
    </body>
</html>