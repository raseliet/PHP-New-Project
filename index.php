<?php

$vardas = 'Rasos';
$mano_atmintis = [
    'Penktadienis', 'Paskaita', 'Baras',
    'Viskis', 'Alus', 'Degtine', 'Paskaita'
];

$rand_flashback_idx = rand(0, count($mano_atmintis) - 1);

$h2_text = "$vardas atmintis";
$h3_text = "Flashback #4: $mano_atmintis[$rand_flashback_idx]";

?>

<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Kas buvo penktadienį?</h1>
        <h2><?php print $h2_text; ?></h2>
        <ul>
<?php foreach ($mano_atmintis as $prisiminimas): ?>
                <li><?php print $prisiminimas; ?></li>
<?php endforeach; ?>
        </ul>
        <h3><?php print $h3_text; ?></h3>
    </body>
</html>