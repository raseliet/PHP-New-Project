<?php
$months = 12;
$wallet = 1000;
$month_income = 700;

for ($i = 1; $i <= 12; $i++) {
    $month_expenses = rand(600, 1200);
    $wallet += $month_income - $month_expenses;

    if ($wallet < 0) {
        $h2_text = "Atsargiai, $months mėnesį gali baigtis pinigai: $wallet";
        break;
    }

    $h2_text = "Po $months m., prognozuojamas likutis: $wallet";
}

?>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Wallet Forecast</h1>
        <h2><?php print $h2_text; ?></h2>
    </body>
</html>