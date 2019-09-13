<?php
$distance = rand(50, 200); // km
$consumption = 7.5;        // 1/100km
$price = 1.3;              // Eur/l

$fuel_total = $consumption * $distance / 100;
$price_trip = $fuel_total * $price;

$antraste = 'Kelionės skaičiuoklė';
$kiek_nuvaziuota_km = 'Nuvažiuota distancija: ' . $distance . ' km.';
$kiek_sunaudota_kuro = 'Sunaudota: ' . $fuel_total . ' l. kuro.';
$keliones_sanaudos = 'Kaina: ' . $price_trip . ' eur.';
        
?>
        
<html>
    <head> 
        <meta charset="UTF - 8">
        <title>Suskaičiuoti ir išspausdinti</title>

    </head>
    <body>
        <h1><?php print $antraste; ?></h1>
        <ul>
            <li><?php print $kiek_nuvaziuota_km; ?></li>
            <li><?php print $kiek_sunaudota_kuro; ?></li>
            <li><?php print $keliones_sanaudos; ?></li>
        </ul>  

    </body>
</html> 





