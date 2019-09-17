<?php

$months = 0;
$car_price_new = 30000;
$depreciation = 2;
$santaupos = 15000;

for ($car_price_used = $car_price_new, $months = 0; $santaupos < $car_price_used; $months++) {
    $car_price_used -= ($car_price_used / 100 * $depreciation);
}

$depr_perc = round(100 - ($car_price_used / $car_price_new * 100));

$h2_text = "Naujos mašinos kaina: $car_price_new";
$h3_text = "Mašiną galėsi nusipirkti po $months mėn., kai jos vertė bus: $car_price_used eur.";
$h4_text = "Mašina nuvertės $depr_perc proc";

?>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Kiek nuvertės mašina?</h1>
    <h2><?php print $h2_text; ?></h2>
    <h3><?php print $h3_text; ?></h3>
    <h4><?php print $h4_text; ?></h4>
</body>
</html>
