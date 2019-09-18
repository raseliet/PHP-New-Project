<?php

$array = [];

for ($i = 0; $i < 7; $i++) {
    $day = date('l', strtotime("+ $i days"));

    if ($day == 'Saturday' || $day == 'Sunday') {
        $array[$day] = 'Weekend';
    } else {
        $array[$day] = 'Workday';
    }
}

var_dump($array);
