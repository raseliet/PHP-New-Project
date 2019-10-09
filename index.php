<?php

require 'functions/form/core.php';
require 'functions/html/generators.php';

$form = [
    'attr' => [
        'action' => 'index.php',
        'class' => 'bg-black'
    ],
    'title' => 'Kalėdų norai',
    'fields' => [
        'nickname' => [
            'type' => 'text',
            'label' => 'Nickname:',
            'extra' => [
                'attr' => [
                    'placeholder' => 'Enter Name',
                    'class' => 'input-text',
                    'id' => 'first-name'
                ]
            ],
            'validators' => [
                'validate_not_empty'
            ]
        ],
        'password' => [
            'type' => 'text',
            'label' => 'Password:',
            'extra' => [
                'attr' => [
                    'placeholder' => 'Password'
                ]
            ],
            'validators' => [
                'validate_not_empty',
                'validate_password'
            ]
        ]
    ],
    'buttons' => [
        'submit' => [
            'type' => 'submit',
            'value' => 'Siųsti'
        ]
    ],
    'message' => 'Užpildyk formą!',
    'callbacks' => [
        'fail' => 'form_fail',
        'success' => 'form_success'
    ]
];

function form_fail($filtered_input, &$form) {
    $form['message'] = 'Yra klaidų!';
}

function form_success($filtered_input, &$form) {
    $form['message'] = 'success!';

    $file = 'data/db.txt';
    array_to_file($filtered_input, $file);
}

function array_to_file($array, $file) {
    $string = json_encode($array);
    $file = file_put_contents($file, $string);

    if ($file !== false) {
        return true;
    }

    return false;
}

function file_to_array($file) {
    if (file_exists($file)) {
        $encoded_array = file_get_contents($file);
        return json_decode($encoded_array, true);
    }

    return false;
}

$filtered_input = get_filtered_input($form);
if (!empty($filtered_input)) {
    validate_form($filtered_input, $form);
}
$db = file_to_array('data/db.txt');
var_dump($db);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form Templates</title>
        <link rel="stylesheet" href="includes/style.css">
    </head>
    <body>
<?php require 'templates/form.tpl.php'; ?>
    </body>
</html>
