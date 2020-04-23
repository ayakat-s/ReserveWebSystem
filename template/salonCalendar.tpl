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
        <!-- Full calendar -->
        <link href='../fullcalendar/packages/core/main.css' rel='stylesheet' />
        <link href='../fullcalendar/packages/daygrid/main.css' rel='stylesheet' />
        <link href='../fullcalendar/packages/timegrid/main.css' rel='stylesheet' />
        <link href='../fullcalendar/packages/list/main.css' rel='stylesheet' />
        <script src='../fullcalendar/packages/core/main.js'></script>
        <script src='../fullcalendar/packages/interaction/main.js'></script>
        <script src='../fullcalendar/packages/daygrid/main.js'></script>
        <script src='../fullcalendar/packages/timegrid/main.js'></script>
        <script src='../fullcalendar/packages/list/main.js'></script>
        <script>

        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: [ 'timeGrid' ],
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'timeGridWeek'
            },
            defaultDate: '2020-04-23',
            navLinks: true, // can click day/week names to navigate views
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            events: [
                {
                groupId: 999,
                title: '◎',
                start: '2020-04-23T09:00:00',
                },
                {
                groupId: 999,
                title: '◎',
                start: '2020-04-23T10:00:00',
                },
                {
                groupId: 999,
                title: '◎',
                start: '2020-04-23T11:00:00',
                },
                {
                groupId: 999,
                title: '◎',
                start: '2020-04-23T12:00:00',
                },
                {
                groupId: 999,
                title: '◎',
                start: '2020-04-23T13:00:00',
                },
                {
                groupId: 999,
                title: '◎',
                start: '2020-04-23T14:00:00',
                },
                {
                groupId: 999,
                title: '◎',
                start: '2020-04-23T15:00:00',
                },
                {
                groupId: 999,
                title: '◎',
                start: '2020-04-23T169:00:00',
                },
                {
                groupId: 999,
                title: '◎',
                start: '2020-04-23T17:00:00',
                },
                {
                groupId: 999,
                title: '◎',
                start: '2020-04-23T18:00:00',
                },
                {
                groupId: 999,
                title: '◎',
                start: '2020-04-23T19:00:00',
                },
                {
                groupId: 999,
                title: '◎',
                start: '2020-04-23T20:00:00',
                }
            ]
            });

            calendar.render();
        });

        </script>
        <style>

        body {
            margin: 40px 10px;
            padding: 0;
            font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
            font-size: 14px;
        }

        #calendar {
            max-width: 900px;
            margin: 0 auto;
        }

        </style>
        <!-- Full calendarここまで-->

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
                    <div id='calendar'></div>
                    <!--<table class="calendar">
                        <thead>
                            <tr>
                                <th colspan="2"><a href="https://reserve-web-service.herokuapp.com/salonCalendar.php?item_name={$last_day}">&laquo; 前週</a></th>
                                <th colspan="3"><a href="https://reserve-web-service.herokuapp.com/salonCalendar.php?item_name={$today}">{$today|date_format:'%Y/%m'}</a></th>
                                <th colspan="2"><a href="https://reserve-web-service.herokuapp.com/salonCalendar.php?item_name={$next_day}">次週 &raquo;</a></td>
                            </tr>
                            <tr>
                                <td>日</td>
                                <td>月</td>
                                <td>火</td>
                                <td>水</td>
                                <td>木</td>
                                <td>金</td>
                                <td>土</td>
                            </tr>
                            <tr>
                                {foreach $calendar as $calendarKey => $calendarVal}
                                <td class="{$calendarVal[1]}{if $today == $calendarVal[0]} today{/if}"><a href="https://reserve-web-service.herokuapp.com/salonCalendar.php?item_name={$calendarVal[0]}">{$calendarVal[0]|date_format:'%e'}</a></td>
                                {/foreach}
                                </tr>
                        </thead>
                        <tbody>
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
                        </tbody> 
                    </table>-->
            </main> 
            <!--メインここまで--> 
            <footer id="commonFooter"></footer>
        </div>
    </body>
</html>