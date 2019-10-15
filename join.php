<?php
require 'functions/form/core.php';
require 'functions/html/generators.php';
require 'functions/file.php';

function get_options() {
    $teams = file_to_array('data/teams.txt');
    if (!empty($teams)) {
        foreach ($teams as $team) {
            var_dump($team);
            $team_names[$team['team']] = $team['team'];
        }
        return $team_names;
    }
}

$form = [
    'title' => 'Join Team',
    'fields' => [
        'player_name' => [
            'type' => 'text',
            'extra' => [
                'attr' => [
                    'placeholder' => 'Player name',
                ]
            ],
            'validators' => [
                'validate_not_empty',
                'validate_team'
            ]
        ],
        'team_select' => [
            'type' => 'select',
            'value' => '',
            'options' => get_options(),
            'validators' => [
                'validate_not_empty'
            ]
        ]
    ],
    'buttons' => [
        'submit' => [
            'type' => 'submit',
            'value' => 'Join'
        ],
    ],
    'callbacks' => [
        'fail' => 'form_fail',
        'success' => 'form_success'
    ]
];

function form_success($filtered_input, $form) { // vykdoma, jeigu forma uzpildyta teisingai
    $teams = file_to_array('data/teams.txt'); // users_array - kiekvieno submit metu uzkrauna esama teams.txt reiksme, ir padaro masyvu
    foreach ($teams as &$team) {
        if ($team['team'] === $filtered_input['team_select']) {
            $team['players'][] = $filtered_input['player_name'];
        }
        unset($team);
    }
    array_to_file($teams, 'data/teams.txt');
}

function validate_player($field_input, &$field) {
    $teams = file_to_array('data/teams.txt');
    foreach ($teams as $team) {
        foreach ($team['players'] as $player) {
            var_dump($team);
        }
    }
    return $team_names;
}

$filtered_input = get_filtered_input($form);
if (!empty($filtered_input)) {
    $success = validate_form($filtered_input, $form);
}

function form_fail($filtered_input, $form) { //vykdoma ,jeigu forma uzpildyta teisingai
}
?>
<html>
    <head>
        <style>
            .container {
                display: flex;
                margin: 50px 0 0 0;
                padding: 20px 0 0;
                justify-content: center;
            }
            body {
                background-image: url(https://inews.co.uk/images-i.jpimedia.uk/imagefetch/https://inews.co.uk/wp-content/uploads/2019/08/Peppa-Pig.jpg?width=640);
                background-size: cover;
                
            }
            div {
                display: inline-block;

           }
           input {
               border-radius: 2px;
           }

        </style>


        <meta charset="UTF-8">
        <title>Form Templates</title>
    </head>
    <body>
        <?php require 'templates/form.tpl.php'; ?>
    </body>
</html>


