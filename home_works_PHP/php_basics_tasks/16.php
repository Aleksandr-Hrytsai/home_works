<?php
/**
 * Created by PhpStorm.
 * User: Alexandr
 * Date: 16.09.2017
 * Time: 12:59
 */

function max_number($a, $b)
{
    if ($a > $b) {
        echo $a;
    } elseif ($a < $b) {
        echo $b;
    }
}

max_number(255, 30);