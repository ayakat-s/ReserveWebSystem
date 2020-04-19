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
                            <li class="nav-item"><a href="salonCalendar.php" class="nav-link active">サロンの空き状況</a></li>
                            <li class="nav-item"><a href="staffSchedule.php" class="nav-link">スタッフ別の空き状況</a></li>
                        </ul>
                    </div>
                    <table>
                        <caption>
                            <a href="/weekly/{$last_day}">＜</a>
                            <a href="/weekly/{$today}">{$today|date_format:'%Y/%m'}</a>
                            <a href="/weekly/{$next_day}">＞</a>
                        </caption>
                        <thead>
                            <tr>
                                <th>月</th>
                                <th>火</th>
                                <th>水</th>
                                <th>木</th>
                                <th>金</th>
                                <th>土</th>
                                <th>日</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                {foreach $calendar as $calendarKey => $calendarVal}
                                <td class="{$calendarVal[1]}{if $today == $calendarVal[0]} today{/if}"><a href="/weekly/{$calendarVal[0]}">{$calendarVal[0]|date_format:'%e'}</a></td>
                                {/foreach}
                            </tr>
                        </tbody>
                     <!--   <tbody>
                        <tr>
                            <td>10:00~11:00</td>
                            <td>11:00~12:00</td>
                            <td>12:00~13:00</td>
                            <td>13:00~14:00</td>
                            <td>14:00~15:00</td>
                            <td>15:00~16:00</td>
                            <td>16:00~17:00</td>
                            <td>17:00~18:00</td>
                            <td>19:00~20:00</td>
                            <td>20:00~21:00</td>
                        </tr>
                        </tbody> -->
                    </table>
            </main>
            <!--メインここまで-->
            <footer id="commonFooter"></footer>
        </div>
    </body>
</html>