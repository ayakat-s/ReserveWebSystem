<?php
require 'smarty.php';
$smarty = new customSmarty();

//週を表示する
$week = array(
    '日',
    '月',
    '火',
    '水',
    '木',
    '金',
    '土',
    );
    $smarty->assign('week', $week);
    $smarty->assign('today', date('d'));
    
    $today_week = date('w');
    
    //週の初めの日付を算出
    $week_startDate = time() - $today_week * (24 * 60 * 60);

    $this_week = array();
    for( $n = 0; $n < 7; $n ++ ){
    //今週の日付を配列に格納する 日曜日から土曜日の順
    $this_week[$n] = date('d', $week_startDate + ($n * (24 * 60 * 60 )));
    }
    $smarty->assign('this_week', $this_week);
    
    $smarty->display('salonCalendar.tpl');