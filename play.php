<?php

require 'functions/form/core.php';
require 'functions/html/generators.php';
require 'functions/file.php';

session_start();

$text = 'Go for it, ' . $_SESSION['cookie_nickname'];

var_dump($_SESSION);

if (empty($_SESSION)) {
    header('Location: join.php');
    exit();
}

$form = [
    'title' => "$text",
    'fields' => [],
    'buttons' => [
        'kick' => [
            'type' => 'submit',
            'value' => 'Kick the ball'
        ],
    ],
    'validators' => [
        'validate_kick'
    ],
    'callbacks' => [
        'success' => 'form_success'
    ]
];

function validate_kick($filtered_input, &$form) {
    $teams = file_to_array('data/teams.txt');
    foreach ($teams as $team) {
        if ($team['team'] == $_SESSION['cookie_team']) {
            foreach ($team['players'] as $player) {
                if ($player['nickname'] == $_SESSION['cookie_nickname']) {
                    return true;
                }
            }
        }
    }
};

function form_success($filtered_input, &$form) {
    $teams = file_to_array('data/teams.txt');
    foreach ($teams as &$team) {
        if ($team['team'] == $_SESSION['cookie_team']) {
            foreach ($team['players'] as &$player) {
                if ($player['nickname'] == $_SESSION['cookie_nickname']) {
                    $player['score'] ++;
                    var_dump($player);
                }
            }
        }
    }
    array_to_file($teams, 'data/teams.txt');
    $form['message'] = "Spyris uzskaitytas ({$player['score']})";
}

if (get_form_action() == 'kick') {
    validate_form([], $form);
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
                background-image: url(https://ksassets.timeincuk.net/wp/uploads/sites/55/2017/03/simpsons-the-great-phatsby-1-920x584.jpg);
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