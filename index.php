<?php
$randomiser = rand(0, 2);

if ($randomiser === 0) {
    $coffee = 'black-coffee';
} elseif ($randomiser === 1) {
    $coffee = 'latte';
} else {
    $coffee = 'tea';
} 
    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ka gersi - trys opcijos</title>
        <link rel="stylesheet" href="includes/normalize.css">
        <style>
            div {
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
            .tea {
                height: 70vh;
                color: white;
                background-color: activecaption;

            }
            p{
                font-size: 40px;

            }

        </style>
    </head>
    <body>
        <h1>Ka gersiu?</h1>
        <div class="<?php print $coffee; ?>"></div> 
        <p>Gersiu <?php print $coffee; ?></p>
    </body>
</html>