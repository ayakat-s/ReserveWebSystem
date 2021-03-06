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
        {if $username eq ''}
        <script>
            $(function() {
                $("#commonHeader").load("template/header.html");
                $("#commonFooter").load("template/footer.html");
            });
        </script>
        {else}
        <script>
            $(function() {
                $("#commonHeader").load("template/headerLogin.html");
                $("#commonFooter").load("template/footer.html");
            });
        </script>
        {/if}
        <title>Welcome to 整体サロン Natural</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <p>{$username}</p>
        <div class="container">
            <header id="commonHeader"></header>
            <main class="main">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="images/slide1.png" alt="Slide1"></div>
                        <div class="swiper-slide"><img src="images/slide2.png" alt="Slide2"></div>
                        <div class="swiper-slide"><img src="images/slide3.png" alt="Slide3"></div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div> 
                    <div class="swiper-button-next"></div>
                    <div class="swiper-scrollbar"></div> 
                </div>
                <script src="https://unpkg.com/swiper/js/swiper.min.js"></script> 
                <script>
                    var mySwiper = new Swiper('.swiper-container', {
                        autoplay: {
                            delay: 5000,
                            stopOnLastSlide: false,
                            disableOnInteraction: false,
                            reverseDirection: false
                        },
                        navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev'
                        },
                        pagination: {
                            el: '.swiper-pagination',
                            type: 'bullets',
                            clickable: true
                        }
                    });
                </script>
                <h2 id="about">ABOUT US</h2>
                <img class="img-fluid rounded" src="https://picsum.photos/800/600">
            </main>
            <footer id="commonFooter"></footer>
        </div>
    </body>
</html>