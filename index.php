<?php
$sunny = rand(0, 1);
$cloudy = rand(0, 1);
$rainy = rand(0, 1);
if ($sunny) {
    $koks_siandien_oras = 'Saulėta';
    $class = 'sunny';
} elseif ($cloudy) {
    $koks_siandien_oras = 'Debesuota';
    $class = 'cloudy';
} else {
    $koks_siandien_oras = 'Lyja';
    $class = 'rainy';

}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <style>
            .sunny {
                background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQREayfm8mV1QonfqBx8pFVuZ5_DygVUi13JzxQFTzs-tIUwRDv);
                background-size: cover;
                width: 100px;
                height: 100px;
            }
            .cloudy {
                background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSr4luZFsUQeEZ5lIexKU8fINIQPP9LSymaWwGapeXvrrleqgJq);
                background-size: cover;
                width: 100px;
                height: 100px;
            }
            .rainy {
                background-image: url(https://upload.wikimedia.org/wikipedia/hu/8/86/Es%C5%91_szimb%C3%B3lum.png);
                background-size: cover;
                width: 140px;
                height: 120px;
            }
            
        </style>
    </head>
    <body>
        <h1>Koks šiandien oras?</h1>
        <div class="<?php print $class; ?>"></div> 
        <p><?php print $koks_siandien_oras; ?></p>
    </body>
</html>
