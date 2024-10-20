<?php

!defined('DEBUG') AND exit('Forbidden');

$modelfilepath_1 = APP_PATH . 'xiunophp/xiunophp.min.php';
$modelfilepath_2 = APP_PATH . 'xiunophp/xiunophp.php';
$modelfilepath_3 = APP_PATH . 'xiunophp/xn_html_safe.func.php';

    // 替换文件
    $new_modelfilepath_1 = APP_PATH . 'plugin/orange_bugfix_php/model/xiunophp.min.php';
    $new_modelfilepath_2 = APP_PATH . 'plugin/orange_bugfix_php/model/xiunophp.php';
    $new_modelfilepath_3 = APP_PATH . 'plugin/orange_bugfix_php/model/xn_html_safe.func.php';

    $r = xn_copy($new_modelfilepath_1, $modelfilepath_1);
    $r = xn_copy($new_modelfilepath_2, $modelfilepath_2);
    $r = xn_copy($new_modelfilepath_3, $modelfilepath_3);

    $r == FALSE AND message(-1, '替换文件失败');