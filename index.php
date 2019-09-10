

<?php

date_default_timezone_set('Europe/Vilnius');

print date('Y-m-d', strtotime('+1 week'));

    
?>



<html>
    <head>
        <meta charset="UTF-8">
        <title><?php print 'PHP lydės ir ' . date('Y-m-d', strtotime('+1 day')); ?></title>
    </head>
    <body>
        <h1>
            Rasa - PHP su manimi buvo ir  <?php print date('H', strtotime('-1 hour')) . ' ' . 'valandą!'; ?>
        </h1>
        <p>
           <?php print date('Y', strtotime('+ 1 year')); ?> ne už kalnų!
        </p>
        <?php print date('l H:i:s') ;?>
    </body>
</html>