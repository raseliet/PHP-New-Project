<?php
$color1 = rand(0, 255);
$color2 = rand(0, 255);
$color3 = rand(0, 255);
$fontSize = rand(20, 30);
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP lydės ir <?php print date('Y-m-d', strtotime('+' . rand(1,10) . 'year')); ?></title>
    </head>
    <body style="background-color: rgb(<?php print $color1; ?>, <?php print $color2; ?>, <?php print $color3; ?>)">
        <h1 style="font-size: <?php print $fontSize; ?>px">
            Rasa - Galbūt turėsiu  <?php print (rand(1,5)); ?> vaikų(us)!
        </h1>
        <p style="color: rgb(<?php print $color3; ?>, <?php print $color2; ?>, <?php print $color1; ?>">
            D. Trump'as nebebus prezidentu:<br>
           <?php print date('Y-m-d', strtotime('+' . rand(2,10) . 'year')); ?> 
        </p>
    </body>
</html>