<?php
$sunny = rand(0, 1);
$cloudy = rand(0, 1);


if ($sunny) {
    $koks_siandien_oras = 'Sauleta';
    $class = 'sunny';
} else {
    $koks_siandien_oras = 'Debesuota';
    $class = 'cloudy';
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

        </style>
    </head>
    <body>
        <h1>Sauleta ar debesuota</h1>
        <div class="<?php print $class; ?>"></div> 
        <p><?php print $koks_siandien_oras; ?></p>
    </body>
</html>