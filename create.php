<?php

require 'functions/form/core.php';
require 'functions/html/generators.php';
require 'functions/file.php';


$form = [
    'title' => 'Create Team',
    'fields' => [
        'team' => [
            'type' => 'text',
            'extra' => [
                'attr' => [
                    'placeholder' => 'Team name',
                ]
            ],
            'validators' => [
                'validate_not_empty',
                'validate_team'
            ]
        ]
    ],
    'buttons' => [
        'submit' => [
            'type' => 'submit',
            'value' => 'Create',
        ],
    ],
    'message' => '',
    'callbacks' => [
        'success' => 'form_success',
        'fail' => 'form_fail'
    ]
];

//$teams = [
//    [
//        'team_name' => 'lochai',
//        'players' => [
//            [
//                'nickname' => 'killer',
//                'score' => 10
//            ],
//            [
//                'nickname' => 'thriller',
//                'score' => 10
//            ]
//        ]
//    ],
//    [
//        'team_name' => 'nelochai',
//        'players' => [
//            [
//                'nickname' => 'winner',
//                'score' => 10
//            ],
//            [
//                'nickname' => 'newinner',
//                'score' => 10
//            ]
//        ]
//    ],
//];
function form_fail($filtered_input, &$form) {
    $form['message'] = 'Fail!';
}

function form_success($filtered_input, $form) { // vykdoma, jeigu forma uzpildyta teisingai
    $users_array = file_to_array('data/teams.txt'); // users_array - kiekvieno submit metu uzkrauna esama teams.txt reiksme, ir padaro masyvu

    var_dump($users_array);

    $filtered_input['players'] = []; //sukuriam players masyva

    $users_array[] = $filtered_input; // einamuoju indeksu prideda inputus i users_array
    array_to_file($users_array, 'data/teams.txt'); // User_array konvertuoja i .txt faila JSON formatu
}

$filtered_input = get_filtered_input($form);

if (!empty($filtered_input)) {
    $success = validate_form($filtered_input, $form);
}

var_dump($filtered_input);
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Forma</title>
        <link rel="stylesheet" href="includes/style.css">
    </head>

    <style>
        .container {
            display: flex;
            margin: 50px 0 0 0;
            padding: 20px 0 0;
            justify-content: center;
        }
        body {
            /*background-image: D:/Private/Doc/Desktop/www/img-2.jpg ;*/
            background-size: cover;
        }
        div {
            display: inline-block;


        }

    </style>

    <body>

        <div class="container">
            <?php require 'templates/form.tpl.php'; ?>
        </div>

    </body>
</html>

