<?php

$vardas = 'Rasos';
$mano_atmintis = [
    'Penktadienis', 'Paskaita', 'Baras',
    'Viskis', 'Alus', 'Degtine', 'Paskaita'
];

$h2_text = "$vardas atmintis";
$rand_flashback_idx = rand(0, count($mano_atmintis) - 1);

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
        <h3><?php print $mano_atmintis[$rand_flashback_idx]; ?></h3>
    </body>
</html>