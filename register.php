<?php
require 'functions/form/core.php';
require 'functions/html/generators.php';
require 'functions/file.php';


$form = [
    'title' => 'Registration form',
    'fields' => [
        'full_name' => [
            'type' => 'text',
            'validators' => [
                'validate_not_empty',
            ],
            'extra' => [
                'attr' => [
                    'placeholder' => 'enter full name',
                ]
            ],
        ],
        'email' => [
            'type' => 'text',
            'validators' => [
                'validate_not_empty',
//             'validate_email',
                'validate_email_unique',
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
                'validate_password', // 8 zenklai
            ],
            'extra' => [
                'attr' => [
                    'placeholder' => 'enter password',
                ]
            ]
        ],
        'password_repeat' => [
            'type' => 'password',
//            'validators' => [
//                'validate_not_empty',
//            ],
            'extra' => [
                'attr' => [
                    'placeholder' => 'repeat password',
                ]
            ],
        ],
    ],
    'buttons' => [
        'submit' => [
            'type' => 'submit',
            'value' => 'Register',
            'class' => 'button'
        ],
    ],
    'validators' => [
        'validate_fields_match' => [
            'password',
            'password_repeat',
        ],
    ],
    'message' => '',
    'callbacks' => [
        'success' => 'form_success',
        'fail' => 'form_fail'
    ]
];

function form_fail($filtered_input, &$form) {
    $form['message'] = 'Fail!';
}

function form_success($filtered_input, $form) { // vykdoma, jeigu forma uzpildyta teisingai
    $users_array = file_to_array('data/users.txt'); // users_array - kiekvieno submit metu uzkrauna esama teams.txt reiksme, ir padaro masyvu
    var_dump($users_array);

    $filtered_input['users'] = []; //sukuriam players masyva
    var_dump($filtered_input);

    $users_array[] = $filtered_input; // einamuoju indeksu prideda inputus i users_array
    array_to_file($users_array, 'data/users.txt'); // User_array konvertuoja i .txt faila JSON formatu
//    header('Location: join.php');
}

$filtered_input = get_filtered_input($form);



if (!empty($filtered_input)) {
    var_dump('Buvo submitinta forma');
    $success = validate_form($filtered_input, $form);
}

//var_dump($filtered_input);
//
//$params = ['password', 'password_repeat'];
//var_dump($params);
//function validate_fields_match($filtered_input, $form, $params){
//       if(preg_match("$user_password_repeat === $user_password", $user_password_repeat))
//    if ()
//                        {
//                      return true;
//                   }else{
//                       return false;
//                 }
//            }
//
//
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>CREATE TEAM</title>

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

