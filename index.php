<?php

function slot_run($size) {
    $array = [];

    for ($i = 0; $i < $size; $i++) {
        for ($a = 0; $a < $size; $a++) {
            $array[$i][$a] = rand(0, 1);
        }
    }

    return $array;
}

$slot_machine = slot_run(3);

var_dump($slot_machine);
