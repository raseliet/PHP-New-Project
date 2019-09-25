<?php

$x = 4;
$y = 5;

function sum($x, $y) {
    return $x + $y;
}

$suma = "$x ir $y suma: " . sum($x, $y);

?>
<html>
    <body>
        <h1>
            <?php print $suma; ?>
        </h1>
    </body>
</html> 