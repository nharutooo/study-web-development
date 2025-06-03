<?php
    $total_amount = 100*2 + 1000*1 + 200*2;
    $tax_included = $total_amount * 1.1;
    print("税抜き価格は" . "$total_amount" . "円です。<br>");
    print("税込価格は" . "$tax_included" . "円です。");
?>