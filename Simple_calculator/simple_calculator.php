<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $operand_1 = $_POST['operand_1'];
    $operand_2 = $_POST['operand_2'];
    $operator = $_POST['operator'];
    switch ($operator) {
        case "*":
            echo $operand_1 . " * " . $operand_2 . " = " . ($operand_1 * $operand_2);
            break;
        case "+":
            echo $operand_1 . " + " . $operand_2 . " = " . ($operand_1 + $operand_2);
            break;
        case  "-":
            echo $operand_1 . " - " . $operand_2 . " = " . ($operand_1 - $operand_2);
            break;
        case "/":
            try {
                checkNum($operand_2);
                echo $operand_1 . " / " . $operand_2 . " = " . ($operand_1 / $operand_2);
            } catch (Exception $e) {
                Echo "Messege: " . $e->getMessage();
            }
            break;
    }
}
function checkNum($operand)
{
    if ($operand == 0) {
        throw new Exception("value is 0");
    }
}