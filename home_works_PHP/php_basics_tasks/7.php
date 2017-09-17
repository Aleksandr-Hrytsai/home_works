<?php
/**
 * Created by PhpStorm.
 * User: Alexandr
 * Date: 16.09.2017
 * Time: 7:49
 */
function age($age)
{
    if ($age >= 18 && $age <= 59) {
        echo("Вам еще работать и работать");
    } elseif ($age > 59) {
        echo("Вам пора на пенсию");
    } elseif ($age >= 0 && $age <= 17) {
        echo ("Вам еще рано работать");
    }
}

age(15);