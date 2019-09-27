<?php

$sheep = ['blee'];

for ($i = 0; $i < 5; $i++) {
    $sheep[] = &$sheep[$i];
}

var_dump($sheep);

//D:\Private\Doc\Desktop\www\index.php:12:
//array (size=6)
//  0 => string 'blee' (length=4)
//  1 => string 'blee' (length=4)
//  2 => string 'blee' (length=4)
//  3 => string 'blee' (length=4)
//  4 => string 'blee' (length=4)
//  5 => string 'blee' (length=4)
