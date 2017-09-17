<?php
/**
 * Created by PhpStorm.
 * User: Alexandr
 * Date: 16.09.2017
 * Time: 8:17
 */
function day($day) {
    switch ($day) {
        case ($day == 6 || $day == 7):
            echo ("Это выходной день");
            break;

    }
}
echo (day(6));
