<?php
    $week = ['日', '月', '火', '水', '木', '金', '土'];
    $today_index = date('w');
    echo "今日は、" . $week[$today_index] . "曜日です";
?>