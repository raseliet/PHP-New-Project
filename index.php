<?php

$n = rand(11, 12);

function is_prime($n) {
    for ($x = 2; $x < $n; $x++) {
        if ($n % $x == 0) {
            return false;
        }      
    }
    
    return true;
}
 
$text = "$n " . (is_prime($n) ? 'yra' : 'nėra') . ' pirminis skaičius';

if (is_prime($n)) {
    $text = "$n yra pirminis skaičius";
} else {
    $text = "$n nėra pirminis skaičius";
}

?>
<html>
    <head>
        <title>function</title>
    </head>
    <body>
        <h1><?php print $text; ?></h1>
    </body>
</html>