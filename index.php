<?php
$months = 24;
$car_price_new = 30000; //eur
$depreciation = 2; // %/men
//(% nuo esamos vertės per mėnesį)
$car_price_used = $car_price_new;

for ($i = 0; $i < $months; $i++) {
    $car_price_used -= ($car_price_used / 100 * $depreciation);
}

$depr_perc = 100 - ($car_price_used / $car_price_new * 100);

$text_h2 = "Naujos mašinos kaina: $car_price_new eur.";
$text_h3 = "Po $months mėn., mašinos vertė bus: $car_price_used eur.";
$text_h4 = "Mašina nuvertės $depr_perc proc.";
?>
<html>
    <body>
        <h1>Kiek nuvertės mašina?</h1>
        <h2><?php print $text_h2; ?></h2>
        <h3><?php print $text_h3; ?></h3>
        <h4><?php print $text_h4; ?></h4>
    </body>
</html>