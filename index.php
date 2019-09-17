<?php
$days = 0;
$grikiai = 5000; //g
$grikiu_likutis = $grikiai;


for ($per_day = rand(200, 500); $grikiu_likutis >= $per_day; $per_day = rand(200, 500)) {
    $grikiu_likutis -= $per_day;
    $days++;
};

$data = date('Y-m-d', strtotime("+ $days day"));
$h2_text = "Rasta grikių: $grikiai g.";
$h3_text = "Išgyvensiu dar $days dienas, iki $data.";
?>

<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Kiek dienų galėsi valgyti grikius?</h1>
        <h2><?php print $h2_text; ?></h2>
        <h2><?php print $h3_text; ?></h2>
    </body>
</html>