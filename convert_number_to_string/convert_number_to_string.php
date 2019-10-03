<?php
$arrNumberOnes = [
    "1" => "One", "2" => "two", "3" => "three", "4" => "four", "5" => "five", "6" => "six",
    "7" => "seven", "8" => "eight", "9" => "nine", "10" => "ten"
];
$arrNumberTens = [
    "0" => "", "1" => "ten", "2" => "twenty", "3" => "thirty", "4" => "forty", "5" => "fifty", "6" => "sixty", "7" => "seventy", "8" => "eighty", "9" => "ninety"
];
$arrNumber1x = [
    "0" => "twenty", "1" => "eleven", "2" => "twelve", "3" => "thirteen",
    "4" => "fourteen", "5" => "fifteen", "6" => "sixteen", "7" => "seventeen", "8" => "eighteen", "9" => "nineteen"
];

$number = $_POST['inputNumber'];
if (!empty($number)) {
    $arr = str_split($number);
    $lenghtArr = count($arr);
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        if ($number <= 10 && $number > 0) {
            foreach ($arrNumberOnes as $key_1 => $number_1) {
                if ($number == $key_1) {
                    echo $number_1;
                    break;
                }
            }
        } else if ($number > 10 && $number <= 20) {
            foreach ($arrNumber1x as $key_2 => $number_2) {
                if ($arr[$lenghtArr - 1] == $key_2) {
                    echo $number_2;
                }
            }
        } else if ($number > 20 && $number < 100) {
            foreach ($arrNumberTens as $key_3 => $number_3) {
                if ($arr[$lenghtArr - 2] == $key_3) {
                    echo $number_3;
                    foreach ($arrNumberOnes as $key_1 => $number_1) {
                        if ($arr[$lenghtArr - 1] == $key_1) {
                            echo " " . $number_1;
                        }
                    }
                }
            }
        } else if ($number >= 100 && $number < 1000) {
            foreach ($arrNumberOnes as $key_1 => $number_1) {
                if ($arr[$lenghtArr - 3] == $key_1) {
                    echo $number_1 . " hundred ";
                    if ($arr[$lenghtArr - 1] == 0 && $arr[$lenghtArr - 2] != 0) {
                        foreach ($arrNumberTens as $key_3 => $number_3) {
                            if ($arr[$lenghtArr - 2] == $key_3) {
                                echo "and " . $number_3;
                            }
                        }
                    } else if ($arr[$lenghtArr - 1] != 0 && $arr[$lenghtArr - 2] == 0) {
                        foreach ($arrNumberOnes as $key_1 => $number_1) {
                            if ($arr[$lenghtArr - 1] == $key_1) {
                                echo " and " . $number_1;
                            }
                        }
                    } else if ($arr[$lenghtArr - 1] != 0) {
                        if ($arr[$lenghtArr - 2] == 1) {
                            foreach ($arrNumber1x as $key_2 => $number_2) {
                                if ($arr[$lenghtArr - 2] == $key_2) {
                                    echo " and " . $number_2;
                                }
                            }
                        } else if ($arr[$lenghtArr - 2] > 1) {
                            foreach ($arrNumberTens as $key_3 => $number_3) {
                                if ($arr[$lenghtArr - 2] == $key_3) {
                                    echo $number_3;
                                    foreach ($arrNumberOnes as $key_1 => $number_1) {
                                        if ($arr[$lenghtArr - 1] == $key_1) {
                                            echo " " . $number_1;
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
} else {
    echo 'only input number difference 0';
}
