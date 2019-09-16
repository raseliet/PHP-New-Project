<?php
$kates = rand(1, 3);
$sunys = rand(1, 3);
$pavyko = rand(0, 1);
$katasuniai = 0;

for ($i = 1; $i <= $kates; $i++) {
    for ($j = 1; $j < $sunys; $j++) {
        $pavyko = rand(0, 1);
        if ($pavyko) {
            $katasuniai++;
            break;
        }
    }
}
?>
<html>
    <head>
        <title>Katašunių išeiga</title> 
    </head>
    <body>
        <h1>Katašunių išeiga</h1>
        <h2>Dalyvavo <?php print $kates . ' katės ir ' . $sunys . ' šunys'; ?></h2>
        <h3>Katašunių išeiga: <?php print $katasuniai; ?></h3>
    </body>
</html>





