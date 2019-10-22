<?php

session_start();

require 'functions/form/core.php';
require 'functions/html/generators.php';
require 'functions/file.php';


$form = [
    'title' => 'Log in',
    'fields' => [
        'email' => [
            'type' => 'text',
            'validators' => [
                'validate_not_empty',
//                'validate_email',
            ],
            'extra' => [
                'attr' => [
                    'placeholder' => 'enter email',
                ]
            ],
        ],
        'password' => [
            'type' => 'password',
            'validators' => [
                'validate_not_empty',
            ],
            'extra' => [
                'attr' => [
                    'placeholder' => 'enter password',
                ]
            ]
        ],
    ],
    'buttons' => [
        'submit' => [
            'type' => 'submit',
            'value' => 'Login',
            'class' => 'button'
        ],
    ],
    'validators' => [
        'validate_login',
    ],
    'message' => '',
    'callbacks' => [
        'success' => 'form_success',
        'fail' => 'form_fail'
    ]
];

$filtered_input = get_filtered_input($form);
var_dump($filtered_input);


if (!empty($filtered_input)) {
    validate_form($filtered_input, $form);
}

function validate_login($filtered_input, &$form) {
    var_dump('vykdomas kodas');
    $users = file_to_array('./data/users.txt');
    $input_email = $filtered_input['email'];
    $input_password = $filtered_input['password'];

    var_dump('Ieita i file to array');
    if (!empty($users)) {

        foreach ($users as $user) {

            if ($user['email'] === $input_email && $user['password'] === $input_password) {


                return true;
            }
        }
        $form['fields']['password']['error'] = 'Toks useris neegzisutoja';
        return false;
    }
}

function form_fail($filtered_input, &$form) {
    var_dump('nepavyko');
}

function form_success($filtered_input, $form) { // vykdoma, jeigu forma uzpildyta teisingai
    var_dump('pavyko');
}
//
//$user_already_joined = !empty($_SESSION);
//
//if ($user_already_joined) {
//    $display_form = true;
//
//        if ($form_success) {
//            $display_text = 'Opa, Yra! Spyris užskaitytas!';
//        } else {
//            $display_text = 'Smugis neįskaitytas!';
//        }
//} else {
//    
//    $display_text = 'Sorry, seni.. Nepriklausai jokiai komandai! Join first!';
//    $display_form = false;
//}


?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>LOG IN</title>

    </head>

    <style>
        .container {
            display: flex;
            margin: 50px 0 0 0;
            padding: 20px 0 0;
            justify-content: left;
        }
        body {
            background-image: url(https://media1.giphy.com/media/p1T5dtR0vhtXq/source.gif);
            background-size: cover;
        }
        div {
            display: inline-block;

        }

    </style>

    <body>
            <?php require 'navigation.php'; ?>
        <div class="container">
<?php require 'templates/form.tpl.php'; ?>
        </div>

    </body>
</html>