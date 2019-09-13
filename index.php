<?php
$randomiser = rand(0, 1);

if ($randomiser) {
    $coffee = 'black-coffee';
} else {
    $coffee = 'latte';
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="includes/normalize.css">
        <style>
            .div {
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .black-coffee {
                height: 70vh;
                color: white;
                background-color: black;

            }
            .latte {
                height: 70vh;
                color: white;
                background-color: burlywood;
            }
                p{
                    font-size: 40px;

                }

            </style>
        </head>
        <body>
            <h1>Kokia kava gersiu</h1>
            <div class="<?php print $coffee; ?>"></div> 
            <p>Gersiu <?php print $coffee; ?></p>
        </body>
    </html>