<?php

////var_dump($_COOKIE);
//
//$string = 'verte';
//setcookie('cookiename', $string, time() + 3600, '/');
//
//
////setcookie('cookiename', 'myvalue', time() + 3600, '/');
//
////setcookie('mycookie', 'cookiedata', time(), '/');
//////setcookie('mycookie', 'cookiedata', time() - 1, '/');
//
//var_dump($_COOKIE);



$user_id = rand(0, 70);
$visits = 1;


var_dump($_COOKIE);

if (empty($_COOKIE)) {
    // irasyti counta
    setcookie('visits', 1, time() + 3600);
    // irasyti surandominta user_id
    setcookie('user_id', $user_id, time() + 3600);
} else {
    setcookie('visits', ++$_COOKIE['visits'], time() + 3600);

    $user_id = $_COOKIE['user_id'];
    $visits = $_COOKIE['visits'];
    // padidinti counta vienetu
    // user_id nuskaityti is cookie
}



var_dump("User id: $user_id");

var_dump("Visits: $visits");
