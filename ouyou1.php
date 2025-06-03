<?php
    $today = strtotime("today");
    for ($d = 0; $d < 365; $d++) {
        $date = strtotime("+$d day", $today);
        echo date("n/j(D)", $date) . " ";
        if (($d + 1) % 10 == 0) {
            echo "<br>";
        }
    }
?>