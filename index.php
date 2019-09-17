<?php
$days = 365;
$pack_price = 3.50;
$count_ttl = 0;

for ($i = 0; $i < $days; $i++) {
    $savaites_diena = date('N', strtotime("+$i days"));
    //print "$savaites_diena<br/>";
    if ($savaites_diena <= 5) {
        $cigs_mon_fri = rand(3, 4);
        $count_ttl += $cigs_mon_fri;
        //print "$savaites_diena-ieni surukiau $cigs_mon_fri<br/>";
    } elseif ($savaites_diena == 6) {
        $cigs_sat = rand(10, 20);
        $count_ttl += $cigs_sat;
        //print "$savaites_diena-ieni surukiau $cigs_mon_fri<br/>";
    } else {
        $cigs_sun = rand(1, 3);
        $count_ttl += $cigs_sun;
        //print "$savaites_diena-ieni surukiau $cigs_mon_fri<br/>";
    }
}
//print "$count_ttl <br/>";
$price_ttl = $pack_price / 20 * $count_ttl;

$h2_text = "Per $days dienas surūkysiu $count_ttl cigaretes už $price_ttl eur.";
?>

<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Mano dūmų skaičiuoklė</h1>
        <h2><?php print $h2_text; ?></h2>
    </body>
</html>