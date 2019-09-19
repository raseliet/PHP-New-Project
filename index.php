<?php
​
$bank_report = [
    [
        'operation_name' => 'IKI darbo užmokestis',
        'amount' => 600,
    ],
    [
        'operation_name' => 'Kalvarijų načnykas',
        'amount' => -15,
    ],
    [
        'operation_name' => 'Viešbutis Panorama',
        'amount' => -20,
    ],
    [
        'operation_name' => 'UAB Misterijos fėjos',
        'amount' => -55,
    ],
];
​
foreach ($bank_report as $operation_idx => $operation) {
    if ($operation['amount'] > 0) {
        $bank_report[$operation_idx]['css_class'] = 'income';
    } else {
        $bank_report[$operation_idx]['css_class'] = 'expense';
    }
    
    $bank_report[$operation_idx]['text'] = "{$operation['operation_name']}: {$operation['amount']}";
}
​
$text_h1 = 'Mano banko išklotinė';
​
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP arrays examples</title>
        <style>
            .item {
                width: 50%;
            }
            
            .income {
                background-color: green;
            }
​
            .expense {
                background-color: red;
            }
        </style>
    </head>
    <body>
        <h1><?php print $text_h1; ?></h1>
        <ul>
            <?php foreach ($bank_report as $operation): ?>
                <li class="item <?php print $operation['css_class']; ?>">
                    <?php print $operation['text']; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>