<?php
$distance = rand(100, 200);
$consumption = 7.5;
$price_1 = 1.3;
$my_money = 100;

$fuel_total = $distance * $consumption / 100;
$price_trip = $fuel_total * $price_1;

if ($price_trip <= $my_money) {
    $iperkama = 'įperkama.';
} else {
    $iperkama = 'neįperkama.';
};


$title = 'Kelionės skaičiuoklė';
$text = 'Suskaičiuoti ir išspausdinti:';
$text_1 = 'Turimi pinigai:' . $my_money . ' eur.';
$text_2 = 'Išvada: kelionė ' . $iperkama;
?>
<html>
    <head>
        <title><?php print $title; ?></title>  
    </head>
    <body>
        <h1><?php print $text; ?></h1>
        <ul>
            <li><?php print $text_1; ?></li>
        </ul>
        <hr>
        <p><?php print $text_2; ?></p>
    </body>
</html>