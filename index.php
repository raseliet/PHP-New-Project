<?php
require 'functions/form/core.php';
require 'functions/html/generators.php';
require 'functions/file.php';

$form = [
    'attr' => [
        'action' => 'index.php',
        'class' => 'bg-black'
    ],
    'title' => 'Login form',
    'fields' => [
        'nickname' => [
            'type' => 'text',
            'value' => '',
            'extra' => [
                'attr' => [
                    'placeholder' => 'Enter nickname',
                    'class' => 'input-text',
                    'id' => 'nickname'
                ]
            ],
            'validators' => [
                'validate_not_empty'
            ],
            'label' => 'Nickname:'
        ],
        'password' => [
            'type' => 'password',
            'value' => '',
            'extra' => [
                'attr' => [
                    'placeholder' => 'Enter password',
                    'class' => 'input-text',
                    'id' => 'password'
                ]
            ],
            'validators' => [
                'validate_not_empty',
                'validate_password'
            ],
            'label' => 'Password:'
        ]
    ],
    'buttons' => [
        'submit' => [
            'type' => 'submit',
            'value' => 'Submit'
        ],
        'reset' => [
            'type' => 'reset',
            'value' => 'Clear'
        ]
    ],
    'message' => '',
    'callbacks' => [
        'success' => 'form_success',
        'fail' => 'form_fail'
    ],
];

function form_fail($filtered_input, &$form) {
    $form['message'] = 'Fail!';
}

function form_success($filtered_input, &$form) {
    $form['message'] = 'success!';
    $old_array = file_to_array('data/db.txt');
    $old_array[] = $filtered_input;
    var_dump($old_array);
    array_to_file($old_array, 'data/db.txt');

    setcookie('user', $filtered_input['nickname'], time() + 3600, '/');
    $_COOKIE['user'] = $filtered_input['nickname'];
}

$filtered_input = get_filtered_input($form);
if (!empty($filtered_input)) {
    validate_form($filtered_input, $form);
}
$array = file_to_array('data/db.txt');
//foreach ($array as $key => $value) {
//
//}

var_dump($_COOKIE);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form Templates</title>
        <link rel="stylesheet" href="includes/style.css">
    </head>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 15px;
            text-align: left;
        }
        table#t01 {
            width: 100%;
            background-color: #f1f1c1;
        }
    </style>
    <body>

        <?php if (isset($_COOKIE['user'])) : ?>
            <table style="width:100%">
                <?php foreach ($array ?? [] as $user): ?>
                    <?php var_dump($user); ?>
                    <tr>
                        <th><?php print $user['nickname']; ?></th>
                        <th><?php print $user['password']; ?></th>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php else: ?>
            <?php require 'templates/form.tpl.php'; ?>
        <?php endif; ?>
    </body>
</html>