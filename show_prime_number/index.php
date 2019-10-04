<?php
function checkNum($num)
{
    if ($num < 2) {
        return false;
    } else {
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                return false;
                break;
            }
        }
        return true;
    }
}

for ($j = 0; $j < 100; $j++) {
    if (checkNum($j)) {
        echo "$j   ";
    }
}
$count = 0;
$dem = 0;
while ($count < 10) {
    if (checkNum($dem)) {
        echo "<br> $dem   ";
        ++$count;
    }
    $dem++;
}




