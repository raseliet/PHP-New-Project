<?php

$array = [
    'Monday' => 'Monday',
    'Tuesday' => 'Tuesday',
    'Wednesday' => 'Wednesday',
    'Thursday' => 'Thursday',
    'Friday' => 'Friday',
    'Saturday' => 'Saturday',
    'Sunday' => 'Sunday'
];

foreach ($array as $key => $day) {
    if ($key == 'Friday') {
        print "$key yra gera diena";
    }
}

var_dump($array);
