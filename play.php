<?php

require 'functions/form/core.php';
require 'functions/html/generators.php';
require 'functions/file.php';

$nickname = $_COOKIE['cookie_nickname'];
$form = [
    'title' => "Go for it, $nickname",
    'fields' => [
    ],
    'buttons' => [
        'submit' => [
            'type' => 'submit',
            'value' => 'Kick the ball'
        ],
    ],
    'callbacks' => [
        'success' => 'form_success'
    ]
];
var_dump($_COOKIE);
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

