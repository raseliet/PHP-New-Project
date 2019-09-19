<?php

$array = [
    'Monday',
    'Tuesday',
    'Wednesday',
    'Thursday',
    'Friday',
    'Saturday',
    'Sunday'
];

$array[4] = 'Blackout';

unset($array[4]);

$array[0] = 'darbo diena';
$array[1] = 'darbo diena';
$array[2] = 'darbo diena';
$array[3] = 'darbo diena';
$array[4] = 'darbo diena';
$array[5] = 'savaitgalis';
$array[6] = 'savaitgalis';

var_dump($array);
