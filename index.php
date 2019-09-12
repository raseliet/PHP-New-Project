<?php
$siukslines_turis = 40; //litrų
$siuksliu_turis_per_d = 15; //litrų
$max_kaupo_turis = rand(0, 45) ; //litrų
$po_kiek_dienų = floor(($siukslines_turis + $max_kaupo_turis) / $siuksliu_turis_per_d);
$data = date('Y-m-d', strtotime("+$po_kiek_dienų days"));
$atsakymas = "Po $po_kiek_dienų ($data) pirk gėlių ir šampano, jeigu nori išvengti konflikto.";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Užduotis - po kelių dienų kils barnis?</title>
    </head>
    <body>
        <h1><?php print $atsakymas ;?></h1>
    </body>
</html>