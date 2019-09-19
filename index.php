<?php
$draugo_atmintis = [
    'Penktadienis', 'Paskaita', 'Kinas',
    'Vynas', 'Alus', 'Knygos', 'Paskaita'
];

$mano_atmintis = [
    'Penktadienis', 'Paskaita', 'Baras',
    'Viskis', 'Alus', 'Degtine', 'Paskaita'
];

$mprisiminimas = [];
$dprisiminimas = [];
$bendra_atmintis = [];

foreach ($draugo_atmintis as $dprisiminimas) {
    foreach ($mano_atmintis as $mprisiminimas) {
        if ($dprisiminimas == $mprisiminimas) {           
            $bendra_atmintis[] = $mprisiminimas;
            break;
        }
    }
}

var_dump($bendra_atmintis);


$h4_text = "Sutapę prisiminimai";
?>

<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Kas buvo penktadienį?</h1>
        <h3><?php print $h4_text; ?></h3>
        <ul>
            <?php
            ?>

        </ul>

    </body>
</html>
