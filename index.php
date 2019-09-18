<?php

for ($i = 0; $i < 7; $i++) {
    $array[$i] = date('l', strtotime("+ $i days"));

    if ($array[$i] == 'Saturday' || $array[$i] == 'Sunday') {
        $array[$i] = 'Weekend';
    }
};

var_dump($array);
