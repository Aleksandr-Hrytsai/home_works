<?php
/**
 * Created by PhpStorm.
 * User: Alexandr
 * Date: 16.09.2017
 * Time: 7:00
 */
function age($age)
{
    if ($age >= 18 && $age <= 59) {
        echo("Вам еще работать и работать");
    } else {
        echo("Значение переменной age не попадает в диапазон чисел от 18 до 59 ");
    }
}

age(19);




