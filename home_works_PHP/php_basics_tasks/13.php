<?php
/**
 * Created by PhpStorm.
 * User: Alexandr
 * Date: 16.09.2017
 * Time: 8:49
 */
function speed ($s, $t) {
    echo ($kmh = $s / $t).PHP_EOL;
    echo ($ms = ($s * 1000) / ($t * 3600));
}
speed (200, 2);
