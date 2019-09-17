<?php

$grikiai = 5000;
$days = 0;

for($i = rand(200, 500); $i < $grikiai; $i += rand(200, 500), $days++) {
    var_dump("Diena: $days, Grikių likutis: $grikiai, Suvalgyti grikiai: $i");
}

$data = date('Y/m/d', strtotime("+$days days"));
$text_h2 = "Rasta grikių: $grikiai g.";
$text_h3 = "Išgyvensiu dar $days dienas, iki $data";

?>
<html>
    <body>
        <h1>Kiek dienų galėsi valgyti grikius?</h1>
        <h2><?php print $text_h2; ?></h2>
        <h3><?php print $text_h3; ?></h3>
    </body>
</html>