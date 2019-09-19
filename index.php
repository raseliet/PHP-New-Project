<?php
$draugo_vardas = 'Draugo';
$draugo_atmintis = [
    'Penktadienis', 'Paskaita', 'Kinas',
    'Vynas', 'Alus', 'Knygos', 'Paskaita'
];

$mano_vardas = 'Rasos';
$mano_atmintis = [
    'Penktadienis', 'Paskaita', 'Baras',
    'Viskis', 'Alus', 'Degtine', 'Paskaita'
];


$bendra_atmintis = [];

$h2_text = "$draugo_vardas atmintis: ";
$h3_text = "$mano_vardas atmintis: ";
$h4_text = "Sutapę prisiminimai";
?>

<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Kas buvo penktadienį?</h1>
        <h2><?php print $h2_text; ?></h2>
        <ul>
            <?php foreach ($mano_atmintis as $mprisiminimas): ?>
                <li><?php print $mprisiminimas; ?></li>

            <?php endforeach; ?>
        </ul>
        <h2><?php print $h3_text; ?></h2>
        <ul>
            <?php foreach ($draugo_atmintis as $dprisiminimas): ?>
                <li><?php print $dprisiminimas; ?></li>
            <?php endforeach; ?>
        </ul>


    </body>
</html>
