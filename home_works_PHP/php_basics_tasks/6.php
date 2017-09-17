<?php
/**
 * Created by PhpStorm.
 * User: Alexandr
 * Date: 16.09.2017
 * Time: 7:41
 */
function age($age)
{
    if ($age >= 18 && $age <= 59) {
        echo("Вам еще работать и работать");
    } else if ($age > 59) {
        echo("Вам пора на пенсию");
    }
}

age(60);