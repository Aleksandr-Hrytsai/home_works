<?php
/**
 * Created by PhpStorm.
 * User: Alexandr
 * Date: 16.09.2017
 * Time: 8:04
 */
function day($day) {
    switch ($day) {
        case ($day >=1 && $day <=5):
            echo ("Это рабочий день");
            break;

    }
}
echo (day(5));
