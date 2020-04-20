<?php
/* Smarty version 3.1.33, created on 2020-04-20 15:15:42
  from 'C:\Users\ayata\Desktop\seitai\template\salonCalendar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e9da07e8d7539_97173431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10764427240022c7072444d353879028f59c1a68' => 
    array (
      0 => 'C:\\Users\\ayata\\Desktop\\seitai\\template\\salonCalendar.tpl',
      1 => 1587388390,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e9da07e8d7539_97173431 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\ayata\\Desktop\\seitai\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
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
        <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            $(function() {
                $("#commonHeader").load("template/header.html");
                $("#commonFooter").load("template/footer.html");
            });
        <?php echo '</script'; ?>
>
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
                    <table class="calendar">
                        <thead>
                            <tr>
                                <th colspan="2"><a href="https://reserve-web-service.herokuapp.com/salonCalendar.php?item_name=<?php echo $_smarty_tpl->tpl_vars['last_day']->value;?>
">&laquo; 前週</a></th>
                                <th colspan="3"><a href="https://reserve-web-service.herokuapp.com/salonCalendar.php?item_name=<?php echo $_smarty_tpl->tpl_vars['today']->value;?>
"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['today']->value,'%Y/%m');?>
</a></th>
                                <th colspan="2"><a href="https://reserve-web-service.herokuapp.com/salonCalendar.php?item_name=<?php echo $_smarty_tpl->tpl_vars['next_day']->value;?>
">次週 &raquo;</a></td>
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
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['calendar']->value, 'calendarVal', false, 'calendarKey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['calendarKey']->value => $_smarty_tpl->tpl_vars['calendarVal']->value) {
?>
                                <td class="<?php echo $_smarty_tpl->tpl_vars['calendarVal']->value[1];
if ($_smarty_tpl->tpl_vars['today']->value == $_smarty_tpl->tpl_vars['calendarVal']->value[0]) {?> today<?php }?>"><a href="https://reserve-web-service.herokuapp.com/salonCalendar.php?item_name=<?php echo $_smarty_tpl->tpl_vars['calendarVal']->value[0];?>
"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['calendarVal']->value[0],'%e');?>
</a></td>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </tr>
                        </thead>
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
</html><?php }
}
