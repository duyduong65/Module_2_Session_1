<?php
$countElement2 = 0;
$draw_1 = " * ";
$draw_2 = " _ ";
$countElement2 = 0;
for ($i = 0; $i < 5; $i++) {
    array_push($arrNumber, $i);
    $arrNumber[$i] = [];

    for ($j = 0; $j < 5; $j++) {
        array_push($arrNumber[$i], $j);
        $arrNumber[$i][$j] = $draw_1;
//        echo $arrNumber[$i][$j];
        if ((3 - $i) >= $j) {
            $countElement2 = $j;
            $arrNumber[$i][$j] = $draw_2;
        }
        echo $arrNumber[$i][$j];

    }
    echo "<br>";
}
