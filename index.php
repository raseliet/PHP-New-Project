<?php

$vardas = 'Rasos';
$mano_atmintis = [
    'Penktadienis', 'Paskaita', 'Baras',
    'Viskis', 'Alus', 'Degtine', 'Paskaita'
];

$h2_text = "$vardas atmintis";
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
    </body>
</html>