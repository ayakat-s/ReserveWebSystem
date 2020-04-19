<?php
require 'smarty.php';
$smarty = new customSmarty();


/**
 * 
 * PHPでウィークリーカレンダー
 * 
 * @param int $year
 * @param int $month
 * @param int $day
 * @return array
 */
function getCalendarWeekly($year, $month, $day)
{
    // 先月
    $first_week = 8 - date('w', mktime(0, 0, 0, $month, 1, $year));
    if ($first_week >= $day) {
        $before_days = date('w', mktime(0, 0, 0, $month, 1, $year)) - 1;
        for ($i = $before_days; $i > 0; $i--){
            $calendar[] = array(date('Y-m-d', mktime(0, 0, 0, $month, 1 - $i, $year)), 'last_month');
        }
    }

    // 今月
    $total = date('t', mktime(0, 0, 0, $month, 1, $year));

    $this_week = date('w', mktime(0, 0, 0, $month, $day, $year));
    
    if ($this_week == 0) {
        $this_week = 7;
    }    
    
    if ($day - $this_week + 1 > 1) {
        $begin_day = $day - $this_week + 1;
    } else {
        $begin_day = 1;
    }

    if ($day + 7 - $this_week < $total) {
        $end_day = $day + 7 - $this_week;
    } else {
        $end_day = $total;
    }

    for ($i = $begin_day; $i <= $end_day; $i++){
        $calendar[] = array(sprintf('%s-%02d-%02d', $year, $month, $i), 'this_month');
    }

    // 来月
    $last_week = $total + 1 - date('w', mktime(0, 0, 0, $month, $total, $year));
    if ($last_week <= $day) {
        $after_days = 8 - date('w', mktime(0, 0, 0, $month + 1, 1, $year));
        for ($i = 0; $i < $after_days; $i++){
            $calendar[] = array(date('Y-m-d', mktime(0, 0, 0, $month + 1, 1 + $i, $year)), 'next_month');
        }
    }

    // 今日（指定日）
    $today = sprintf('%s-%02d-%02d', $year, $month, $day);

    // 先週の同じ曜日
    $last_day = date('Y-m-d', mktime(0, 0, 0, $month, $day - 7, $year));

    // 来週の同じ曜日
    $next_day = date('Y-m-d', mktime(0, 0, 0, $month, $day + 7, $year));

    return array($calendar, $today, $last_day, $next_day);
}
$smarty->display("salonCalendar.tpl");