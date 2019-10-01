<?php
$i=mktime(11, 14, 54, 8, 12, 2014). "<br>";
echo "Created date is " . date("Y-m-d h:i:sa", $i). "<br>";
echo "The time is " . date("h:i:sa"). "<br>";
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l"). "<br>";
$k=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $k). "<br>";
$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";
?>

