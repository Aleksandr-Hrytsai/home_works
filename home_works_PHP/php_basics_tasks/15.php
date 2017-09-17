<?php
/**
 * Created by PhpStorm.
 * User: Alexandr
 * Date: 16.09.2017
 * Time: 12:27
 */
function calc($a, $b, $operator)
{
    if ($operator == "+") {
        $result = $a + $b;
        echo $result;
    } elseif ($operator == "-") {
        $result = $a - $b;
        echo $result;
    } elseif ($operator == "*") {
        $result = $a * $b;
        echo $result;
    } elseif ($operator == "/" && $b != 0) {
        $result = $a / $b;
        echo $result;
    } elseif ($b == 0) {
        echo("На ноль делить нельзя!");
    } elseif ($operator == "%") {
        $result = $a % $b;
        echo $result;
    }
}
calc(24, 5, "%");
