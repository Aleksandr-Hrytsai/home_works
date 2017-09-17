<?php
/**
 * Created by PhpStorm.
 * User: Alexandr
 * Date: 16.09.2017
 * Time: 8:29
 */
function day($day) {
    switch ($day) {
        case ($day >=1 && $day <=7):
            echo ("Выходной день");
            break;
        default:
            echo ("Неизвестный день");

    }
}
echo (day(8));
