<?php

$array = [
    'Monday' => 'workday',
    'Tuesday' => 'workday',
    'Wednesday' => 'workday',
    'Thursday' => 'workday',
    'Friday' => 'workday',
    'Saturday' => 'Saturday',
    'Sunday' => 'Sunday'
];

$tasks = [
    'Keliamės 6:00',
    'Sporto klubas',
    'Rytinis kamštis',
    'Code Academy',
    'Vakarinis kamštis',
    'Netflix'
];

foreach ($array as $key => $day) {
    if ($day == 'workday') {
        $array[$key] = $tasks;
        if ($key == 'Friday') {
            $array[$key][5] = 'Baro linksmybes';
        }
    }
}

foreach ($array as $key => $day){
    unset ($array[$key]);
}

var_dump($array);
