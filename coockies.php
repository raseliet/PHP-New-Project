<?php 

//var_dump($_COOKIE);

$string = 'verte';
setcookie('cookiename', $string, time() + 3600, '/');


//setcookie('cookiename', 'myvalue', time() + 3600, '/');

//setcookie('mycookie', 'cookiedata', time(), '/');
////setcookie('mycookie', 'cookiedata', time() - 1, '/');

var_dump($_COOKIE);
